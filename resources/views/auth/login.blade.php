
    <!-- resources/views/auth/login.blade.php -->

    @extends('layout.master')
    @section('title', 'Login')
    @section('container')

        <div align="center" id="loading"></div>
        <div id="divMsg"></div>

        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
             <div class="panel-body">

                 {{--@if(count($errors) > 0 )--}}
{{--                     @if($errors->any())--}}
                     {{--<ul class="alert alert-danger text-center">--}}
                         {{--@foreach($errors->all() as $error)--}}
                             {{--<ul>{{  $error }}</ul>--}}
                         {{--@endforeach--}}
                     {{--</ul>--}}
                 {{--@endif--}}

             <form method="POST" action="/auth/login" id="formLogin" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">Senha</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password"  id="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="ckeckbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary" id="loginEntrar">Login</button>
                        <a href="{{ url('/password/email') }}">Esqueceu a Senha ?</a>
                    </div>
                </div>
             </form>
             </div>
        </div>
<script>
    $(document).ready(function () {
        $("#formLogin").validate({
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true,
                }
            },
            messages: {
                email: {
                    required: "Informe seu Email"
                },
                password: {
                    required: "Digite sua Senha"
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
                label.text("ok").css("color", "green").removeClass("error").addClass("OK!!");
            },
            errorPlacement: function(error, element) {
                if(element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
//            submitHandler: function () {
//                $.ajax({
//                    type: "POST",
//                    url: 'auth/login',
//                    success:
//                        toastr.success("Login realizado com sucesso"),
//                    data: {
//                        email: $('#email').val(),
//                        password: $('#password').val()
//                    },
//                    headers:
//                        {
//                            'X-CSRF-Token': $('input[name="_token"]').val()
//                        }
//                })
//            },
            invalidHandler: function () {
                toastr.error("Campos Obrigatórios");
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#loginEntrar").click(function () {
            $.ajax({
                type: "POST",
                data:{
                },
                success: function (data) {
                    $("#divMsg").hide();
                    $("#loading").html(data);
                }
            });
            $("#loading").html("<br><br> Carregando dados.....<br><img src='/img/ajax.gif'> <br><br>");
        })
    });
</script>
   @endsection