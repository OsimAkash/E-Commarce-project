<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    protected $category;


    public function __construct() {
        $this->category = new Category();
    }

    public function create () {
        //
    }


    public function index() {
        $response['categories'] = $this->category->all();
        return view('page.category.index')->with('categories', $categories);
    }

    public function store(Request $request) {
        $this->category->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id) {
        $response['category'] = $this->category->find($id);
        return view('page.category.edit')->with($response); 
    }

}
