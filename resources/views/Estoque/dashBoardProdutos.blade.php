@extends('layouts.mainLayout')

@section('titulo','Mecanica Store')

@section('tituloPagina','Produtos')

@section('conteudo')
<div class="container">
    @if(session('msgRetorno'))
     <div class="alert alert-success" role="alert">
       <p>{{session('msgRetorno')}}</P>
    </div>
    @endif
</div>
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
                            <form action="/ProdutosTodos/show/{{$produto->id}}" method="POST">
                                    @csrf   
                                    @method('GET')                       
                                    
                            </form>
                            <button type="button" class="btn btn-secondary MeuModalBtn" data-bs-toggle="modal"  data-bs-target="#exampleModal"
                            data-id="{{ $produto->id }}"
                            data-situacao="{{ $produto->situacao }}"
                            data-codigo="{{ $produto->codigo }}"
                            data-referencia="{{ $produto->referencia }}"
                            data-descricao="{{ $produto->descricao }}"
                            data-descricaoComplementarstring="{{ $produto->descricaoComplementarstring }}"
                            data-unidade="{{ $produto->unidade }}"
                            data-codigotipo="{{ $produto->codigotipo }}"
                            data-codigoGrupo="{{ $produto->codigoGrupo }}"
                            data-codigoSubGrupo="{{ $produto->codigoSubGrupo }}"
                            data-codigoFabricante="{{ $produto->codigoFabricante }}"
                            data-custo="{{ $produto->custo }}"
                            data-custGerencial="{{ $produto->custGerencial }}"
                            data-custoMedio="{{ $produto->custoMedio }}"
                            data-ultimoCusto="{{ $produto->ultimoCusto }}"
                            data-precoVenda="{{ $produto->precoVenda }}"
                            data-precoVendaFinanciamento="{{ $produto->precoVendaFinanciamento }}"
                            data-ultimoPrecoVenda="{{ $produto->ultimoPrecoVenda }}"
                            data-origem="{{ $produto->origem }}"
                            data-tributacao="{{ $produto->tributacao }}"
                            data-icms="{{ $produto->icms }}"
                            data-tributacaoIpi="{{ $produto->tributacaoIpi }}"
                            data-ipi="{{ $produto->ipi }}"
                            data-tributacaoPis="{{ $produto->tributacaoPis }}"
                            data-pis="{{ $produto->pis }}"
                            data-tributacaoCofins="{{ $produto->tributacaoCofins }}"
                            data-cofins="{{ $produto->cofins }}"
                            data-dataCadastro="{{ $produto->dataCadastro }}"
                            onclick="abrirModal(this)">  
                            <i class="bi bi-pencil-fill"></i>Editar
                            </button>                         
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
<!-- Modal -->
<div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Alteração de produto</h1>
        <button type="button" class="btn-close" id="btnFecharModal" onclick="fecharModal()" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container mt-6">   
            <form action="/ProdutosTodos/alterar-produto/" name="frmShow" method="POST">
                @csrf   
                @method('POST')  
                <div class="row">
                    <div class="col-md-6">                        
                    <label for="id" class="form-label">Chave</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$produto->id}}">
                    </div>
                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" value="{{$produto->codigo}}">
                    </div>
                    <div class="col-md-6">
                        <label for="referencia" class="form-label">Referência</label>
                        <input type="text" class="form-control" id="referencia" name="referencia" value="{{$produto->referencia}}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{$produto->descricao}}">
                </div>               

                <div class="mb-3">
                    <label for="descricaoComplementarstring" class="form-label">Descrição Complementar</label>
                    <input type="text" class="form-control" id="descricaoComplementarstring" value="{{$produto->descricaoComplementarstring}}" name="descricaoComplementarstring">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="unidade" class="form-label">Unidade</label>
                        <input type="text" class="form-control" id="unidade" name="unidade" value="{{$produto->unidade}}">
                    </div>
                    <div class="col-md-6">
                        <label for="codigotipo" class="form-label">Código Tipo</label>
                        <input type="text" class="form-control" id="codigotipo" name="codigotipo" value="{{$produto->codigotipo}}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="codigoGrupo" class="form-label">Código Grupo</label>
                        <input type="text" class="form-control" id="codigoGrupo" name="codigoGrupo" value="{{$produto->codigoGrupo}}">
                    </div>
                    <div class="col-md-6">
                        <label for="codigoSubGrupo" class="form-label">Código SubGrupo</label>
                        <input type="text" class="form-control" id="codigoSubGrupo" name="codigoSubGrupo" value="{{$produto->codigoSubGrupo}}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="custo" class="form-label">Custo</label>
                        <input type="number" step="0.01" class="form-control" id="custo" name="custo" value="{{$produto->custo}}">
                    </div>
                    <div class="col-md-6">
                        <label for="precoVenda" class="form-label">Preço Venda</label>
                        <input type="number" step="0.01" class="form-control" id="precoVenda" name="precoVenda" value="{{$produto->precoVenda}}">
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                        <label for="origem" class="form-label">Origem</label>
                        <input type="text" class="form-control" id="origem" name="origem" value="{{$produto->origem}}">
                    </div>
                        <div class="col-md-6">
                            <label for="tributacao" class="form-label">Tributação ICMS</label>
                            <input type="text"  class="form-control" id="tributacao" name="tributacao" value="{{$produto->tributacao}}">
                        </div>

                    <div class="col-md-6">
                        <label for="situacao" class="form-label">Situação</label>
                        <input type="text" class="form-control" id="situacao" name="situacao" value="{{$produto->situacao}}">
                    </div>                

                    <div class="col-md-6">
                        <label for="icms" class="form-label">ICMS</label>
                        <input type="number" step="0.01" class="form-control" id="icms" name="icms" value="{{$produto->icms}}">
                    </div>
                       <div class="col-md-6">
                        <label for="tributacaoIpi" class="form-label">Tributação IPI</label>
                        <input type="text"  class="form-control" id="tributacaoIpi" name="tributacaoIpi" value="{{$produto->tributacaoIpi}}">
                    </div>     
                      <div class="col-md-6">
                        <label for="ipi" class="form-label">IPI</label>
                        <input type="number" step="0.01" class="form-control" id="ipi" name="ipi" value="{{$produto->ipi}}">
                    </div>

                    <div class="col-md-6">
                        <label for="tributacaoCofins" class="form-label">Tributação Cofins</label>
                        <input type="Text"  class="form-control" id="tributacaoCofins" name="tributacaoCofins" value="{{$produto->tributacaoCofins}}">
                    </div>

                    <div class="col-md-6">
                        <label for="cofins" class="form-label">Cofins</label>
                        <input type="number" step="0.01" class="form-control" id="cofins" name="cofins" value="{{$produto->cofins}}">
                    </div>

                               
                </div>             

                <div class="row mt-3">                   
                    <div class="col-md-6">
                        <label for="tributacaoPis" class="form-label">Tributação PIS</label>
                        <input type="text" class="form-control" id="tributacaoPis" name="tributacaoPis" value="{{$produto->tributacaoPis}}">
                    </div>
                    <div class="col-md-6">
                        <label for="pis" class="form-label">PIS</label>
                        <input type="number" step="0.01" class="form-control" id="pis" name="pis" value="{{$produto->pis}}">
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="dataCadastro" class="form-label">Data Cadastro</label>
                    <input type="date" class="form-control" id="dataCadastro" name="dataCadastro" value="{{$produto->dataCadastro}}">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Alterar</button>
            </form>
        </div>
    </div>
    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div> -->
</div>
<!-- </div>modal -->



@endsection
