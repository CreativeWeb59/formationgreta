<?php

namespace App\Http\Controllers;

use App\Models\{Formation, document};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        
        if (Auth::user()->role_id == 2) {
            $formations = Formation::get();
            return view('auth.user.formation.index', compact('formations'));
        } else {
            $reqFormartion = Formation::where ('role_id',Auth::user()->role_id)->select(array('role_id','id','title'))->pluck('id');
            $formartion_id = $reqFormartion[0];

            $details = document::with('formation',)->orderBy('title', 'ASC')->where('formation_id',$formartion_id)->get();

            $titleFormation = formation::where('role_id',Auth::user()->role_id)->select(array('role_id', 'title'))->firstOrFail();

            return view('auth.user.formation.show', compact('details','titleFormation'));
        }

    }

    public function show($id) {
        
//        $details = document::where('formation_id',$id)->get();
        $details = document::with('formation',)->orderBy('title', 'ASC')->where('formation_id',$id)->get();
        $titleFormation = formation::where('id',$id)->select(array('id', 'title'))->firstOrFail();
        return view('auth.user.formation.show', compact('details','titleFormation'));
    }
}
