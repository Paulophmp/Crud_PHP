
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
            </tr>
            </thead>

            <tbody>
            @if(count($nome) > 0)
                @foreach( $nome as $use )
                    <tr>
                        <td>{{$use->id}}</td>
                        <td>{{$use->nome}}</td>
                        <td>{{$use->email}}</td>
{{--                        <td>{{$use->cidade}}</td>--}}
                    </tr>
                @endforeach
            @else
                <td>
                    Nenhum dado encontrado!</td>
            @endif
            </tbody>
        </table>

    {{--@endif--}}

@endsection