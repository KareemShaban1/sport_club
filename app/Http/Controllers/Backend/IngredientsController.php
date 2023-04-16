<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use App\Models\Ingredients;
use App\Models\Meals;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    //

    public function index(){

        $meal_ingredients = Ingredients::all();
        return view('backend.pages.ingredients.index',compact('meal_ingredients'));
 
    }

    public function Get_Meal($id){

        return Meals::where('diet_id',$id)->pluck('meal_name','id');

    }

    public function create(){
        
        $diets = Diet::all();
        return view('backend.pages.ingredients.create',compact('diets'));
    }
    public function store(Request $request){

        $data = $request->except('diet_id');

        Ingredients::create($data);

        return redirect()->route('backend.ingredient.index');
        
    }
    public function edit($id){
        
        $diets = Diet::all();

        $ingredient = Ingredients::findOrFail($id);

        return view('backend.pages.ingredients.edit',compact('diets','ingredient'));
    
    }
    public function update(Request $request, $id){

        $ingredient = Ingredients::findOrFail($id);

        $data = $request->except('diet_id');

        $ingredient->update($data);

        return redirect()->route('backend.ingredient.index');
        
    }
    public function destroy(){
        
    }
}
