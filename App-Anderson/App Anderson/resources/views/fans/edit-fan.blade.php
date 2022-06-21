@extends('layouts.base')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <h1>Dados do torcedor - Editar</h1>
    <form action="{{ route('fans.update', $fan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Email</label>
                <input name="email" class="form-control" type="email" value="{{ $fan->email }}"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2 form-group">
                <label for="inputPassword2" class="mb-2">Primeiro Nome</label>
                <input name="firstname" class="form-control" type="text" value="{{ $fan->firstname }}"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Último Nome</label>
                <input name="lastname" class="form-control" type="text" value="{{ $fan->lastname }}"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Telefone</label>
                <input name="phonenumber" class="form-control" type="text" value="{{ $fan->phonenumber }}"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Data Nascimento</label>
                <input name="borndate" class="form-control" type="date" value="{{ $fan->borndate }}"
                    aria-label=" input example">
            </div>
        </div>


        <a href="{{ route('fans.show', $fan) }}" class="btn btn-danger btn-sm">
            Cancelar
        </a>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </form>
@endsection
