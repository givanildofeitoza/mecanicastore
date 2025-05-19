@extends('layouts.mainLayout')

@section('titulo','Mecanica Store')

@section('tituloPagina','Produtos')

@section('conteudo')
<div class="container-fluid" id="gridContainer" >
<table class="table table-light table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Unidade</th>
                <th>Custo</th>
                <th>Preço</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>           
           @foreach($produtoLista as $produto)
            <tr>
                <td>{{$produto->codigo}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->unidade}}</td>
                <td>{{$produto->custo}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->situacao}}</td>
                <td>
                    <button class="btn btn-primary btn-sm"><i class="bi bi-recycle"></i>Alterar</button>
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i>Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
</div>
<div class="pagination">
    {{$produtoLista->links()}}
</div>
@endsection;