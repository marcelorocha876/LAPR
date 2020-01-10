@extends('layouts.master')

@section('title')

    REGES | Compor E-mail

@endsection

@section('content_header')
    <h1>Enviar um E-mail</h1>
@stop

@section('content')


    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="/correio/entrada" class="btn btn-primary btn-block mb-3">Voltar à Caixa de Entrada</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Caixas</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item active">
                                <a href="/correio/entrada" class="nav-link">
                                    <i class="fas fa-inbox"></i> Caixa de Entrada
                                    <span class="badge bg-primary float-right">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/correio/enviado" class="nav-link">
                                    <i class="far fa-envelope"></i> Enviado
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-file-alt"></i> Rascunhos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-filter"></i> Filtrado
                                    <span class="badge bg-warning float-right">65</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-trash-alt"></i> Eliminado
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Escreva aqui o seu E-mail</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" placeholder="Para:">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Assunto:">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="12" placeholder="Escreva aqui o seu E-mail"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                                <i class="fas fa-paperclip"></i> Anexo
                                <input type="file" name="attachment">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Guardar como
                                Rascunho
                            </button>
                            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar
                            </button>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Descartar</button>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>







@endsection



