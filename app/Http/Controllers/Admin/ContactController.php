<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as UpdateRequest;
use View;

class ContactController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
        $this->crud->denyAccess(['create']);
//        $this->crud->denyAccess(['update']);
    }
    public function setup()
    {
        /*
         |--------------------------------------------------------------------------
         | BASIC CRUD INFORMATION
         |--------------------------------------------------------------------------
         */
        $this->crud->setModel("App\Models\ContactModel");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/contact');
        $this->crud->setEntityNameStrings('Danh Sách Liên Hệ', 'contact');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('name', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Date',
            'type' => 'date',
        ]);
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Tên liên hệ',
        ]);
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Số điện thoại',
        ]);
        $this->crud->addColumn([
            'name' => 'body_content',
            'label' => 'Nội dung gửi',
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => 'Tên liên hệ',
        ]);
        $this->crud->addField([
            'name' => 'phone',
            'label' => 'Số điện thoại',
        ]);
        $this->crud->addField([
            'name' => 'body_content',
            'label' => 'Nội dung gửi',
            'type' => 'textarea',
        ]);

    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
