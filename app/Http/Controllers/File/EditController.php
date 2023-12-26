<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;

class EditController extends Controller
{
    public function __invoke($file_id){
       
        $file =  File::find($file_id);

        return view('file.edit', compact('file'));
    }
}
