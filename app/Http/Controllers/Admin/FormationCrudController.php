<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FormationRequest as StoreRequest;
use App\Http\Requests\FormationRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class FormationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class FormationCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Formation');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/formation');
        $this->crud->setEntityNameStrings('formation', 'formations');

        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
            'label' => "Administrators",
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
         'name' => 'id', // The db column name
         'label' => "id", // Table column heading
         'type' => 'Text'
         ])->makeFirstColumn();

        // add asterisk for fields that are required in FormationRequest
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
