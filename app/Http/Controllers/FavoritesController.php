<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Micropost;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {
        $micropost = Micropost::findOrFail($id);
        auth()->user()->favorite($micropost->id);
        return back();
    }

    public function destroy($id)
    {
        $micropost = Micropost::findOrFail($id);
        auth()->user()->unfavorite($micropost->id);
        return back();
    }
}
