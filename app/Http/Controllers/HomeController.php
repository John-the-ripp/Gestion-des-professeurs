<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Deposit;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->role_id=='1'){
                return view('admin.home');
            }
            else{
                return view('user.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        return view('user.home');
    }


    public function deposit(Request $request){
        $data = new deposit;

        $data->name=$request->nom;
        

        $data->phone=$request->numero_tel;

        
        $data->N_CIN=$request->N_CIN;

        $data->N_DRPP=$request->N_DRPP;

        $data->email=$request->email;

        $data->specialite=$request->specialite;

        $data->date_de_recrutement=$request->date_de_recrutement;

        $data->dossier_pedagogique = $request->dossier_pedagogique;

        $data->dossier_scientifique = $request->dossier_scientifique; 

        $data->dossier_administratif = $request->dossier_administratif;

        $data->status='En cours';


        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','votre candidature est postulé avec succès');

    }


    public function mescandidature(){

        if(Auth::id()){

            $userid=Auth::user()->id;
            $candidature=deposit::where('user_id',$userid)->get();
            return view('user.mes_candidature',compact('candidature'));

        }
        else{

            return redirect()->back();
        }
        
    }

    public function supprimer($id){

        $data =deposit::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function modifier($id){

        $data = deposit::find($id);

        return view('user.modifier_prof',compact('data'));
    }

    Public function editprof(Request $request,$id){

        $prof = deposit::find($id);

        $prof->name=$request->nom;
        

        $prof->phone=$request->numero_tel;

        
        $prof->N_CIN=$request->N_CIN;

        $prof->N_DRPP=$request->N_DRPP;

        $prof->email=$request->email;

        $prof->specialite=$request->specialite;

        $prof->date_de_recrutement=$request->date_de_recrutement;

        $prof->dossier_pedagogique = $request->dossier_pedagogique;

        $prof->dossier_scientifique = $request->dossier_scientifique; 

        $prof->dossier_administratif = $request->dossier_administratif;

        $prof->save();

        return redirect()->back()->with('message','votre candidature est modifié avec succès');


    }
}
