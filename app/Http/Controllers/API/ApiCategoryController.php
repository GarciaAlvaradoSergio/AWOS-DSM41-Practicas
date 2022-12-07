<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view ('categories.index', compact('categories'));
    }

    public function create()
    {
        $category = Category::get ();
        return view ('categories.add', compact('category'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->all());
        return redirect()->route('categories.show', $category->id)->with('success', 'Categoria creada correctamente');

    }

    public function show(Category $category)
    {
        return view ('categories.show', compact ('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request ->all();
        $category->update($data);
        return redirect()->route('categories.index')->with('messege','Evento editado correctamente');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('categories')->with('danger','Se borro correctamente la categoria');
    }
}
