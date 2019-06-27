<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GalleryRequest as StoreRequest;
use App\Http\Requests\GalleryRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class GalleryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class GalleryCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Gallery');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/gallery');
        $this->crud->setEntityNameStrings('gallery', 'galleries');

        $this->crud->addField([ // image
            'label' => "Imagen de noticia",
            'name' => "image",
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // 'disk' => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        $this->crud->addField([  // Select2
           'label' => "Formación a la que pertenece",
           'type' => 'select2',
           'name' => 'formation_id', // the db column for the foreign key
           'entity' => 'formation', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Formation", // foreign key model

        ]);

        $this->crud->addField([   // Checkbox
            'name' => 'is_active',
            'label' => 'Is active?',
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
            'label' => 'Is active?',
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

        // add asterisk for fields that are required in GalleryRequest
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
