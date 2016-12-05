

    @extends("layout.master")
    @section('container')


    <div class="jumbotron">
        <h1>Sejam Bem Vindo</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <!-- Button trigger modal -->
        <p><a class="btn btn-lg btn-success" href="#" role="button"  data-toggle="modal" data-target="#myModal">Contate-nos</a></p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Contate-nos agora</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Formulario de Acesso</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div>
                                <label class="form-group">Nome: </label>
                                <input type="text" class="form-control">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Discover Modules</h3>
                </div>
                <div class="panel-body">
                    <p>
                        The community is working on developing a community site to
                        serve as a repository and gallery for ZF modules. The
                        project is available <a href="https://github.com/zendframework/modules.zendframework.com">on GitHub</a>.
                        The site is currently live and currently contains a list of
                        some of the modules already available for ZF.
                    </p>

                    <p><a class="btn btn-success pull-right" href="http://modules.zendframework.com/" target="_blank">Explore ZF Modules &raquo;</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Discover Modules</h3>
                </div>
                <div class="panel-body">
                    <p>
                        The community is working on developing a community site to
                        serve as a repository and gallery for ZF modules. The
                        project is available <a href="https://github.com/zendframework/modules.zendframework.com">on GitHub</a>.
                        The site is currently live and currently contains a list of
                        some of the modules already available for ZF.
                    </p>

                    <p><a class="btn btn-success pull-right" href="http://modules.zendframework.com/" target="_blank">Explore ZF Modules &raquo;</a></p>
                </div>
            </div>
        </div>

    </div>
    @endsection