<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('welcome', compact('images'));
    }
    public function edit($id)
    {
        $image = Image::find($id);

        return view('edit', compact('image'));
    }
    public function store(Request $request)
    {
        $img = new Image;
        $img->src = $request->file('image')->hashName();
        $img->save();
        $request->file('image')->storePublicly('images', 'public');
    }
    public function update(Request $request, $id)
    {
        // 1 . Retrouver l'image dans la DB
        $image = Image::find($id);
        // 2 . Supprimer l'image de base
        Storage::disk('public')->delete('images/' . $image->src);
        // 3 . Modifier le chemin de l'image dans la colonne src par celui de la nouvelle image
        $image->src = $request->file('image')->hashName();
        $image->save();
        // 4 . Rajouter l'image dans le dossier
        $request->file('image')->storePublicly('images', 'public');
        return redirect()->back();
    }
    public function download($id)
    {
       $image = Image::find($id);
       return Storage::disk('public')->download('images/'.$image->src);
    }
}
