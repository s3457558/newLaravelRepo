<?php

namespace App\Http\Controllers;
use App\ChooseFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class FileController extends Controller
{


    public function upload(){

        $directory = config('app.fileDestinationPath');
//        $files = Storage::files($directory);
        $files = ChooseFiles::all();
//        return view('upload');
        return view('upload')->with(array('files'=>$files));
    }





    public function handleUpload(request $request){

//        if($request->hasFile('file')){

            $file = $request->file('file');
            $allowedFileTypes = config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');
            $rules = [
              'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
            ];

            $this->validate($request, $rules);

            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();


            $destinatinoPath = config('app.fileDestinationPath').'/'.$fileName;

            $uploaded = Storage::put($destinatinoPath, file_get_contents($file->getRealPath()));

//            $uploaded->move(public_path().'/');
            if($uploaded){
                ChooseFiles::create([
                   'filename' => $fileName,
                    'filesize_bytes'=>$fileSize,
                ]);
            }
//        }

        return redirect()->to('register');
    }







    public function show(Request $request){
//        $users= User::orderBy('id','DESC')->paginate(5);
        $choose_files = chooseFiles::orderBy('id','DESC')->paginate(5);
        return view('adminLicense.license',compact('choose_files'));


/*        $files = chooseFiles::all();
        return view('adminLicense.license',compact('files'));*/
    }
}



//if($request->hasFile('license')){
//
//
//    $filename = $request->license->getClientOriginalName();
//
//    $filesize = $request->license->getClientSize();
//
//    $request->license->storeAs('public/upload',$filename);
//
//    $choose_files = new ChooseFiles;
//
//    $choose_files->name = $filename;
//
//    $choose_files->size = $filesize;
//
//    $choose_files->save();
////            return 'yes';
//    return redirect()->route('register');
//}
//else{
//    return redirect()->route('upload.license');
//}
//return $request->all();