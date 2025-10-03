<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
  public function index()
    {
        $data['company'] = DB::table('company')->first();
        return view('home', $data);
    }  
  public function create()
  {
    return view('company.create');
  }
  public function store(Request $request)
  {
    DB::table('company')->insert([
      'name' =>$request->name,
      'email' =>$request->email,
      'phone' =>$request->phone,
      'address' =>$request->address,
      'created_at' =>now(),
      'updated_at' =>now()
    ]);
  return redirect('/')->with('success', 'Form berhasil dibuat.');
  }
}
