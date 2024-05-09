<?php

namespace App\Http\Controllers;

use App\Models\Listing;

abstract class Controller
{
    public function index()
    {
        $listings = Listing::where('is_active', true)
            ->with('tags')
            ->latest()
            ->get();

        return view('listings.index', compact('listings'));
    }
}
