<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;
use App\Http\Controllers\File\BaseController;
use App\Http\Requests\FileRequest;

class StoreController extends BaseController
{
    public function __invoke(FileRequest $request){

        $this->service->store($request);
        
        return redirect()->route('file.index')->with('success','Новий файл було додано успішно');
    }
}
