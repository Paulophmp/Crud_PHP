
    @extends('layout.master')
    @section('title', 'Criar Usuário')
    @section('container')
        <h3>Novo Usuário</h3>

        <form method="post" action="usuarios/store" name="form" id="form" class="form-horizontal" enctype="multipart/form-data">
                {!! csrf_field() !!}
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" id="nome" class="form-control">
                            {{--@if ($errors->has('nome'))--}}
                               {{--<span class="help-block">--}}
                                   {{--<strong>{{ $errors->first('nome') }}</strong>--}}
                               {{--</span>--}}
                         {{--@endif--}}
                    </div>
            </div>
            <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2" for="phone">Telefone:</label>
                <div class='col-sm-5'>
                    <div class="input-group">
                        <input type='text' id="phone" name="telefone" class="form-control" />
                        <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone"></span>
                             </span>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="datepicker">Data Nascimento:</label>
                    <div class='col-sm-5'>
                        <div class="input-group date"  data-date-format="dd/mm/yyyy">
                            <input type='text' id="datepicker" name="dataNascimento" class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                    {{--@if ($errors->has('email'))--}}
                        {{--<span class="help-block">--}}
                                   {{--<strong>{{ $errors->first('email') }}</strong>--}}
                               {{--</span>--}}
                    {{--@endif--}}
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Estado:</label>
                    <div class="col-sm-10">
                        <select name="estado" class="btn btn-default">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Cidade:</label>
                <div class="col-sm-10">
                    <input type="text" name="cidade" class="form-control">
                </div>
            </div>

            <div class="
            form-group">
                <label class="control-label col-sm-2">Endereço:</label>
                <div class="col-sm-10">
                    <input type="text" name="endereco" class="form-control">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Cadastra</button>
            </div>
        </form>
    <script src="/js/mascara-telefone.js"></script>
    <script>
        jQuery(function($){
            $("#phone").mask("(99) 9999-9999");
        });
    </script>
    <script>
        $('.input-group.date').datepicker({
            language: 'pt-BR',
            orientation: 'bottom right',
            clearBtn: true,
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $("#form").validate({
                rules : {
                    nome:{
                        required:true,
                        minlength:3
                    },
                     email:{
                        required:true
                    }
                },
                messages:{
                    nome:{
                        required:"Por favor, informe seu nome",
                        minlength:"O nome deve ter pelo menos 3 caracteres"
                    },
                    email:{
                        required:"É necessário informar um email"
                    }
                },
                    highlight: function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                    },
                    errorElement: 'span',
                    errorClass: 'help-block',
                    errorPlacement: function(error, element) {
                        if(element.parent('.input-group').length) {
                            error.insertAfter(element.parent());
                        } else {
                            error.insertAfter(element);
                        }
                    }
            });
        });
    </script>

    @endsection
