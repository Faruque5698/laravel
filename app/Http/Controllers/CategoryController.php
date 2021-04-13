<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
//        return $categories;
        return view('admin.category.category',[
            'categories' => $categories
        ]);
    }
    public function addCategory(){
        return view('admin.category.addCategory');
    }
    public function saveCategory(Request $request){

        $request->validate([
            'cat_name'=>'required'
        ]);

//        Category::create($request->all());
        //Another way
//        $category= new Category();
//        $category->cat_name=$request->cat_name;
//        $category->cat_desc=$request->cat_desc;
//        $category->status=$request->status;
//        $category->save();

//        Query Builder proceess

        DB::table('categories')->insert([
            'cat_name'=> $request->cat_name,
            'cat_desc'=> $request->cat_desc,
            'status'=> $request->status
        ]);

        return back()->with('message','Category saved successfully');
    }

    public function unpublishedCategory($id){
        $category=Category::find($id);
        $category->status=0;
        $category->save();
        return back();

    }
    public function publishedCategory($id){
        $category=Category::find($id);
        $category->status=1;
        $category->save();
        return back();

    }

    public function editCategory($id){
        $category=Category::find($id);

        return view('admin.category.edit-category',[
            'category'=>$category
        ]);

    }

    public function updateCategory(Request $request){
        $category=Category::find($request->id);
        $category->cat_name=$request->cat_name;
        $category->cat_desc=$request->cat_desc;
        $category->status=$request->status;
        $category->save();
        return redirect('/admin-category')->with('message','Category Update Successfully');

    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return back()->with('message','Category Delete Successfully');

    }

}
