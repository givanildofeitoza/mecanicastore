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
        return $this::paginate(3);
    }

    public function obterPorId($id) 
    {
        return $this::FindOrFail(id)->get();
    }
}
