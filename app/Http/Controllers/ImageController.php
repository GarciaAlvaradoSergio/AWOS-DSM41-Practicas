<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $request->validate([
            'nombre' => 'required', 'descripcion' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $item = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenitem = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenitem);
             $item['imagen'] = "$imagenitem";             
         }
         
         Image::create($item);
         return redirect()->route('images.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        $request->validate([
            'nombre' => 'required', 'descripcion' => 'required'
        ]);
         $edit = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenItem = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenItem);
            $edit['imagen'] = "$imagenItem";
         }else{
            unset($edit['imagen']);
         }
         $image->update($edit);
         return redirect()->route('images.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect('images')->with('danger','Se borro correctamente el usuario');
    }
}
