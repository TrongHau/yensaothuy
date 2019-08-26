<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\CategoryRequest as UpdateRequest;
use View;

class HomeSliderShow2Controller extends CrudController
{
    public function __construct()
    {
        parent::__construct();
        $this->crud->denyAccess(['create']);
        $this->crud->denyAccess(['delete']);
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

    }
    public function setup()
    {
        $this->crud->setModel("App\Models\HomeSliderShow2Model");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/slider_home_show2');
        $this->crud->setEntityNameStrings('Ảnh trình diễn trang chủ 2', 'Ảnh trình diễn trang chủ 2');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->enableReorder('name', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'Vị trí',
        ]);
        $this->crud->addColumn([
            'name' => 'title_1',
            'label' => 'Tiêu đề nút',
        ]);
        $this->crud->addColumn([
            'name' => 'title_2',
            'label' => 'Diễn giải',
        ]);
        $this->crud->addColumn([
            'name'  => 'image',
            'label' => 'hình ảnh',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a target="_blank" href="#" ><img style="
                                  max-height: 25px;
                                  width: auto;
                                  border-radius: 3px;" src="/'.$entry->image.'"/></a>';
            }
        ]);
        $this->crud->addColumn([
            'label' => 'Sản phẩm liên kết',
            'type' => 'select',
            'name' => 'product_id',
            'entity' => 'product',
            'attribute' => 'title',
            'model' => "App\Models\ProductModel",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'title_1',
            'label' => 'Tiêu đề nút',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'title_2',
            'label' => 'Diễn giải',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'label' => 'Sản phẩm liên kết',
            'type' => 'select',
            'name' => 'product_id',
            'entity' => 'product',
            'attribute' => 'title',
            'model' => "App\Models\ProductModel",
        ]);
        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Ảnh đại diện (Vui lòng upload ảnh với kích thước 400 x 542 pixel)',
            'type' => 'browse',
        ]);

    }

    public function store(Request $request)
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
//        $category = \App\Models\CategoryProductModel::getTree();
//        $content = view::make('catalog.menu_category', compact('category'))->render();
//        file_put_contents(resource_path().'/views/cache/menu.blade.php', $content);
        return $this->performSaveAction($item->getKey());
    }

    public function update(Request $request)
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
        $prods = \App\Models\HomeSliderShow2Model::get();
        $content = view::make('home.home_slider_show_2', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_slider_show_2.blade.php', $content);

        return $this->performSaveAction($item->getKey());
    }
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
//        $category = \App\Models\CategoryProductModel::getTree();
//        $content = view::make('catalog.menu_category', compact('category'))->render();
//        file_put_contents(resource_path().'/views/cache/menu.blade.php', $content);
        return $this->crud->delete($id);
    }
}
