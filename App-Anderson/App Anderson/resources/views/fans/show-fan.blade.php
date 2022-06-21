@extends('layouts.base')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <h1>Dados do torcedor</h1>
    <div class="row">
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Email</label>
            <input class="form-control" type="text" value="{{ $fan->email }}" aria-label="readonly input example" readonly>
        </div>
        <div class="col-12 mb-2 form-group">
            <label for="inputPassword2" class="mb-2">Primeiro Nome</label>
            <input class="form-control" type="text" value="{{ $fan->firstname }}"
                aria-label="readonly input example"readonly>
        </div>
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Último Nome</label>
            <input class="form-control" type="text" value="{{ $fan->lastname }}" aria-label="readonly input example"
                readonly>
        </div>
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Telefone</label>
            <input class="form-control" type="text" value="{{ $fan->phonenumber }}" aria-label="readonly input example"
                readonly>
        </div>
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Data Nascimento</label>
            <input class="form-control" type="date" value="{{ $fan->borndate }}" aria-label="readonly input example"
                readonly>
        </div>
    </div>

    <form action="{{ route('fans.destroy', $fan->id) }}" method="POST">
        <a href="{{ route('fans.edit', $fan) }}" class="btn btn-primary">
            Editar
        </a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
