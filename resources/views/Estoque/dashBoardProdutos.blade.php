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
                <th>Custo R$</th>
                <th>Preço R$</th>
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
                <td>{{$produto->precoVenda}}</td>
                <td>{{$produto->situacao}}</td>
                <td>
                   <ul class="botoesGridControle"> 
                        <li>                            
                            <form action="/ProdutosTodos/alterarProdutos/{{$produto->id}}" method="POST">
                                    @csrf   
                                    @method('GET')                         
                                    <button class="btn btn-secondary"><i class="bi bi-pencil-fill"></i>Editar</button>
                            </form>
                        </li>
                        <li>       
                            <form action="/ExcluirProduto/{{$produto->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i>Deletar</button>
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
</div>
<div class="pagination">
    {{$produtoLista->links()}}
</div>
@endsection