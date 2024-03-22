<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Inertia\Inertia;

class StoreController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Stores/Index', [
            'stores' => Store::paginate(10),
        ]);
    }
}
