
    @extends('layout.master')
    @section('title', 'Criar Usuário')
    @section('container')
        <div>
        <h3>Novo Usuário</h3>

        <form method="post" action="usuarios/store" name="form" id="form" class="form-horizontal" enctype="multipart/form-data">
                {!! csrf_field() !!}
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" autofocus id="nome" class="form-control">
                    </div>
            </div>
{{--            <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">--}}
            <div class="form-group">
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
                    <div class="input-group date">
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
                    <input type="email" name="email" id="email" class="form-control">
                    {{--@if ($errors->has('email'))--}}
                        {{--<span class="help-block">--}}
                                   {{--<strong>{{ $errors->first('email') }}</strong>--}}
                               {{--</span>--}}
                    {{--@endif--}}
                </div>
            </div>

            {{--<div class="form-group">--}}
                {{--<label class="control-label col-sm-2">Estado:</label>--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<select name="estado" class="btn btn-default form-control">--}}
                            {{--<option disabled selected> -Selecione um Estado- </option>--}}
                            {{--<option value="AC">Acre</option>--}}
                            {{--<option value="AL">Alagoas</option>--}}
                            {{--<option value="AP">Amapá</option>--}}
                            {{--<option value="AM">Amazonas</option>--}}
                            {{--<option value="BA">Bahia</option>--}}
                            {{--<option value="DF">Distrito Federal</option>--}}
                            {{--<option value="ES">Espírito Santo</option>--}}
                            {{--<option value="GO">Goiás</option>--}}
                            {{--<option value="MA">Maranhão</option>--}}
                            {{--<option value="MT">Mato Grosso</option>--}}
                            {{--<option value="MS">Mato Grosso do Sul</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
            {{--</div>--}}

            <div class="form-group">
                <label class="col-md-2 control-label" for="cep">CEP:</label>
                <div class="col-md-4">
                    <input id="cep" name="cep" class="form-control input-md" type="text">
                </div>
            </div>

            <div class="form-group aparecer" style="display: none;">
                <label class="col-md-4 control-label" for="">Rua:</label>
                <div class="col-md-4">
                    <input id="street" name="street" class="form-control input-md" type="text">
                </div>
            </div>

            <div class="form-group aparecer" style="display: none;">
                <label class="col-md-4 control-label" for="">Bairro: </label>
                <div class="col-md-4">
                    <input id="bairro" name="bairro" class="form-control input-md" type="text">
                </div>
            </div>


            <div class="form-group aparecer" style="display: none;">
                <label class="col-md-4 control-label" for="cidade">Cidade</label>
                <div class="col-md-4">
                    <input id="cidade" name="cidade" class="form-control input-md" type="text">
                </div>
            </div>

            <div class="form-group aparecer" style="display: none;">
                <label class="col-md-4 control-label" for="uf">Estado:</label>
                <div class="col-md-2">
                    <input id="uf" name="uf" class="form-control input-md" type="text">
                </div>
            </div>

            {{--<div class="form-group">--}}
                {{--<label class="control-label col-sm-2">Cidade:</label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" name="cidade" class="form-control">--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="--}}
            {{--form-group">--}}
                {{--<label class="control-label col-sm-2">Endereço:</label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" name="endereco" class="form-control">--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Cadastra</button>
            </div>
        </form>
        </div>
<script src="/js/mascara-telefone.js"></script>
<script>
    jQuery(function($){
        $("#phone").mask("(99) 9999-9999");
    });
</script>
<script>
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',

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
                },
                telefone: {
                    required: true,
                },
                dataNascimento: {
                    required: true,
                },
                estado:{
                    required: true,
                },
                cidade:{
                    required: true,
                }
            },
            messages:{
                nome:{
                    required:"Por favor, informe seu nome",
                    minlength:"O nome deve ter pelo menos 3 caracteres"
                },
                email:{
                    required:"É necessário informar um email",
                    email: "Não contém um endereço de email válido"
                },
                telefone: {
                    required: "Infome um Telefone"
                },
                dataNascimento: {
                    required: "Informe a sua data de nascimento "
                },
                estado:{
                    required: "Informe seu estado"
                },
                cidade: {
                    required: "Informe uma cidade"
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
                success:function (label) {
                    $(label).closest('.form-group').addClass('has-success');
                },
                errorPlacement: function(error, element) {
                    if(element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form){
                    $.ajax({
                        type: "Post",
                        url: 'usuarios/store',
                        success:
                            toastr.success('Criado com Sucesso!!'),
                        data: {
                                nome:           $('#nome').val(),
                                telefone:       $('input[telefone]').val(),
                                dataNascimento: $('input[dataNascimento]'),
                                email:          $('input[email]').val(),
                                estado:         $('input[estado]').val(),
                                cidade:         $('input[cidade]').val(),
                                endereco:       $('input[endereco]').val(),
                        },
                        headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            }
                        });
                },
                invalidHandler: function (form) {
                    toastr.options = {
//                            "closeButton": true, // true/false
                            "debug": false, // true/false
                            "newestOnTop": false, // true/false
                            "progressBar": false, // true/false
                            "positionClass": "toast-top-right", // toast-top-right / toast-top-left / toast-bottom-right / toast-bottom-left
                            "onclick": null,
//                            "showDuration": "8000", // in milliseconds
//                            "hideDuration": "100", // in milliseconds
                            "timeOut": "5000", // in milliseconds
                            "extendedTimeOut": "1000", // in milliseconds
                            "showEasing": "swing",
                            "hideEasing": "linear",
//                            "showMethod": "fadeIn",
//                            "hideMethod": "fadeOut"
                    }
                        toastr.error('Dados Obrigatórios não informado!!')
                    },
        });
    });
</script>
<script>
    $(document).ready(function() {
        function limpa_form_cep() {
            // Limpa valores do formulário de cep.
            $('input[name="street"]').val("");
            $('input[name="neighborhood"]').val("");
            $('input[name="cidade"]').val("");
            $('input[name="uf"]').val("");
        }
        $('#cep').blur(function (e) {

            var cep = $('input[name="cep"]').val() || ''

            if (!cep){
                return
            }
            var url = 'http://viacep.com.br/ws/' + cep + '/json'
            $.getJSON(url,function (data) {
                if (!("erro" in data)) {
                    //Atualiza os campos com os valores da consulta.
                    $('input[name="street"]').val(data.logradouro)
                    $('input[name="bairro"]').val(data.bairro)
                    $('input[name="cidade"]').val(data.localidade)
                    $('input[name="uf"]').val(data.uf)
                }
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_form_cep();
                    alert("CEP não encontrado.");
                }
            });
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('#cep').mask('99999-999');
        $("#cep").blur(function() {
            $('.aparecer').show();
        });
    });
</script>
@endsection
