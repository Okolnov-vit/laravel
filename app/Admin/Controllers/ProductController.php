<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Http\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Table;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';
    protected $defaultImagePath = 'uploads/products/default.png';

    /**
     * Make a table builder.
     *
     * @return Table
     */
    protected function table()
    {
        $table = new Table(new Product());

        $table->column('id', __('Id'));
        $table->column('category_id', __('Category id'));
        $table->column('name', __('Name'));
        $table->column('description', __('Description'));
        $table->column('price', __('Price'));
        $table->column('image', __('Image'));
        $table->column('created_at', __('Created at'));
        $table->column('updated_at', __('Updated at'));

        return $table;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     * 
     
     */

    
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->select('category_id', __('Category'))->options(
                \App\Models\Category::all()->pluck('name', 'id'));
        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->decimal('price', __('Price'));
        //$form->image('image', __('Image'))->move('img/products')->uniqueName();
        $form->image('image', __('Image'))->move('uploads/products')->uniqueName();

         //$form->ignore(['image']); // если хотите исключить из массового присвоения

        return $form;
    }
}
