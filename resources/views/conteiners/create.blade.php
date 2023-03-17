@extends('layouts.app')
@section('content')
<div class="container text-center bg-light">
    <h3>Criar Conteiner</h3>
</div>

<br>
<div class="container col-6 mx-auto border shadow rounded p-3">
    <form action="{{ route('conteiners.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="cliente">CLIENTES</label>
          <select class="form-control" name="cliente">
            @foreach ($dados as $item)
               <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
                <input type="text" name="formatCtext" maxlength="4" class="form-control" placeholder="TEST">
                <small class="text-danger">Apenas palavras</small>
            </div>
            <div class="col-2">
                <input type="text" name="formatCnumber" maxlength="7" class="form-control" placeholder="1234567">
                <small class="text-danger">Apenas números</small>
            </div>
        </div>
        <br>
        <div class="form-group">
          <label for="tp_conteiner">TP CONTAINER</label>
          <select class="form-control" name="tp_conteiner">
            <option value="20">20</option>
            <option value="40">40</option>
          </select>
        </div>
        <div class="form-group">
            <label for="status">STATUS</label>
            <select class="form-control" name="status">
              <option value="cheio">Cheio</option>
              <option value="vazio">Vazio</option>
            </select>
          </div>
          <div class="form-group">
            <label for="categoria">CATEGORIA</label>
            <select class="form-control" name="categoria">
              <option value="exportacao">exportacao</option>
              <option value="importacao">importacao</option>
            </select>
          </div>
          <br>
          <input type="submit" value="CRIAR" class="btn btn-success">
    </form>
</div>
@endsection
