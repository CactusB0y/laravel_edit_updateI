<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('welcome',compact('pets'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $store = new Pet;
        $store->espece = $request->espece;
        $store->age = $request->age;
        $store->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $show = Pet::find($id);
        return view('show',compact('show'));
    }

    public function edit($id)
    {
        $edit = Pet::find($id);
        return view('edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Pet::find($id);
        $update->espece = $request->espece;
        $update->age = $request->age;
        $update->save();
        return redirect('/pet-show/'.$update->id);
    }

    public function destroy($id)
    {
        $destroy = Pet::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
