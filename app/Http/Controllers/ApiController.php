<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ApiController extends Controller
{
    
    public function getAll(Request $request) {
        $client = new Cliente;
        $client->nome = $request->nome;
        $client->telefone = $request->telefone;
        $client->cpf = $request->cpf;
        $client->placa = $request->placa;
        $client->save();
             
        return response()->json([
            "message" => "Cliente criado!"
        ], 201);
    }
      
        public function getClient($id) {
            $client = new Cliente;

            $client = Cliente::find($id);
            return $client;
        }
    
        public function updateClient(Request $request, $id) {
           // $client = new Cliente;

            $client = Cliente::find($id);            
            $client->nome = $request->nome;
            $client->telefone = $request->telefone;
            $client->cpf = $request->cpf;
            $client->placa = $request->placa;
            $client->save();

            return "Sucess updating user #" . $client->id;
        }

    
        public function deleteClient ($id) {
            $client = new Cliente;
            $client = Cliente::find($id);

            if(!$client){
                return "Cliente Inexistente!";
            }else{
                $client = Cliente::where('id', $id)->delete();
                return "O cliente foi excluído com sucesso!";
            }
        }

        public function getPlacas ($pl) {
            $placa = new Cliente;

            $placa = Cliente::where('placa', 'like', '%' . $pl . '%' )->get();
            return $placa;
            }

}
