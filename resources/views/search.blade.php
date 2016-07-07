
@extends('layout.master')
@section('title', 'Usuários')
@section('container')



    {{--@if(count(!$nome))--}}
        {{--<div class="alert alert-info text-center">Nenhum usuário cadastrado</div>--}}

    {{--@else--}}

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Names</th>
            </tr>
            </thead>

            <tbody>
                @foreach( $nome as $use )
                    <tr>
                        <td>{{$use->nome}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    {{--@endif--}}

@endsection