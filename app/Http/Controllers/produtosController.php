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
        return  redirect('Estoque.dashBoardProdutos')->with('msgRetorno','Produto excluído com sucesso!');       
    }
}
