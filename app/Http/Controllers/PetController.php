<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Pet;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\HttpFoundation\InputBag;

class PetController extends Controller
{
    public function index()
    {
        return view('pets.index', [
            'pets' => Pet::orderBy('name')
                ->filter(request(['search', 'status', 'sex', 'category']))
                ->paginate(10)
                ->withQueryString()
        ]);
    }

    public function show(Pet $pet)
    {
        return view('pets.show', [
            'pet' => $pet,
            'images' => $pet->images
        ]);
    }

    public function store()
    {
        // Store a new pet
    }

    public function create()
    {
        return view('pets.temp');
    }
}
