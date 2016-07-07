
    @extends('layout.master')
    @section('title', 'Contato')
    @section('container')

        <h3>Entre em Contato com Nois</h3>

            <form action="{{url('contato/store')}}" method="POST"  enctype="multpart/form-data" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="control-label col-sm-2">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control">
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label col-sm-2">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Descricao:</label>
                        <div class="col-sm-10">
                    <textarea type="text" name="descricao" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>

                {{--<a class="btn btn-danger">--}}
                        {{--<i class="fa fa-trash-o fa-lg"> Deletar</i>--}}
                {{--</a>--}}

            </form>

        {{--Incicio Rodapé--}}
            <footer class="container">
                <address>
                    <strong>MeuCrud Arquitetura</strong><br>
                    Rua Verqueiro, 8421, Sudoeste<br>
                    Distrito Federal, DF<br>
                    Tel: (61) 3333-4529
                </address>
                <address>
                    Email: Paulo.Mendes00@hotmail.com
                </address>
            </footer><!-- Fim Rodapé-->


    @endsection