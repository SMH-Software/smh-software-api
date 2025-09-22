<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $data = Account::all();
        if($data->count() < 1){
            return response()->json([
                'message' => 'Aucune donnée touvée'
            ]);
        }

        return response()->json($data);
    }

    public function store(AccountRequest $request){
        Account::create($request->validated());
        return response()->json([
            'message' => 'Compte créé avec succès !'
        ], status: 200);
    }

    public function show(string $id){
        $account = Account::find($id);
        if(!$account){
            return response()->json([
                'message' => 'le compte est introuvable'
            ], status: 404);
        }

        return response()->json($account);
    }

    public function update(string $id, AccountRequest $request) {
        $account = Account::find($id);
        if(!$account){
            return response()->json([
                'message' => 'le compte est introuvable'
            ], status: 404);
        }
        $account->update($request->validated());
        return response()->json([
            'message' => 'Compte mis à jour avec succès !'
        ], status: 200);

    }

    public function delete(string $id){
        $account = Account::find($id);
        if(!$account){
            return response()->json([
                'message' => 'le compte est introuvable'
            ], status: 404);
        }
        $account->delete();
        return response()->json([
            'message' => 'Compte supprimé avec succès !'
        ], status: 200);
    }
}
