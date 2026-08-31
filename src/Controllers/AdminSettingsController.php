<?php

declare(strict_types=1);

namespace DeVy\Modules\Settings\Controllers;

use DeVy\Core\Container;

use DeVy\Core\Http\{
    Controller,
    Request,
    Response
};

use DeVy\Core\Schema\SchemaForm;

use DeVy\Core\Services\{
    SettingsService,
    ToastService
};

use DeVy\Core\Support\CurrencyRegistry;
use DeVy\Core\Support\TimezoneRegistry;

class AdminSettingsController extends Controller
{
    protected SchemaForm $form;

    protected SettingsService $settings;

    protected ToastService $toast;

    public function __construct(
        Container $container
    ) {
        parent::__construct($container);

        $this->form = $this->service(
            SchemaForm::class
        );

        $this->settings = $this->service(
            SettingsService::class
        );

        $this->toast = $this->service(
            ToastService::class
        );
    }

    /**
     * ----------------------------------------
     * Settings Page
     * ----------------------------------------
     */
    public function index(
        array $params,
        Request $request
    ): Response {

        $schema = $this->form->build(
            $this->settings,
            'settings.schema'
        );


        return $this->view(
            '@Settings/index.twig',
            [

                'page' => [
                    'title' => 'Site Settings'
                ],

                'schema' => $schema,

                'routes' => [

                    'save' => $this->router->route(
                        'admin.settings.save'
                    )

                ]

            ]
        );
    }

    /**
     * ----------------------------------------
     * Save Settings
     * ----------------------------------------
     */
    public function save(
        array $params,
        Request $request
    ): Response {

        $this->form->save(

            $this->settings,

            'settings.schema',

            $request->input(
                'settings',
                []
            )

        );

        $this->toast->add(
            'Settings updated successfully!',
            'success'
        );

        return $this->redirectRoute(
            'admin.settings'
        );
    }
}