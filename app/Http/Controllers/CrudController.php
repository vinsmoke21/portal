<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function index()
    {
    $crud = Crud::all();
      return view ('crud.index')->with('crud', $crud);
    }


    public function create()
    {
        return view('crud.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Crud::create($input);
        return redirect('crud')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $crud = Crud::find($id);

        return view('crud.show')->with('crud', $crud);
    }


    public function edit($id)
    {
        $crud = Crud::find($id);
        return view('crud.edit')->with('crud', $crud);
    }


    public function update(Request $request, $id)
    {
        $contact = Crud::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('crud')->with('flash_message', 'Contact Updated!');
    }


    public function destroy($id)
    {
        Crud::destroy($id);
        return redirect('crud')->with('flash_message', 'Contact deleted!');
    }
}
