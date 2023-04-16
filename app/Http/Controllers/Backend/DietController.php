<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    //
    public function index(){

        $diets = Diet::all();
        return view('backend.pages.diet.index',compact('diets'));
 
    }


    public function create(){
        
        return view('backend.pages.diet.create');
    }
    
    
    public function store(Request $request){
        
        $data = $request->all();

        Diet::create($data);

        return redirect()->route('backend.diet.index');
    }
    
    
    public function edit($id){
        
        $diet = Diet::findOrFail($id);

        return view('backend.pages.diet.edit',compact('diet'));
    }
    
    
    public function update(Request $request , $id){
        
        $diet = Diet::findOrFail($id);

        $data = $request->all();

        $diet->update($data);

        return redirect()->route('backend.diet.index');

    }
    
    
    public function destroy(){
        
    }
    
}
