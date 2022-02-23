<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'apimatic/jsonmapper' => 'v2.0.3@f7588f1ab692c402a9118e65cb9fd42b74e5e0db',
  'apimatic/unirest-php' => '2.1.0@e07351d5f70b445664e2dc4042bbc237ec7d4c93',
  'asm89/stack-cors' => 'v2.0.5@7a198ec737e926eab15d29368fc6fff66772b0e2',
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.209.4@784e5ccc1b544db5018a41fc4dbfeda4c7d436b3',
  'bacon/bacon-qr-code' => '2.0.4@f73543ac4e1def05f1a70bcd1525c8a157a1ad09',
  'barryvdh/laravel-dompdf' => 'v0.9.0@5b99e1f94157d74e450f4c97e8444fcaffa2144b',
  'barryvdh/laravel-translation-manager' => 'v0.5.10@18ed550eb74f9e61d2fc72d06dfa576296d0d5cb',
  'berkayk/onesignal-laravel' => 'v1.0.7@11a3015f33a2cd0c98f2fe1c1ea47cf67cc3e5e6',
  'billowapp/payfast' => '0.4.0@9679bfba42c221ca202ca768ce5d49f46851041f',
  'billowapp/show-me-the-money' => '0.4.2@85ae731682ea7b954567525db657eb32b96610a4',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'clue/stream-filter' => 'v1.5.0@aeb7d8ea49c7963d3b581378955dbf5bc49aa320',
  'composer/ca-bundle' => '1.3.1@4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'craftsys/msg91-laravel' => 'v0.12.1@e630c4487a85eb0653b0861939848aa60b812500',
  'craftsys/msg91-laravel-notification-channel' => 'v0.5.1@f89e7aabe8b566280146f7d9b6d1817bd40b5e9f',
  'craftsys/msg91-php' => 'v0.15.2@85e52b30078ef5eccffbe4c8577fc762e3b2878b',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/dbal' => '3.2.1@4caf37acf14b513a91dd4f087f7eda424fa25542',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.2@9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
  'dompdf/dompdf' => 'v1.1.1@de4aad040737a89fae2129cdeb0f79c45513128d',
  'dragonmantank/cron-expression' => 'v3.2.4@9545dea2a1d92b60c8b3d06f02025c83e999bde0',
  'edujugon/push-notification' => 'v5.0.0@a6c01c832b31bf6b4072ade1b5e245e53c0d69b3',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'eluceo/ical' => '0.16.1@7043337feaeacbc016844e7e52ef41bba504ad8f',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'froiden/envato' => '1.8.2@02adead736284748fe8d35d8979dd574b5fba373',
  'froiden/laravel-installer' => '1.6.4@7a4ebe442b61bec8056b4ead6f02e48ec98ec0b5',
  'froiden/laravel-rest-api' => '8.0.1@f24a86ea36d53cbc21832230eb682cf5315b2bf7',
  'fruitcake/laravel-cors' => 'v2.0.5@3a066e5cac32e2d1cdaacd6b961692778f37b5fc',
  'google/apiclient' => 'v2.12.1@1530583a711f4414407112c4068464bcbace1c71',
  'google/apiclient-services' => 'v0.229.0@ec64bbf1d6af9475bee7b1ce4fc0ed8a0a8d8889',
  'google/auth' => 'v1.18.0@21dd478e77b0634ed9e3a68613f74ed250ca9347',
  'google/cloud-core' => 'v1.43.2@93fc44af3ebf60a35fbc70e13e6113b1122ba495',
  'google/cloud-translate' => 'v1.12.3@2e770c18a865bd4aeab76a8c22d54fee555376d0',
  'google/common-protos' => '1.4.0@b1ee63636d94fe88f6cff600a0f23fae06b6fa2e',
  'google/gax' => 'v1.10.0@5222f7712e73d266490c742dc9bc602602ae00a5',
  'google/grpc-gcp' => 'v0.2.0@2465c2273e11ada1e95155aa1e209f3b8f03c314',
  'google/protobuf' => 'v3.19.3@c6d35bfdf41f8cb9dcf71ebc3631f8b9d80aa040',
  'graham-campbell/bounded-cache' => 'v1.1.3@cbb12c2d7b2f93f4d8c2a1e46e16fb1e5842c92b',
  'graham-campbell/gitlab' => 'v4.4.0@ed8e1f5fc451d4d279b068989a100a5cdb45e781',
  'graham-campbell/manager' => 'v4.6.1@c5c89d02fd6125b121c58245caf4b918a413d4be',
  'graham-campbell/markdown' => 'v13.1.2@275f96e5b1a2f86f3239eb2c2c5262790725f4ba',
  'graham-campbell/result-type' => 'v1.0.4@0690bde05318336c7221785f2a932467f98b64ca',
  'grpc/grpc' => '1.42.0@9fa44f104cb92e924d4da547323a97f3d8aca6d4',
  'guzzlehttp/guzzle' => '7.4.1@ee0a041b1760e6a53d2a39c8c34115adc2af2c79',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.1.0@089edd38f5b8abba6cb01567c2a8aaa47cec4c72',
  'http-interop/http-factory-guzzle' => '1.2.0@8f06e92b95405216b237521cc64c804dd44c4a81',
  'intervention/image' => '2.7.1@744ebba495319501b873a4e48787759c72e3fb8c',
  'jean85/pretty-package-versions' => '2.0.5@ae547e455a3d8babd07b96966b17d7fd21d9c6af',
  'laminas/laminas-diactoros' => '2.8.0@0c26ef1d95b6d7e6e3943a243ba3dc0797227199',
  'laravel-lang/lang' => '6.1.4@18a7845e813e737a56a7f164301d5014b536950c',
  'laravel-notification-channels/onesignal' => 'v2.3.0@882d842962c92e33692a43995ddd7c679dc684d2',
  'laravel-notification-channels/telegram' => '1.0.0@bc578efbd9cc08ec24830b64b8011992dfabb073',
  'laravel-notification-channels/twilio' => '3.1.2@509c76853124418ca21f3257c0c832cc5018cfd2',
  'laravel/fortify' => 'v1.9.0@bd232b90ccc7933358055438616d6f4752449cb7',
  'laravel/framework' => 'v8.79.0@8091f07558ff4a890435ff9d25fa9aca0189ad63',
  'laravel/helpers' => 'v1.5.0@c28b0ccd799d58564c41a62395ac9511a1e72931',
  'laravel/nexmo-notification-channel' => 'v2.5.1@178c9f0eb3a18d4b5682471bffca104a15d817a7',
  'laravel/serializable-closure' => 'v1.0.5@25de3be1bca1b17d52ff0dc02b646c667ac7266c',
  'laravel/slack-notification-channel' => 'v2.4.0@060617a31562c88656c95c5971a36989122d4b53',
  'laravel/socialite' => 'v5.3.0@4e6f7e40de9a54ad641de5b8e29cdf1e73842e10',
  'laravel/tinker' => 'v2.7.0@5f2f9815b7631b9f586a3de7933c25f9327d4073',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'lcobucci/jwt' => '3.3.3@c1123697f6a2ec29162b82f170dd4a491f524773',
  'league/commonmark' => '1.6.6@c4228d11e30d7493c6836d20872f9582d8ba6dcf',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/flysystem-aws-s3-v3' => '1.0.29@4e25cc0582a36a786c31115e419c6e40498f6972',
  'league/mime-type-detection' => '1.9.0@aa70e813a6ad3d1558fc927863d47309b4c23e69',
  'league/oauth1-client' => 'v1.10.0@88dd16b0cff68eb9167bfc849707d2c40ad91ddc',
  'league/oauth2-client' => '2.6.1@2334c249907190c132364f5dae0287ab8666aa19',
  'm4tthumphrey/php-gitlab-api' => '10.4.0@27336fb60abeeda5f4a391b60f2d31c322021802',
  'maatwebsite/excel' => '3.1.35@6f171c8b79e1c0fb254f3ec40f7a11ac79289eaa',
  'macellan/laravel-zip' => '1.0.5@0c40d22de710acb5e4da8620663fb336741cdc5d',
  'macsidigital/laravel-api-client' => '3.3.4@1390fc8475aecaf3c1f05d835d60c5bbeaaca6c7',
  'macsidigital/laravel-oauth2-client' => '1.2.0@bcaba6b76d4e91c6dd79ebab857b4cc960bd1b09',
  'macsidigital/laravel-zoom' => '4.1.9@b91f5bd4130cb66c772e04052dc91263b19accb3',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'mollie/laravel-mollie' => 'v2.16.0@61d7298ef57b5221142f5be61a5d4d3841a21c97',
  'mollie/mollie-api-php' => 'v2.39.0@a47d4449973c83e918db39f860b5e9076aeb367d',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nesbot/carbon' => '2.55.2@8c2a18ce3e67c34efc1b29f64fe61304368259a2',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'nwidart/laravel-modules' => '8.2.0@6ade5ec19e81a0e4807834886a2c47509d069cb7',
  'nyholm/psr7' => '1.4.1@2212385b47153ea71b1c1b1374f8cb5e4f7892ec',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paragonie/constant_time_encoding' => 'v2.4.0@f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.17.0@c59cac21abbcc0df06a3dd18076450ea4797b321',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'pcinaglia/laraupdater' => '1.0.2@d19d88f0b1c1cbe7a2fdb5505d3d5f434939e8dd',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.3.4@f627771eb854aa7f45f80add0f23c6c4d67ea0f2',
  'php-http/cache-plugin' => '1.7.4@2c00b4c6d41c0c9cad4d901adaf1a7db55f98744',
  'php-http/client-common' => '2.5.0@d135751167d57e27c74de674d6a30cef2dc8e054',
  'php-http/discovery' => '1.14.1@de90ab2b41d7d61609f504e031339776bc8c7223',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/message' => '1.12.0@39eb7548be982a81085fe5a6e2a44268cd586291',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/multipart-stream-builder' => '1.2.0@11c1d31f72e01c738bbce9e27649a7cca829c30e',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpoffice/phpspreadsheet' => '1.21.0@1a359d2ccbb89c05f5dffb32711a95f4afc67964',
  'phpoption/phpoption' => '1.8.1@eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15',
  'phpseclib/phpseclib' => '3.0.12@89bfb45bd8b1abc3b37e910d57f5dbd3174f40fb',
  'pragmarx/google2fa' => '8.0.0@26c4c5cf30a2844ba121760fd7301f8ad240100b',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.1@570292577277f06f590635381a7f761a6cf4f026',
  'pusher/pusher-php-server' => 'v4.1.5@251f22602320c1b1aff84798fe74f3f7ee0504a9',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'razorpay/razorpay' => '2.8.1@4ad7b6a5bd9896305858ec0a861f66020e39f628',
  'rize/uri-template' => '0.3.4@2a874863c48d643b9e2e254ab288ec203060a0b8',
  'rmccue/requests' => 'v1.8.0@afbe4790e4def03581c4a0963a1e8aa01f6030f1',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'sentry/sdk' => '3.1.1@2de7de3233293f80d1e244bd950adb2121a3731c',
  'sentry/sentry' => '3.3.5@c186c44c32899ad0cf5b4e942d71035f01b87b64',
  'sentry/sentry-laravel' => '2.10.2@82cf98c830d73f80dc67cf21381da4ede4c3989e',
  'square/square' => '16.0.0.20211117@d532628a0741b47695ac3714f442c09571d95f11',
  'stichoza/google-translate-php' => 'v4.1.5@85039e0af473e58cc9f42d58e36d9d534a6a6431',
  'stripe/stripe-php' => 'v7.109.0@01d53390c0628cb2c702131f1854d76d2022fd25',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/cache' => 'v5.4.2@8aad4b69a10c5c51ab54672e78995860f5e447ec',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/console' => 'v5.4.2@a2c6b7ced2eb7799a35375fb9022519282b5405e',
  'symfony/css-selector' => 'v5.4.2@cfcbee910e159df402603502fe387e8b677c22fd',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/error-handler' => 'v5.4.2@e0c0dd0f9d4120a20158fc9aec2367d07d38bc56',
  'symfony/event-dispatcher' => 'v5.4.0@27d39ae126352b9fa3be5e196ccf4617897be3eb',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/finder' => 'v5.4.2@e77046c252be48c48a40816187ed527703c8f76c',
  'symfony/http-client' => 'v5.4.2@5e344f1402584a56631c81a24ec9403e3159c790',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.4.2@ce952af52877eaf3eab5d0c08cc0ea865ed37313',
  'symfony/http-kernel' => 'v5.4.2@35b7e9868953e0d1df84320bb063543369e43ef5',
  'symfony/mime' => 'v5.4.2@1bfd938cf9562822c05c4d00e8f92134d3c8e42d',
  'symfony/options-resolver' => 'v5.4.0@b0fb78576487af19c500aaddb269fd36701d4847',
  'symfony/polyfill-ctype' => 'v1.24.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-iconv' => 'v1.24.0@f1aed619e28cb077fc83fac8c4c0383578356e40',
  'symfony/polyfill-intl-grapheme' => 'v1.24.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php72' => 'v1.24.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.24.0@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/polyfill-uuid' => 'v1.24.0@7529922412d23ac44413d0f308861d50cf68d3ee',
  'symfony/process' => 'v5.4.2@2b3ba8722c4aaf3e88011be5e7f48710088fb5e4',
  'symfony/psr-http-message-bridge' => 'v2.1.2@22b37c8a3f6b5d94e9cdbd88e1270d96e2f97b34',
  'symfony/routing' => 'v5.4.0@9eeae93c32ca86746e5d38f3679e9569981038b1',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/string' => 'v5.4.2@e6a5d5ecf6589c5247d18e0e74e30b11dfd51a3d',
  'symfony/translation' => 'v5.4.2@ff8bb2107b6a549dc3c5dd9c498dcc82c9c098ca',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/var-dumper' => 'v5.4.2@1b56c32c3679002b3a42384a580e16e2600f41c1',
  'symfony/var-exporter' => 'v5.4.2@2360c8525815b8535caac27cbc1994e2fa8644ba',
  'tanmuhittin/laravel-google-translate' => '2.0.4@2f2d97b7cf0a1296b92a1aeb8cb965bac683c118',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'trebol/entrust' => '2.0@aafa98dbf6aa32f1db45cb478416a4332806ce95',
  'twilio/sdk' => '6.33.0@cbe146990fe4fc2bbccf5fa45b61f8218aa99bc1',
  'tymon/jwt-auth' => 'dev-develop@ab00f2d7cce5f043067aef7849cdc792de2df635',
  'unicodeveloper/laravel-paystack' => '1.0.7@bfcb92255c29d92b0c4e80355a65de14e2e156f3',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => 'v2.6.0@0c293b4649ba7e6ab212b74db9933b81acc399eb',
  'vonage/nexmo-bridge' => '0.1.0@62653b1165f4401580ca8d2b859f59c968de3711',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'yajra/laravel-datatables-buttons' => 'v4.13.3@5c8fb97c26c14408c8933f68d86c6e4823d05740',
  'yajra/laravel-datatables-html' => 'v4.41.0@9e5d9edf397a7311751d09377a93b47aafe7e77b',
  'yajra/laravel-datatables-oracle' => 'v9.18.2@f4eebc1dc2b067058dfb91e7c067de862353c40f',
  'yandex/translate-api' => '1.5.2@c99e69cde3e688fc0f99c4d8a21585226a8e1938',
  'amphp/amp' => 'v2.6.1@c5fc66a78ee38d7ac9195a37bacaf940eb3f65ae',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'amphp/parallel' => 'v1.4.1@fbc128383c1ffb3823866f71b88d8c4722a25ce9',
  'amphp/parallel-functions' => 'v1.0.0@af9795d51abfafc3676cbe7e17965479491abaad',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.1.3@f09e3ed3b0a953ccbfff1140f12be4a884f0aa83',
  'amphp/serialization' => 'v1.0.0@693e77b2fb0b266c3c7d622317f881de44ae94a1',
  'amphp/sync' => 'v1.4.2@85ab06764f4f36d63b1356b466df6111cf4b89cf',
  'barryvdh/laravel-debugbar' => 'v3.6.5@ccf109f8755dcc7e58779d1aeb1051b04e0b4bef',
  'barryvdh/laravel-ide-helper' => 'v2.11.0@f2a7f9d84f628cb50e1b0dc302f10d2ba945b0ea',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'composer/composer' => '2.2.4@8a5ad75194f901e3b39ece4bbd22cbdabc79ae8f',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/pcre' => '1.0.0@3d322d715c43a1ac36c7fe215fa59336265500f2',
  'composer/semver' => '3.2.7@deac27056b57e46faf136fae7b449eeaa71661ee',
  'composer/spdx-licenses' => '1.5.6@a30d487169d799745ca7280bc90fdfa693536901',
  'composer/xdebug-handler' => '2.0.4@0c1a3925ec58a4ec98e992b9c7d171e9e184be0a',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.17.4@95c80bd35ee6858e9e1439b2f6a698295eeb2070',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.17.0@b85e9d44eae8c52cca7aa0939483611f7232b669',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'gitonomy/gitlib' => 'v1.3.2@e73e439590b194b0b250b516b22a68c7116e2f21',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'maximebf/debugbar' => 'v1.17.3@e8ac3499af0ea5b440908e06cc0abe5898008b3c',
  'mockery/mockery' => '1.4.4@e01123a0e847d52d186c5eb4b9bf58b0c6d00346',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.11.0@8b610eef8582ccdc05d8f2ab23305e2d37049461',
  'nunomaduro/larastan' => 'v0.7.15@fffd371277aeca7951a841818d21f1015a0a2662',
  'ondram/ci-detector' => '4.1.0@8a4b664e916df82ff26a44709942dfd593fa6f30',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpro/grumphp' => 'v1.5.0@52ce0229dced77a207bc39a512053b5ee6ad4465',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpstan/phpstan' => '0.12.99@b4d40f1d759942f523be267a1bab6884f46ca3f7',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.11@2406855036db1102126125537adb1406f7242fdd',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.2.0@9f3452c93ff423469c0d56450431562ca423dcee',
  'symfony/config' => 'v5.4.2@2e082dae50da563c639119b7b52347a2a3db4ba5',
  'symfony/debug' => 'v4.4.36@346e1507eeb3f566dcc7a116fefaa407ee84691b',
  'symfony/dependency-injection' => 'v5.4.2@ba94559be9738d77cd29e24b5d81cf3b89b7d628',
  'symfony/dotenv' => 'v5.4.2@1f28b9b3edf9da7e2c4b295dcd1df291ccb498d3',
  'symfony/filesystem' => 'v5.4.0@731f917dc31edcffec2c6a777f3698c33bea8f01',
  'symfony/yaml' => 'v5.4.2@b9eb163846a61bb32dfc147f7859e274fab38b58',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-master@75ca992725de67327d6383be966327ee144f1d0c',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
