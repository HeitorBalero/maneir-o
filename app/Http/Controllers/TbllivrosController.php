<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RediractResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Moleds\tbllivros;

class TbllivrosController extends Controller
{
    //construir o crud.
    
    //Mostrar todos os registros da tabela livros
    //Crud -> Read(leitura) Select/Visualizar

    public function index(){
        $regBook = tbllivros::All();
        $contador = $regBook->count():

        return 'Livros: '.$contador.$regBook.Response()->json([],Response::HTTP_NO_CONTENT )
    }

    //Mostrar um tipo de registro especifico
    //Crud -> Read(leitura) Select/Visualizar
    show(10) -> select * from tabela where id=$id
    public function show(string $id){
        $regBook = tbllivros::find($id);

        if($regBook){
            return 'Livros Localizados: '.$regBook.Response()->json([],Response::HTTP_NO_CONTENT);
        }else{
            return 'Livros não Localizados: '.Response()->json([],Response::HTTP_NO_CONTENT);
        }
        
    }

    //Cadastrar registros
    //Crud -> Create(criar/cadastrar)
    public function store(){
        public function store(Request $request){
            $regBook = $request->ALL();

            regVeri= Validator::make($regBook[
                'nomeLivro'=>'required',
                'generoLivro'=>'required',
                'anoLivro'=>'required'
            ]);
        }
    }

    //Alterar registros
    //Crud -> update(alterar)
    public function update(){

    }

    //Deletar os registros
    //Crud -> delete(apagar)
    public function destroy(){

    }

    //Crud
    //C reate
    //r ead
    //u pdate
    //d elete

}
