<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pet;  //nama model
use App\Models\AdoptionReq; 
use Auth;
class AdoptionListController extends Controller
{
    public function index(){

      $data=pet::all();
        return view('adoption',['data'=>$data]);
     
        
    }

    public function storeAdoptionreq(Request $request){
    $Adopt=new AdoptionReq();
    $userID = Auth::user()->id;
    $Adopt->UserID= $userID;
    $Adopt->adoptID=$request->input('adoptID');
    $Adopt->petID=$request->input('petID');
    $Adopt->reqDate=$request->input('reqDate');
    $Adopt->reqStatus=$request->input('reqStatus');


    $user=\DB::table('adoption_reqs')
    ->select('UserID')
    ->where('adoption_reqs.UserID', $userID)
    ->get();

    $pet=\DB::table('adoption_reqs')
    ->select('petID')
    ->where('UserID','=',$userID)
    ->Where('petID','=', $Adopt->petID)
    ->get();

     if($pet->isEmpty()){
        $pet='Null';
      }
      
    if ($user= $userID AND $pet=='Null'){
  
        $Adopt->save();

        
        return redirect('/Adoption')->with('status', 'Your request is submitted!');
      
     
      }
    else{
      return redirect('/Adoption')->with('status', 'You have requested the pet!Please select another pet!');
    }
    
    }

    public function confirmReq(Request $request){
      $data['adoptID']=$request->input('adoptID');
      $data['petID'] = $request->input('petID');
      $data['reqDate'] = $request->input('reqDate');
      $data['reqStatus'] = $request->input('reqStatus');
      $pet=pet::all();
      return view('ConfirmRequest',compact('data'),['pet'=>$pet]);
  }

  public function checkStatus(){
    $userID = Auth::user()->id; /* hardcode dulu sbb belum ada login*/
    $status=\DB::table('pet_adoptions')
    ->join('adoption_reqs','adoption_reqs.petID','pet_adoptions.petID')
    ->select('adoptID','petName','petType','Age','pet_image','pet_adoptions.petID','reqStatus','reqDate','created_at')
    ->where('adoption_reqs.UserID', $userID)

    ->get();

    return view('checkStatus',['status'=>$status]);
  }
   

}
