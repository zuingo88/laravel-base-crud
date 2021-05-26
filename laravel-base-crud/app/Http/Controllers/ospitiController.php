<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;

class ospitiController extends Controller
{
    public function home()
    {
        $i = 1;
        $ospiti = Ospiti::all();
        //dd($ospiti);

        return view('pages.home', compact('i', 'ospiti'));
    }

    public function ospite($id) 
    {
        $ospite = Ospiti::findOrFail($id);

        return view('pages.ospite', compact('ospite'));
    }

    public function createOspite() 
    {
        return view('pages.createOspite');
    }

    public function storeOspite(Request $request) 
    {
        //dd($request->all());
        $validate = $request -> validate([
            'name' => 'nullable|max:255',
            'lastname' => 'nullable|max:255',
            'date_of_birth' => 'nullable',
            'document_type' => 'nullable|max:1024',
            'document_number' => 'nullable|max:1024'
        ]);

        $ospite = Ospiti::create($validate);

        //return redirect() -> route('home');
        return redirect()->route('ospite', $ospite->id);
    }
}
