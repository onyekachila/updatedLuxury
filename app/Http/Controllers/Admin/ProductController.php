<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Category;
use App\Model\admin\Product;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use Image;


class ProductController extends Controller
{
    public function index(){

        return view('admin.products.add_product');
    }

    public function saveProduct(Request $request)
    {
         // validate the data
         $this->validate($request, array(
            'product_name' => 'required|max:100',
            'product_description' => 'required|max:100',
            'product_price' => 'required',
            'product_image' => 'required|image',
            'product_size' => 'required|max:50',
            'product_description' => 'required|max:100',
            'category_id'   => 'required|integer',
            'product_color' => 'required'
        ));

        $product = new Product;


        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_image = $request->product_image;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;

        if ($request->hasFile('featured_img')) {
          $image = $request->file('featured_img');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('admin/images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $product->product_image = $filename;
        }

        $product->save();

        Session::flash('success', 'The blog post was successfully save!');

        return redirect()->route('addproduct', $product->id);
    }

    public function allProduct(){
        $all_product = DB::table('products')
                            ->join('categories','products->category_id', '=', 'categories.id')
                            ->get();
        $manage_product = view('admin.products.view_products')->with('all_product', $all_product);
        return view('admin.layouts.app')->with('admin.view_products', $manage_product);
    }



}
