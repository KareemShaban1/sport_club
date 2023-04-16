<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use App\Models\Meals;
use Illuminate\Http\Request;

class MealController extends Controller
{
    //
    public function index(){

        $meals = Meals::all();
        return view('backend.pages.meals.index',compact('meals'));
 
    }
    public function create(){
        
        $diets = Diet::all();
        return view('backend.pages.meals.create',compact('diets'));
    }
    public function store(Request $request){

        $data = $request->all();

        Meals::create($data);

        return redirect()->route('backend.meal.index');
        
    }
    public function edit($id){
        
        $diets = Diet::all();

        $meal = Meals::findOrFail($id);

        return view('backend.pages.meals.edit',compact('diets','meal'));
    }

    public function update(Request $request,$id){

        $meal = Meals::findOrFail($id);

        $data = $request->all();

        $meal->update($data);

        return redirect()->route('backend.meal.index');
        
    }
    public function destroy(){
        
    }
}
