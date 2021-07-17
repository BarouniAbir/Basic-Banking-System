<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Customers = Customers::all();
        return view('home', compact('Customers'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*return view('show')->with('Etudiant',$Etudiant->code);
		/*return view('index',[‘articlee’=>$Etudiant]);*/
        $Customers = Customers::where('id', $id)->firstOrFail();
        return view('show', compact('Customers'));
    }
}
