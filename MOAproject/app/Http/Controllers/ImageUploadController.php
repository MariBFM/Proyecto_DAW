<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;

class ImageUploadController extends Controller
{
  public function upload(){
    return view('imageUpload');
  }

  public function uploadPost( Request $request){
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $name = time().'.'.$request->image->extension();

    $request->image->move(public_path('images'), $name);
    $user=auth()->user();
    $user->img_profile = 'images/'.$name;
    $user->save();

    return back()
      ->with('success','You have successfully upload image.')
      ->with('image',$name);
  }
}
