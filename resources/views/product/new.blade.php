@extends('layouts.app')

@section('content')

<div class="bg-light p-5 rounded">
        @auth
        <span class="page-title">Registrar Produto</span>
        <form method="post" action="{{ route('product-register') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />  

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" placeholder="Produto" required="required" autofocus>
            <label for="name">Nome do Produto</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="number" class="form-control" name="price" min="0.01" step="0.01" placeholder="Preço" required="required" autofocus>
            <label for="price">Preço</label>
            @if ($errors->has('price'))
                <span class="text-danger text-left">{{ $errors->first('price') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg form-send" type="submit">Registrar</button>
    </form>
        @endauth
</div>
    @endsection