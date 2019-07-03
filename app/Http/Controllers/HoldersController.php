<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holder;

class HoldersController extends Controller
{
    //
    function index(Request $req){
        $holders= Holder::all();
        return view('holders.index',['holders'=>$holders]);
    }
    function create(Request $req){
        return view('holders.create');
    }
    function show(Request $req,Holder $holder){
        return view('holders.show',['holder'=>$holder]);
    }
    function store(Request $req){
        $holder=$req->input('holder');
        Holder::create($holder);
        return redirect(route('holders.index'));
    }
    function edit(Request $req,Holder $holder){
        return view('holders.edit',['holder'=>$holder]);
    }
    function update(Request $req,Holder $holder){
        $holder->name=$req->input('holder.name');
        $holder->save();
        return redirect(route('holders.show',['holder'=>$holder]));
    }
    function delete(Request $req,Holder $holder){
        $holder->delete();
        return redirect(route('holders.index'));
    }
}
