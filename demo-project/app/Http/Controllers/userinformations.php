<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userinformation;

class userinformations extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = userinformation::all();
        return view('User.show',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validationdata=$request->validate(
       [
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|max:12|min:10',
        'password'=>'required|max:12|min:8',
       ]
      );
      userinformation::create($validationdata);
    
      return redirect()
          ->route('user.index')
          ->with('success', 'Employee created successfully.'); 
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=userinformation::findOrFail($id);
        return view('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=userinformation::findOrFail($id);
        $validationdata=$request->validate(
            [
             'name'=>'required',
             'email'=>'required|email',
             'phone'=>'required|max:12|min:10',
             'password'=>'required|max:12|min:8',
            ]
            );
            $user->update($validationdata);
            return redirect()->route('user.index')->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=userinformation::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success','user deleted successfully');
    }
}
