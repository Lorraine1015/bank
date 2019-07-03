<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountsController extends Controller
{
    //
    function index(Request $req){
        $accounts=Account::all();
        return view('accounts.index',['accounts'=>$accounts]);
    }
    function create(Request $req){
        return view('accounts.create');
    }
    function show(Request $req,Account $account){
        return view('accounts.show',['account'=>$account]);
    }
    function store(Request $req){
        $account=$req->input('account');
        Account::create($account);
        return redirect(route('accounts.index'));
    }
    function edit(Request $req,Account $account){
        return view('accounts.edit',['account'=>$account]);
    }
    function update(Request $req,Account $account){
        $account->name=$req->input('account.name');
        $account->save();
        return redirect(route('accounts.show',['account'=>$account]));
    }
    function delete(Request $req,Account $account){
        $account->delete();
        return redirect(route('accounts.index'));
    }
}
