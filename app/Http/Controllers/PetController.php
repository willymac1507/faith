<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max255',
            'description' => 'required|string',
            'age_years' => 'required|integer',
            'age_months' => 'required|integer',
            'reserved' => 'required|boolean',
            'adopted' => 'required|adopted'
        ]);
        $pet = Pet::create($attributes);

        foreach ($request->file('images') as $imageFile) {
            $image = new Image();
            $path = $imageFile->store('/images/resource', [
                'disk' => 'public_files'
            ]);
            $image->url = $path;
            $image->pet_id = $pet->id;
            $image->save();
        }

    }
}
