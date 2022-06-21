@extends('layouts.base')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <h1>Cadastrar</h1>
    <form action="{{ route('fans.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="row">
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Email</label>
                <input name="email" class="form-control" type="email" placeholder="Email" aria-label=" input example">
            </div>
            <div class="col-12 mb-2 form-group">
                <label for="inputPassword2" class="mb-2">Primeiro Nome</label>
                <input name="firstname" class="form-control" type="text" placeholder="Primeiro nome"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Último Nome</label>
                <input name="lastname" class="form-control" type="text" placeholder="Último nome"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Telefone</label>
                <input name="phonenumber" class="form-control" type="text" placeholder="Telefone"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Data Nascimento</label>
                <input name="borndate" class="form-control" type="date" placeholder="borndate"
                    aria-label=" input example">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </form>
@endsection
