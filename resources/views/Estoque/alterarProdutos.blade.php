@extends('layouts.mainLayout')

@section('titulo','Mecanica Store')

@section('tituloPagina')
<a href="/ProdutosTodos">Produtos → Cadastro</a>
@endsection;

@section('conteudo')
<div class="container mt-6">     
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo">
                </div>
                <div class="col-md-6">
                    <label for="referencia" class="form-label">Referência</label>
                    <input type="text" class="form-control" id="referencia" name="referencia">
                </div>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>

            <div class="mb-3">
                <label for="descricaoComplementarstring" class="form-label">Descrição Complementar</label>
                <input type="text" class="form-control" id="descricaoComplementarstring" name="descricaoComplementarstring">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="unidade" class="form-label">Unidade</label>
                    <input type="text" class="form-control" id="unidade" name="unidade">
                </div>
                <div class="col-md-6">
                    <label for="codigotipo" class="form-label">Código Tipo</label>
                    <input type="text" class="form-control" id="codigotipo" name="codigotipo">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="codigoGrupo" class="form-label">Código Grupo</label>
                    <input type="text" class="form-control" id="codigoGrupo" name="codigoGrupo">
                </div>
                <div class="col-md-6">
                    <label for="codigoSubGrupo" class="form-label">Código SubGrupo</label>
                    <input type="text" class="form-control" id="codigoSubGrupo" name="codigoSubGrupo">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="custo" class="form-label">Custo</label>
                    <input type="number" step="0.01" class="form-control" id="custo" name="custo">
                </div>
                <div class="col-md-6">
                    <label for="precoVenda" class="form-label">Preço Venda</label>
                    <input type="number" step="0.01" class="form-control" id="precoVenda" name="precoVenda">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="icms" class="form-label">ICMS</label>
                    <input type="number" step="0.01" class="form-control" id="icms" name="icms">
                </div>
                <div class="col-md-6">
                    <label for="ipi" class="form-label">IPI</label>
                    <input type="number" step="0.01" class="form-control" id="ipi" name="ipi">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="tributacaoPis" class="form-label">Tributação PIS</label>
                    <input type="text" class="form-control" id="tributacaoPis" name="tributacaoPis">
                </div>
                <div class="col-md-6">
                    <label for="pis" class="form-label">PIS</label>
                    <input type="number" step="0.01" class="form-control" id="pis" name="pis">
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label for="dataCadastro" class="form-label">Data Cadastro</label>
                <input type="date" class="form-control" id="dataCadastro" name="dataCadastro">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
    </div>
@endsection;