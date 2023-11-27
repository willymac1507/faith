<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Pet;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request, Pet $pet)
    {
        $imageFile = request()->file('file');
        $size = $imageFile->getSize();
        $path = $imageFile->store('public/images');
        $attributes['pet_id'] = $pet->id;
        $attributes['url'] = $path;
        $attributes['size'] = $size;
        $attributes['cover'] = false;

        Image::create($attributes);
    }

    public function makeCover(Pet $pet, Image $image)
    {
        foreach ($pet->images as $img) {
            $img->cover = false;
            $img->save();
        }

        $image->cover = true;
        $image->save();

        return back();
    }
}

