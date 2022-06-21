@extends('layouts.base')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fans as $fan)
                <tr>
                    <th scope="row">{{ $fan->id }}</th>
                    <td scope="row">{{ $fan->firstname . ', ' . $fan->lastname }}</td>
                    <td scope="row">{{ $fan->email }}</td>
                    <td scope="row" style="max-width: 40px">
                        <a href="{{ route('fans.show', $fan) }}" class="btn btn-primary btn-sm">
                            Mais
                        </a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
