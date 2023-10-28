<?php

namespace App\Http\Controllers;

use app\Models\User;
use App\Models\Postagem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $user = auth()->user();
        $postagens_autor = Postagem::where('autor_id', $user->id)->get();
        return view('dashboard', ['user' => $user, 'postagens' => $postagens_autor]);
    }

    public function delete($id){
        $postagem = Postagem::find($id)->first();

        if ($postagem->autor_id == User::Find(auth()->user()->id) ) {
           $postagem = Postagem::find($id);
            $postagem->delete();
            return response()->json([200]);
        }else{
            return response()->json([401]);
        }
        
    }
}
