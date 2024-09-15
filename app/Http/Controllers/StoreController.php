<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();
        return view("stores.index", compact("stores"));
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $store = Store::findOrFail($id);
        return view("stores.show", compact("store"));
    }
}
