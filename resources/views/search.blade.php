
@extends('layout.master')
@section('title', 'Usuários')
@section('container')



    {{--@if(count(!$nome))--}}
        {{--<div class="alert alert-info text-center">Nenhum usuário cadastrado</div>--}}
    {{--@else--}}

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Names</th>
                <th>Emails</th>
                <th>Cidade</th>
            </tr>
            </thead>

            <tbody>
                @foreach( $nome as $use )
                    <tr>
                        <td>{{$use->id}}</td>
                        <td>{{$use->nome}}</td>
                        <td>{{$use->cidade}}</td>
                        <td>{{$use->cidade}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    {{--@endif--}}

@endsection