<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MessageRequest as StoreRequest;
use App\Http\Requests\MessageRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class MessageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MessageCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Message');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/message');
        $this->crud->setEntityNameStrings('message', 'messages');

        $this->crud->denyAccess('create') ;

        $this->crud->addField([   // Checkbox
            'name' => 'is_active',
            'label' => 'Leído',
            'type' => 'checkbox'
        ]);

        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
            'label' => "Leído por",
            'type' => 'select2_multiple',
            'name' => 'users', // the method that defines the relationship in your Model
            'entity' => 'users', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\User", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
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
            'label' => 'Leido?',
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

        // add asterisk for fields that are required in MessageRequest
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
