<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $attributes['pet_id'] = 14;
        $attributes['url'] = request()->file('file')->store('images');

        Image::create($attributes);
    }
}
