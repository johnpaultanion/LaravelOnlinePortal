<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;

class CategoryController extends Controller
{
    public function index(){

        
        $categories = Category::orderBy('created_at','desc')->paginate(10);
        return view('containers.core.categories.index')->with('categories', $categories);

    }


    public function create()
    {
        return view('containers.core.categories.createcategory');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            
        ]);

        // Create Category
         $category = new Category;
         $category->name = $request->input('name');
         $category->description = $request->input('description');
       
         $category->save();
 
         return redirect('core/categories')->with('success', 'Category Created');

    }


    public function edit($id)
    {
        $category = Category::find($id);
        
        //Check if post exists before deleting
        if (!isset($category)){
            return redirect('core/categories')->with('error', 'No Category Found');
        }

        return view('containers.core.categories.editcategory')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            
        ]);


        $category = Category::find($id);
        
        // Update category
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect('/core/categories')->with('success', 'Category Updated');

    }

    public function destroy($id)
    {

        $category = Category::find($id);
        
        //Check if category exists before deleting
        if (!isset($category)){
            return redirect('core/categories')->with('error', 'No Category Found');
        }
   
        $category->delete();
        return redirect('core/categories')->with('success', 'Category Removed');

    }


}