<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pet;  //nama model
use App\Models\AdoptionReq; 
use Auth;
use Illuminate\Support\Facades\Response;
use Image;
class AdoptionListController extends Controller
{
    
/*admin panel controller function*/
  public function storePet(Request $request){

  $validation=$request->validate([
    'petID'=>'required|numeric|max:4',
    'petName'=>'required',
    'petType'=>'required',
    'Age'=>'required|numeric'
  ]);
   $image_file=$request->file('pet_image');
   $image=Image::make($image_file);
   Response::make($image->encode('jpeg'));
   $Adoptpet=new pet();
   $Adoptpet['petID']=$request->input('petID');
   $Adoptpet['petName']=$request->input('petName');
   $Adoptpet['petType']=$request->input('petType');
   $Adoptpet['Age']=$request->input('Age');
   $Adoptpet['pet_image']=$image;
   $Adoptpet->save();
   return redirect('petList')->with('status', 'New pet has successfully added');
  }
   
  public function storeForm(){
    $data=pet::latest()->paginate(5);
    return view('storePet');
    
    /*return view('storePet',compact('data'))->with('i',(request()->input('page,1')-1)*5);*/
    
  }

  public function delete($petID){
      $data=pet::find($petID);
      $data->delete();
      return redirect('petList')->with('status', 'Selected pet has successfully deleted');;
  }

  public function list(){

     $data=pet::all();
        return view('petList',['data'=>$data]);
  }
}
