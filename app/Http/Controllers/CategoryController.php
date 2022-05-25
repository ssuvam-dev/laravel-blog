<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        return view('category.add_categroy');
    }

    public function addCategory(Request $request){
        $request->validate(
            [
            'categoryname' => 'required',
            ]
            );
        $category=new Category;
        $category->title=$request['categoryname'];
        $category->url=($request['categoryname']);
        $category->save();
        echo "Saved succesfuly";
    }

    public function slug($title){
        $categories=Category::all();
        if(inarray($categories,$title)){
            echo "Title is in the database";
            return $title;
        } 
        else{
            echo "Title is not in the database";
            return $title;
        }
               
    }

    public function showCategory(){
        $categories = Category::all();
        $data=compact('categories');
        return view('category.showcategory')->with($data);
    }
}
