<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function liste_prof_view()
    {

        if(Auth::id()){
            if(Auth::user()->role_id=='1'){
                $data=deposit::all();
                return view('admin.liste_prof_view',compact('data'));

            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
        
    }

    public function approved($id){

        $data = deposit::find($id);
        $data->status='accepter';
        
        $data->save();
        return redirect()->back();
    }

    public function canceled($id){

        $data = deposit::find($id);
        $data->status='refuser';
        
        $data->save();

        return redirect()->back();
    }
    public function showprof(){

        if(Auth::id()){
            if(Auth::user()->role_id=='1'){
                $data = deposit::all();


                return view('admin.showprof',compact('data'));

            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
       
    }

    public function deleteprof($id){
        $data = deposit::find($id);

        $data->delete();

        return redirect()->back();
    }

   
    
}
