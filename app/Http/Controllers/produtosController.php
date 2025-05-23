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
    public function produtosEditar(request $request)
    {      
        $modelProduto = (new Produto);
        $modelProduto->alterar($request);
        $produtoAlterado = $modelProduto->obterTodos();  
       return  redirect('ProdutosTodos')->with('msgRetorno','Produto '.$request['descricao'].' alterado com sucesso!');   ;       
    }
    public function show($id)
    {
        $content= (new Produto)->showProduto($id);
       return   view('estoque.alterarProdutos',['prd' => $content]);
    }
}
