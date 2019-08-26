<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as UpdateRequest;
use View;

class CategoryProductController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\CategoryProductModel");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/category_product');
        $this->crud->setEntityNameStrings('Danh mục sản phẩm', 'category product');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('name', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Tên Danh mục',
        ]);
        $this->crud->addColumn([
            'name' => 'slug',
            'label' => 'Slug',
        ]);
        $this->crud->addColumn([
            'label' => 'Parent',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => "App\Models\CategoryProductModel",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
            'label' => 'Tên Danh mục',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'text',
            'hint' => 'Will be automatically generated from your name, if left empty.',
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([
            'label' => 'Parent',
            'type' => 'select',
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => "App\Models\CategoryProductModel",
        ]);
    }

    public function store(StoreRequest $request)
    {
        $this->crud->hasAccessOrFail('create');
        $this->crud->setOperation('create');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }

        // insert item in the db
        $item = $this->crud->create($request->except(['save_action', '_token', '_method', 'current_tab', 'http_referrer']));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();
        $category = \App\Models\CategoryProductModel::getTree();
        $content = view::make('catalog.menu_category', compact('category'))->render();
        file_put_contents(resource_path().'/views/cache/menu.blade.php', $content);
        return $this->performSaveAction($item->getKey());
    }

    public function update(UpdateRequest $request)
    {
        $this->crud->hasAccessOrFail('update');
        $this->crud->setOperation('update');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }

        // update the row in the db
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $request->except('save_action', '_token', '_method', 'current_tab', 'http_referrer'));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();
        $category = \App\Models\CategoryProductModel::getTree();
        $content = view::make('catalog.menu_category', compact('category'))->render();
        file_put_contents(resource_path().'/views/cache/menu.blade.php', $content);

        return $this->performSaveAction($item->getKey());
    }
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
        $category = \App\Models\CategoryProductModel::getTree();
        $content = view::make('catalog.menu_category', compact('category'))->render();
        file_put_contents(resource_path().'/views/cache/menu.blade.php', $content);
        return $this->crud->delete($id);
    }
}
