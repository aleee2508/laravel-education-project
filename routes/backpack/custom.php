<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('configuration', 'ConfigurationCrudController');
    CRUD::resource('slider', 'SliderCrudController');
    CRUD::resource('collaborator', 'CollaboratorCrudController');
    CRUD::resource('notice', 'NoticeCrudController');
    CRUD::resource('message', 'MessageCrudController');
    CRUD::resource('formation', 'FormationCrudController');
    CRUD::resource('gallery', 'GalleryCrudController');
    CRUD::resource('user', 'UserCrudController');
}); // this should be the absolute last line of this file