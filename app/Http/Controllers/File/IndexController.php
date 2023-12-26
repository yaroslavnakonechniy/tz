<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;

class IndexController extends Controller
{
    public function __invoke(){

        $files = File::latest()->get();;
        
        return view('file.index', compact('files'));
    }
}
