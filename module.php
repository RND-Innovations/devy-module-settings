<?php

use DeVy\Core\Modules\ModuleContext;
use DeVy\Modules\Settings\Controllers\AdminSettingsController;

return [

/*
|--------------------------------------------------------------------------
| META
|--------------------------------------------------------------------------
*/

    'meta' => [
        'name' => 'Site Settings',
        'description' => 'Centralized management for global settings provided by active modules.',        
        'version' => '1.0.0',
        'author' => 'RND Innovations',
        'website' => 'https://rndvn.com',
        'license' => 'MIT',
        'icon' => 'settings',        
        'namespace' => 'DeVy\\Modules\\Settings',
        'requires' => [
            'framework' => '^1.0',
            'modules' => ['Admin'],
            'php' => '^8.3'
        ]
    ],


/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/

'register' => function (ModuleContext $ctx) {

    $c = $ctx->container();

    /*
    |--------------------------------------------------------------------------
    | CONTROLLERS
    |--------------------------------------------------------------------------
    */

    $ctx->controller(AdminSettingsController::class);
},

/*
|--------------------------------------------------------------------------
| BOOT
|--------------------------------------------------------------------------
*/

'boot' => function (ModuleContext $ctx) {

    /*
    |--------------------------------------------------------------------------
    | ADMIN ROUTES
    |--------------------------------------------------------------------------
    */

    $ctx->adminRoutes(function ($r) {

        $r->add([
            'name' => 'admin.settings',
            'method' => 'GET',
            'uri' => '/settings',
            'action' => [AdminSettingsController::class, 'index'],
        ]);

        $r->add([
            'name' => 'admin.settings.save',
            'method' => 'POST',
            'uri' => '/settings',
            'action' => [AdminSettingsController::class, 'save'],
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Register Schema
    |--------------------------------------------------------------------------
    */

    $ctx->settingsSchema(__DIR__.'/src/Config/settings_schema.php');


    /*
    |--------------------------------------------------------------------------
    | ADMIN NAVIGATION (clean + consistent)
    |--------------------------------------------------------------------------
    */

    $ctx->addAdminNavigation(
        'Settings',
        'admin.settings',
        'settings',
        6,
        'settings.manage'
    );
}
];