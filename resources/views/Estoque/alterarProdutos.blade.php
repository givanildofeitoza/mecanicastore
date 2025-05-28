@extends('layouts.mainLayout')

@section('titulo','Mecanica Store')

@section('tituloPagina','Alterar Produtos')

@section('conteudo')
<div class="container-fluid">
    <form>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab2">Fiscal Estadual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab3">Fiscal Federal</a>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Aba Principal -->
            <div class="tab-pane fade show active" id="tab1">
                <div class="container mt-6 conteudo-alteracao-produto">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="{{$prd->codigo}}">
                        </div>
                        <div class="col-md-6">
                            <label for="referencia" class="form-label">Referência</label>
                            <input type="text" class="form-control" id="referencia" name="referencia" value="{{$prd->referencia}}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{$prd->descricao}}">
                    </div>

                    <div class="mb-3">
                        <label for="descricaoComplementarstring" class="form-label">Descrição Complementar</label>
                        <input type="text" class="form-control" id="descricaoComplementarstring" name="descricaoComplementarstring" value="{{$prd->descricaoComplementarstring}}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="unidade" class="form-label">Unidade</label>
                            <input type="text" class="form-control" id="unidade" name="unidade" value="{{$prd->unidade}}">
                        </div>
                        <div class="col-md-6">
                            <label for="codigotipo" class="form-label">Código Tipo</label>
                            <input type="text" class="form-control" id="codigotipo" name="codigotipo"  value="{{$prd->codigotipo}}">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="codigoGrupo" class="form-label">Código Grupo</label>
                            <!-- <input type="text" class="form-control" id="codigoGrupo" name="codigoGrupo" value="{{$prd->codigoGrupo}}"> -->
                            <select  class="form-select selectGrupo" id="grupo" name="grupo" >                                
                                @if(isset($grupoatual->gruponome ))
                                <option value="{{$prd->codigoGrupo}}">{{$grupoatual->gruponome}}</option>                              
                                @foreach($grupoTodos as $gt)
                                    <option value="{{$gt->id}}">{{$gt->gruponome}}</option>
                                @endforeach                                
                              @endif  
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="codigoSubGrupo" class="form-label">Código SubGrupo</label>
                            <!-- <input type="text" class="form-control" id="codigoSubGrupo" name="codigoSubGrupo" value="{{$prd->codigoSubGrupo}}"> -->
                               <select  class="form-select" id="subgrupo" name="subgrupo">
                                 @if(isset($subGrupoatual->subgruponome))
                                <option value="{{$prd->codigosubGrupo}}">{{$subGrupoatual->subgruponome}}</option>                                
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aba Fiscal Estadual -->
            <div class="tab-pane fade" id="tab2">
                <div class="container mt-6 conteudo-alteracao-produto">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="custo" class="form-label">Custo</label>
                            <input type="number" step="0.01" class="form-control" id="custo" name="custo" value="{{$prd->custo}}">
                        </div>
                        <div class="col-md-6">
                            <label for="precoVenda" class="form-label">Preço Venda</label>
                            <input type="number" step="0.01" class="form-control" id="precoVenda" name="precoVenda" value="{{$prd->precoVenda}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="tributacao" class="form-label">Tributação</label>
                            <input type="number" step="0.01" class="form-control" id="tributacao" name="tributacao" value="{{$prd->tributacao}}">
                        </div>
                        <div class="col-md-6">
                            <label for="icms" class="form-label">ICMS</label>
                            <input type="number" step="0.01" class="form-control" id="icms" name="icms" value="{{$prd->icms}}">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="dataCadastro" class="form-label">Data Cadastro</label>
                        <input type="date" class="form-control" id="dataCadastro" name="dataCadastro" value="{{$prd->dataCadastro}}">
                    </div>
                </div>
            </div>

            <!-- Aba Fiscal Federal -->
            <div class="tab-pane fade" id="tab3">
                <div class="container mt-6 conteudo-alteracao-produto">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="tributacaoIpi" class="form-label">Tributação IPI</label>
                            <input type="number" step="0.01" class="form-control" id="tributacaoIpi" name="tributacaoIpi" value="{{$prd->tributacaoIpi}}">
                        </div>
                        <div class="col-md-6">
                            <label for="ipi" class="form-label">IPI</label>
                            <input type="number" step="0.01" class="form-control" id="ipi" name="ipi" value="{{$prd->ipi}}">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="tributacaoPis" class="form-label">Tributação PIS</label>
                            <input type="text" class="form-control" id="tributacaoPis" name="tributacaoPis" value="{{$prd->tributacaoPis}}">
                        </div>
                        <div class="col-md-6">
                            <label for="pis" class="form-label">PIS</label>
                            <input type="number" step="0.01" class="form-control" id="pis" name="pis" value="{{$prd->pis}}">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="tributacaoCofins" class="form-label">Tributação COFINS</label>
                            <input type="text" class="form-control" id="tributacaoCofins" name="tributacaoCofins" value="{{$prd->tributacaoCofins}}">
                        </div>
                        <div class="col-md-6">
                            <label for="cofins" class="form-label">COFINS</label>
                            <input type="number" step="0.01" class="form-control" id="cofins" name="cofins" value="{{$prd->cofins}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Gravar Informações</button>
    </form>
</div>
@endsection
