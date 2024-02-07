<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Models\Students;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index()
    {
        $teachers = Teachers::get();
        return view('crud.index', compact('teachers'));
    }
    public function create()
    {
        return view('crud.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'age' => 'required|max:255|int',
            'address' => 'required|max:255|string',
            'department' => 'required|max:255|string',
        ]);

        Teachers::create([
            'name' => $request->name,
            'age'=> $request->age,
            'address' => $request->address,
            'department' => $request->department,
        ]);
        return redirect('crud/create')->with('status','success');
    }
    
    public function edit(int $id)
    {
        $crud = Teachers::findOrFail($id);
        return view('crud.edit',compact('crud'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'age' => 'required|max:255|int',
            'address' => 'required|max:255|string',
            'department' => 'required|max:255|string'
        ]);

        Teachers::findOrFail($id) -> update([
            'name' => $request->name,
            'age'=> $request->age,
            'address' => $request->address,
            'department' => $request->department,
        ]);

        return redirect()->back()->with('status','success');
    }
    public function destroy(int $id)
    {
        $crud = Teachers::findOrFail($id);
        $crud ->delete();

        return redirect()->back()->with('status','deleted');
    }
}
