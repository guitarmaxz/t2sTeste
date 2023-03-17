@extends('layouts.app')

@section('content')
<div class="row">
    <h3 class="text-center bg-light">CONTEINERS</h3>
</div>
<br>
<div class="container">
    <a href="{{ route('conteiners.create') }}" class="btn btn-lg btn-success">Criar</a>
    <br>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CLIENTE</th>
                    <th>NR CONTEINER</th>
                    <th>TP CONTEINER</th>
                    <th>STATUS</th>
                    <th>CATEGORIA</th>
                    <th>ACOES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->nr_conteiner }}</td>
                        <td>{{ $item->tp_conteiner }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->categoria }}</td>
                        <td>
                            <a href="{{route('conteiners.edit', ['id' => $item->id])}}" class="btn btn-success w-100"> EDITAR </a>
                            <br>
                            <form action="{{ route('conteiners.delete', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="DELETAR" class="btn btn-danger btn-sm p-1 w-100">
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
