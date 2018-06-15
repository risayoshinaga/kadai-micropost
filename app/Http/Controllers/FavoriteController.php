<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::mocropost()->favorite($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::micropost()->favorite($id);
        return redirect()->back();
    }
}
