<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
   if($request->isMethod('post')){
           $data = $request->all();

        //     if (empty($data['status'])) {
        //        $status=0;

        //    }else{
        //      $status=1;
        //    }

           $category = new Category;
           $category->name = $data['name'];
           $category->slug = $data['slug'];
           //$category->status = $status;

           $category->save();
           return redirect('/admin/view-categories')->with('flash_message_success','category created successfully!');
       }
       return view('admin.categories.add_category');

   }



   public function viewCategories(){
       $categories = Category::get();
       $categories = json_decode(json_encode($categories));
       return view('admin.categories.view_categories')->with(compact('categories'));
   }

   public function editCategory(Request $request, $id = null){
    if($request->isMethod('post')){
        $data = $request->all();
        // //echo "<pre>"; print_r($data); die;
        //   if (empty($data['status'])) {
        //     $status=0;

        // }else{
        //   $status=1;
        // }
        Category::where(['id'=>$id])->update(['name'=>$data['name'],'slug'=>$data['slug']]);
        return redirect('/admin/view-categories')->with('flash_message_success','Category updated Successfully!');
    }
    $category = Category::where(['id'=>$id])->first();
    return view('admin.categories.edit_category')->with(compact('category'));
    }

   public function deleteCategory(Request $request, $id = null){
       if(!empty($id)){
           Category::where(['id'=>$id])->delete();
           return redirect()->back()->with('flash_message_success','category deleted successfully!');
       }
   }

}
