<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Inertia\Inertia;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'stores' => Store::all(),
        ]);
    }
}
