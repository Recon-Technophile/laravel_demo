<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\TaskboardColumn;
use App\Models\TaskCategory;
use App\Models\TaskLabelList;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskCalendarController extends AccountBaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'app.menu.taskCalendar';
        $this->middleware(function ($request, $next) {
            abort_403(!in_array('tasks', $this->user->modules));
            return $next($request);
        });
    }

    /**
     * XXXXXXXXXXX
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->projects = Project::allProjects();
        $this->clients = User::allClients();
        $this->employees = User::allEmployees();
        $this->taskCategories = TaskCategory::all();
        $this->taskLabels  = TaskLabelList::all();
        $this->taskBoardStatus = TaskboardColumn::all();

        if (request('start') && request('end')) {
            $startDate = Carbon::parse(request('start'))->format('Y-m-d');
            $endDate = Carbon::parse(request('end'))->format('Y-m-d');
            $projectId = $request->projectID;
            $taskBoardColumn = TaskboardColumn::completeColumn();

            $model = Task::leftJoin('projects', 'projects.id', '=', 'tasks.project_id')
                ->leftJoin('users as client', 'client.id', '=', 'projects.client_id')
                ->join('taskboard_columns', 'taskboard_columns.id', '=', 'tasks.board_column_id')
                ->join('task_users', 'task_users.task_id', '=', 'tasks.id')
                ->join('users as member', 'task_users.user_id', '=', 'member.id')
                ->leftJoin('users as creator_user', 'creator_user.id', '=', 'tasks.created_by')
                ->leftJoin('task_labels', 'task_labels.task_id', '=', 'tasks.id')
                ->select('tasks.*')
                ->whereNull('projects.deleted_at')
                ->with('boardColumn', 'users')
                ->groupBy('tasks.id');

            if ($startDate !== null && $endDate !== null) {
                $model->where(function ($q) use ($startDate, $endDate) {
                    $q->whereBetween(DB::raw('DATE(tasks.`due_date`)'), [$startDate, $endDate]);

                    $q->orWhereBetween(DB::raw('DATE(tasks.`start_date`)'), [$startDate, $endDate]);
                });
            }

            if ($projectId != 0 && $projectId != null && $projectId != 'all') {
                $model->where('tasks.project_id', '=', $projectId);
            }

            if ($request->clientID != '' && $request->clientID != null && $request->clientID != 'all') {
                $model->where('projects.client_id', '=', $request->clientID);
            }

            if ($request->assignedTo != '' && $request->assignedTo != null && $request->assignedTo != 'all') {
                $model->where('task_users.user_id', '=', $request->assignedTo);
            }

            if ($request->assignedBY != '' && $request->assignedBY != null && $request->assignedBY != 'all') {
                $model->where('creator_user.id', '=', $request->assignedBY);
            }

            if ($request->status != '' && $request->status != null && $request->status != 'all') {
                if ($request->status == 'not finished') {
                    $model->where('tasks.board_column_id', '<>', $taskBoardColumn->id);
                }
                else {
                    $model->where('tasks.board_column_id', '=', $request->status);
                }
            }

            if ($request->label != '' && $request->label != null && $request->label != 'all') {
                $model->where('task_labels.label_id', '=', $request->label);
            }

            if ($request->category_id != '' && $request->category_id != null && $request->category_id != 'all') {
                $model->where('tasks.task_category_id', '=', $request->category_id);
            }

            if ($request->billable != '' && $request->billable != null && $request->billable != 'all') {
                $model->where('tasks.billable', '=', $request->billable);
            }

            if ($request->searchText != '') {
                $model->where(function ($query) {
                    $query->where('tasks.heading', 'like', '%' . request('searchText') . '%')
                        ->orWhere('member.name', 'like', '%' . request('searchText') . '%')
                        ->orWhere('projects.project_name', 'like', '%' . request('searchText') . '%');
                });
            }

            $tasks = $model->get();

            $taskData = array();

            foreach ($tasks as $key => $value) {
                $taskData[] = [
                    'id' => $value->id,
                    'title' => $value->heading,
                    'start' => $value->start_date->format('Y-m-d'),
                    'end' => $value->due_date->format('Y-m-d'),
                    'color' => $value->boardColumn->label_color
                ];
            }
            
            return $taskData;
        }

        return view('tasks.calendar', $this->data);
    }

}
