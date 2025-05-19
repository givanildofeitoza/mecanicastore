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
                 <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opções
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-recycle"></i> Alterar</a></li>
                        <li>
                            <form action="/ExcluirProduto/{{$produto->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-light"><i class="bi bi-trash">Deletar</i></button>
                            </form>
                        </li>                       
                    </ul>
                    </div>                     
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