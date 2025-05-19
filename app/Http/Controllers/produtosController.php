<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class produtosController extends Controller
{
    public function produtosShow()
    {       
        $produtos = (new Produto)->obterTodos();
        return View('Estoque.dashBoardProdutos',['ProdutoLista'=>$produtos]);
    }
}
