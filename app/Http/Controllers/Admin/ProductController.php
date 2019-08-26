<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\NewsCRUD\app\Http\Requests\ProductRequest as StoreRequest;
use Backpack\NewsCRUD\app\Http\Requests\ProductRequest as UpdateRequest;
use App\Models\CategoryProductModel;
use Illuminate\Support\Facades\Input;
use View;

class ProductController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\ProductModel");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/product');
        $this->crud->setEntityNameStrings('Sản phẩm', 'product');
        $this->crud->orderBy('id', 'desc');
        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */
        $this->crud->addFilter([ // select2_multiple filter
            'name' => 'type_article',
            'type' => 'select2_multiple',
            'label'=> 'Danh mục',
            'placeholder' => 'Tìm Danh mục tin tức'
        ], function () {
            return CategoryProductModel::orderBy('name')->pluck('name', 'id')->toArray();
        }, function ($values) {
            $values = json_decode(htmlspecialchars_decode($values, ENT_QUOTES));
            if (!empty($values)) {
                $this->crud->addClause('whereIn', 'category_id', $values);
            }
        });
//        $this->crud->denyAccess(['create']);
//        $this->crud->enableBulkActions();
//        $this->crud->addBulkDeleteButton();
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Tên Sản Phẩm',
        ]);
        $this->crud->addColumn([
            'name'  => 'image',
            'label' => 'hình ảnh',
            'type' => 'closure',
            'function' => function($entry) {
                return '<a target="_blank" href="'.$entry->slug . '-p-'.$entry->id.'" ><img style="
                                  max-height: 25px;
                                  width: auto;
                                  border-radius: 3px;" src="/'.$entry->image.'"/></a>';
            }
        ]);

        $this->crud->addColumn([
            'name' => 'price',
            'label' => 'Giá',
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'price_promotion',
            'label' => 'Giá KM',
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Tình trạng',
        ]);
        $this->crud->addColumn([
            'name' => 'featured',
            'label' => 'Nỗi bật',
            'type' => 'check',
        ]);
        $this->crud->addColumn([
            'name' => 'promotion',
            'label' => 'Khuyễn mãi',
            'type' => 'check',
        ]);
        $this->crud->addColumn([
            'label' => 'Danh mục',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\CategoryProductModel",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // TEXT
            'name' => 'title',
            'label' => 'Tên Sản Phẩm',
            'type' => 'text',
            'placeholder' => 'Nhập tên sản phẩm',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'text',
            'hint' => 'Will be automatically generated from your title, if left empty.',
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'featured',
            'label' => 'Nỗi bật',
            'type' => 'checkbox',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-2',
            ],
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'promotion',
            'label' => 'Khuyến mãi',
            'type' => 'checkbox',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-8',
            ],
        ]);
        $this->crud->addField([    // TEXT
            'name' => 'price',
            'label' => 'Giá sản phẩm (vnđ)',
            'type' => 'number',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([
            'name' => 'price_promotion',
            'label' => 'Giá Khuyến mãi (vnđ)',
            'type' => 'number',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'supplier',
            'label' => 'Nhà cung cấp',
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'status',
            'label' => 'Tình Trạng',
            'type' => 'enum',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([    // SELECT
            'label' => 'Danh Mục',
            'type' => 'select2',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\CategoryProductModel",
        ]);
//        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
//            'label' => 'Tags',
//            'type' => 'select2_multiple',
//            'name' => 'tags', // the method that defines the relationship in your Model
//            'entity' => 'tags', // the method that defines the relationship in your Model
//            'attribute' => 'name', // foreign key attribute that is shown to user
//            'model' => "Backpack\NewsCRUD\app\Models\Tag", // foreign key model
//            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
//        ]);

//        $this->crud->addField([    // TEXT
//            'name' => 'date',
//            'label' => 'Date',
//            'type' => 'date',
//            'value' => date('Y-m-d'),
//        ], 'create');
//        $this->crud->addField([    // TEXT
//            'name' => 'short_content',
//            'label' => 'Nội dung ngắn',
//            'type' => 'textarea',
//            'placeholder' => 'Your title here',
//        ]);
        $this->crud->addField([
            'name' => 'short_content',
            'label' => 'Nội dung ngắn',
            'type' => 'textarea',
            'placeholder' => 'Nội dung ngắn thể hiện',
        ]);
        $this->crud->addField([    // WYSIWYG
            'name' => 'content',
            'label' => 'Content',
            'type' => 'ckeditor',
            'placeholder' => 'Your textarea text here',
        ]);




        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Ảnh đại diện (Vui lòng upload ảnh với kích thước trên 540 x 540 pixels)',
            'type' => 'browse',
//            'wrapperAttributes' => [
//                'class' => 'form-group col-md-6',
//            ],
        ]);
        $this->crud->addField([    // Image
            'name' => 'gallery_image',
            'label' => 'Ảnh trình chiếu (Vui lòng upload ảnh với kích thước trên 540 x 540 pixels)',
            'type' => 'browse_multiple',
        ]);
        $this->crud->enableAjaxTable();
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
        $prods = \App\Models\ProductModel::where('featured', 1)->limit(10)->get();
        $content = view::make('home.home_product_featured', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_featured.blade.php', $content);

        $prods = \App\Models\ProductModel::where('promotion', 1)->limit(10)->get();
        $content = view::make('home.home_product_promotion', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_promotion.blade.php', $content);

        return $this->performSaveAction($item->getKey());
    }
    public function edit($id, $template = false)
    {
        $this->crud->hasAccessOrFail('update');
        $this->crud->setOperation('update');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;

        // get the info for that entry
        $this->data['entry'] = $this->crud->getEntry($id);
        $this->data['crud'] = $this->crud;
        $this->data['saveAction'] = $this->getSaveAction();
        $this->data['fields'] = $this->crud->getUpdateFields($id);
        $this->data['title'] = $this->crud->getTitle() ?? trans('backpack::crud.edit').' '.$this->crud->entity_name;

        $this->data['fields']['gallery_image']['value'] = json_decode($this->data['fields']['gallery_image']['value']);

        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
        return view($this->crud->getEditView(), $this->data);
    }
    public function update(UpdateRequest $request)
    {
        $this->crud->hasAccessOrFail('delete');

        $this->crud->hasAccessOrFail('update');
        $this->crud->setOperation('update');

        // fallback to global request instance
        if (is_null($request)) {
            $request = \Request::instance();
        }
        $request->merge(['gallery_image' => json_encode($request->gallery_image)]);
        // update the row in the db
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $request->except('save_action', '_token', '_method', 'current_tab', 'http_referrer'));
        $this->data['entry'] = $this->crud->entry = $item;

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();
        $prods = \App\Models\ProductModel::where('featured', 1)->limit(10)->get();
        $content = view::make('home.home_product_featured', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_featured.blade.php', $content);

        $prods = \App\Models\ProductModel::where('promotion', 1)->limit(10)->get();
        $content = view::make('home.home_product_promotion', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_promotion.blade.php', $content);
        return $this->performSaveAction($item->getKey());
    }
    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;
        $prods = \App\Models\ProductModel::where('featured', 1)->limit(10)->get();
        $content = view::make('home.home_product_featured', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_featured.blade.php', $content);

        $prods = \App\Models\ProductModel::where('promotion', 1)->limit(10)->get();
        $content = view::make('home.home_product_promotion', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_promotion.blade.php', $content);
        return $this->crud->delete($id);
    }
}
