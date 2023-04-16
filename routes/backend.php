<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DietController;
use App\Http\Controllers\Backend\IngredientsController;
use App\Http\Controllers\Backend\MealController;
use App\Http\Controllers\Backend\PlayerController;
use App\Http\Controllers\Backend\TrainerController;
use App\Http\Controllers\Backend\TrainingController;
use App\Http\Controllers\Backend\TrainingGroupController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
          // url prefix
          'prefix' => LaravelLocalization::setLocale() . '/backend',
          'as' => 'backend.',
          'middleware' => [
          
            'localeCookieRedirect', 'localizationRedirect', 'localeViewPath'
          ],
        
        
        ], function () {

          Route::get('/dashboard',[DashboardController::class,'index']);

          Route::group([
            'prefix'=>'trainer',
            'as'=>'trainer.'
          ],function(){
            Route::get('/trainers',[TrainerController::class,'index'])->name('index');
            Route::get('/add_trainer',[TrainerController::class,'create'])->name('create');
            Route::post('/store_trainer',[TrainerController::class,'store'])->name('store');
            Route::get('/edit_trainer/{trainer_id}',[TrainerController::class,'edit'])->name('edit');
            Route::post('/update_trainer/{trainer_id}',[TrainerController::class,'update'])->name('update');
          });

          Route::group([
            'prefix'=>'diet',
            'as'=>'diet.'
          ],function(){
            Route::get('/diets',[DietController::class,'index'])->name('index');
            Route::get('/add_diet',[DietController::class,'create'])->name('create');
            Route::post('/store_diet',[DietController::class,'store'])->name('store');
            Route::get('/edit_diet/{diet_id}',[DietController::class,'edit'])->name('edit');
            Route::post('/update_diet/{diet_id}',[DietController::class,'update'])->name('update');
        
          });

          Route::group([
            'prefix'=>'meal',
            'as'=>'meal.'
          ],function(){
            Route::get('/meals',[MealController::class,'index'])->name('index');
            Route::get('/add_meal',[MealController::class,'create'])->name('create');
            Route::post('/store_meal',[MealController::class,'store'])->name('store');
            Route::get('/edit_meal/{meal_id}',[MealController::class,'edit'])->name('edit');
            Route::post('/update_meal/{meal_id}',[MealController::class,'update'])->name('update');
       
          });


          Route::group([
            'prefix'=>'ingredient',
            'as'=>'ingredient.'
          ],function(){
            Route::get('/ingredients',[IngredientsController::class,'index'])->name('index');
            Route::get('/add_ingredient',[IngredientsController::class,'create'])->name('create');
            Route::get('/Get_Meal/{diet_id}',[IngredientsController::class,'Get_Meal'])->name('Get_Meal');
            Route::post('/store_ingredient',[IngredientsController::class,'store'])->name('store');
            Route::get('/edit_ingredient/{ingredient_id}',[IngredientsController::class,'edit'])->name('edit');
            Route::post('/update_ingredient/{ingredient_id}',[IngredientsController::class,'update'])->name('update');
          });


          Route::group([
            'prefix'=>'training_group',
            'as'=>'training_group.'
          ],function(){
            Route::get('/training_group',[TrainingGroupController::class,'index'])->name('index');
            Route::get('/add_training_group',[TrainingGroupController::class,'create'])->name('create');
            Route::post('/store_training_group',[TrainingGroupController::class,'store'])->name('store');
            Route::get('/edit_training_group/{training_group_id}',[TrainingGroupController::class,'edit'])->name('edit');
            Route::post('/update_training_group/{training_group_id}',[TrainingGroupController::class,'update'])->name('update');
          });


          Route::group([
            'prefix'=>'training',
            'as'=>'training.'
          ],function(){
            Route::get('/trainings',[TrainingController::class,'index'])->name('index');
            Route::get('/add_training',[TrainingController::class,'create'])->name('create');
            Route::post('/store_training',[TrainingController::class,'store'])->name('store');
            Route::get('/edit_training/{training_id}',[TrainingController::class,'edit'])->name('edit');
            Route::post('/update_training/{training_id}',[TrainingController::class,'update'])->name('update');
          });

          Route::group([
            'prefix'=>'player',
            'as'=>'player.'
          ],function(){
            Route::get('/players',[PlayerController::class,'index'])->name('index');
            Route::get('/add_player',[PlayerController::class,'create'])->name('create');
            Route::post('/store_player',[PlayerController::class,'store'])->name('store');
            Route::get('/edit_player/{player_id}',[PlayerController::class,'edit'])->name('edit');
            Route::post('/update_player/{player_id}',[PlayerController::class,'update'])->name('update');
          });

        });