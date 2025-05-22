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
        return $this::FindOrFail($id);
    }

    public function ExcluirProduto($id) 
    {
       $produto = Self::findOrfail($id);       
       $produto->situacao = "Excluido";
       $produto->Save(); 
    }
    
    public function alterar($request)
    {
        Self::findOrFail($request['id'])->Update($request->all());
    } 

    public function showProduto($id)
    {
         $item = this::findOrFail($id);
         $content = "<p>Título: {$item->title}</p><p>Descrição: {$item->description}</p>"; // Conteúdo dinâmico
         return  $content; 
     }

}
