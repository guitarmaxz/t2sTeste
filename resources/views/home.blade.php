@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mx-auto">
        <a href="{{ route('conteiners.index') }}" class="btn btn-lg btn-primary">Conteiners</a>
        <a href="#" class="btn btn-lg btn-success">Movimentacoes</a>
    </div>
</div>
@endsection
