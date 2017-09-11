<?php

namespace App\Http\Controllers;
use App\ChooseFiles;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showUploadForm(){


        return view('upload');
    }


    public function storeFile(request $request){

        if($request->hasFile('file')){

            $filename = $request->file->getClientOriginalName();

            $filesize = $request->file->getClientSize();

            $request->file->storeAs('public/upload',$filename);

            $file = new ChooseFiles;

            $file->name = $filename;

            $file->size = $filesize;

            $file->save();
//            return 'yes';

            return redirect()->route('register') ->with('Success','license uploaded successfully');
        }
        return $request->all();
    }
}