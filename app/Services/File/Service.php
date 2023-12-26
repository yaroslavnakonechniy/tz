<?php

namespace App\Services\File;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class Service {

    public function store($request){
        
        $product = new File();

        $product->description = $request->input('description');
        
        if($request->hasFile('path')) {
            $product->path = $request->file('path')->store('public');
            $product->save();
        }
    
    }

    public function update($request, $file_id){

        $file = File::find($file_id);

        Storage::disk('')->delete($file->path);

        if($request->hasFile('path')) {
            $file->path = $request->file('path')->store('public');
            $file->save();
        }

    }

    public function destroy( $file_id){

        $file = File::find($file_id);

        Storage::disk('')->delete($file->path);

        $file->delete();
    }
}
