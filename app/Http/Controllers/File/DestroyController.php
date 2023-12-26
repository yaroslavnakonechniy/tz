<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\File\BaseController;

class DestroyController extends BaseController
{
    public function __invoke( $file_id){

        $this->service->destroy($file_id);

        return redirect()->route('file.index')->with('success','Файл було видалено успішно');
    }
}
