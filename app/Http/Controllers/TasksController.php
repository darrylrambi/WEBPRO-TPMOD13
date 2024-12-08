<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    function index() {
        // show data
        $tasks = tasks::all();

        return view('showTask', compact('tasks'));        
    }

    function store(Request $request) {
        // create data
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('desc', $request->input('desc'));
        $request->session()->put('status', $request->input('status'));

        tasks::create([
            'name' => session('name'),
            'description' => session('desc'),
            'status' => session('status')
        ]);

        return redirect('index')->with('Berhasil','Data berhasil ditambahkan!');
    }

    function edit($id) {
        // show modal form
    }

    function update(Request $request, $id) {
        // edit data
    }

    function destroy($id) {
        // hapus data
    }
}
