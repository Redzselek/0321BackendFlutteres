<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\DailyMenu;

class ApiController extends Controller
{
    public function Listaz(){
        return DailyMenu::all();
    }

    public function Keres(Request $request, $query){
        return DailyMenu::where('name', 'like', "%{$query}%")->orWhere('category', 'like', "%{$query}%")->get();
    }

    public function Create(Request $request){
        $menu = new DailyMenu();
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        if ($request->has('category')) {
            $menu->category = $request->category;
        }
        $menu->save();
        return response()->json($menu, 201);
    }
}
