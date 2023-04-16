<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    //
    use UploadImageTrait;

    public function index(){

        $trainers = Trainer::all();
        return view('backend.pages.trainer.index',compact('trainers'));
 
    }
    public function create(){
        
        return view('backend.pages.trainer.create');
    }


    public function store(Request $request){
        
        $data = $request->except('image');

        $data['image'] = $this->uploadImage($request);

        Trainer::create($data);

        return redirect()->route('backend.trainer.index');
    }

    
    public function edit($id){
        
        $trainer = Trainer::findOrFail($id);
        
        return view('backend.pages.trainer.edit',compact('trainer'));
    }

    
    public function update(Request $request , $id){

        $trainer = Trainer::findOrFail($id);

        $old_image = $trainer->image;

        $data = $request->except('image');

        $new_image = $this->uploadImage($request);

        if ($new_image) {
            $data['image'] = $new_image;
        }

        $trainer->update($data);

        // isset => Determine if a variable is declared and is different than NULL
        if($old_image && $new_image){
            // Storage::disk('disk_name')->delete('image_path');
            Storage::disk('uploads')->delete($old_image);
        }

        return redirect()->route('backend.trainer.index');
    }
    public function destroy(){
        
    }

     

}
