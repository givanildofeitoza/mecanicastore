<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class produtosController extends Controller
{
    public function produtosShow()
    {       
        $produtoLista = (new Produto)->obterTodos();
        return View('Estoque.dashBoardProdutos',compact('produtoLista'));       
    }
    public function produtosDelete($id)
    {       
        (new Produto)->ExcluirProduto($id); 
        return  redirect('ProdutosTodos')->with('msgRetorno','Produto excluído com sucesso!');       
    }
    public function produtosEditar($id)
    {       
       $produto = (new Produto)->obterPorId($id); 
           
       return  View('Estoque.alterarProdutos',['prd'=>$produto]);       
    }
    public function show($id)
    {
        $content= showProduto($id);
       return   response()->json(['content' => $content]);
    }
}
