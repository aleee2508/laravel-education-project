<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CollaboratorRequest as StoreRequest;
use App\Http\Requests\CollaboratorRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CollaboratorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CollaboratorCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Collaborator');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/collaborator');
        $this->crud->setEntityNameStrings('collaborator', 'collaborators');

        $this->crud->addField([ // image
            'label' => "Colaborators Image",
            'name' => "image",
            'type' => 'image',
            'upload' => true,
            'crop' => false, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'disk' => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
            'label' => "Administrator",
            'type' => 'select2_multiple',
            'name' => 'users', // the method that defines the relationship in your Model
            'entity' => 'users', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\User", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);

        $this->crud->addField([   // Checkbox
            'name' => 'is_active',
            'label' => 'Activo',
            'type' => 'checkbox'
        ]);

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        $this->crud->addColumn([
            'type' => 'check',
            'name' => 'is_active',
            'label' => 'is active?',
        ]);

        $this->crud->addColumn([
           'name' => "created_at", // The db column name
           'label' => "Created at", // Table column heading
           'type' => "datetime",
            // 'format' => 'l j F Y H:i:s', // use something else than the base.default_datetime_format config value
        ]);

        $this->crud->addColumn([
           'name' => "updated_at", // The db column name
           'label' => "Updated at", // Table column heading
           'type' => "datetime",
            // 'format' => 'l j F Y H:i:s', // use something else than the base.default_datetime_format config value
        ]);

        // add asterisk for fields that are required in CollaboratorRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
