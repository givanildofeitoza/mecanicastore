<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $dates = ['date'];
    protected $guarded = ['id'];

    public function obterTodos() 
    {
        return Self::where('situacao','=','Normal')-> paginate(3);
    }

    public function obterPorId($id) 
    {
        return $this::FindOrFail(id)->get();
    }

    public function ExcluirProduto($id) 
    {
       $produto = Self::findOrfail($id);       
       $produto->situacao = "Excluido";
       $produto->Save(); 
    }

}
