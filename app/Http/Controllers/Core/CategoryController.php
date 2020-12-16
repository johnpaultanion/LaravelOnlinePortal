<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use DataTables;
use Validator;

class CategoryController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Category::all();

            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" edit="' . $data->id . '" class="edit btn btn-info btn-sm">Edit</button>';
                    $button .= '<button type="button" name="delete" delete="' . $data->id . '" id="' . $data->id . '" class="delete btn btn-danger btn-sm ml-2">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

    
        return view('containers.core.categories.category');


        
        // $categories = Category::orderBy('created_at','desc')->paginate(10);
        // return view('containers.core.categories.index')->with('categories', $categories);

    }


    public function create()
    {
        return view('containers.core.categories.createcategory');
    }

    public function store(Request $request)
    {
        $errors =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);

        if ($errors->fails()) {
            return response()->json(['errors' => $errors->errors()]);
        }

        Category::create($request->all());

        return response()->json(['success' => 'Data Added successfully.']);
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