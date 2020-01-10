@extends('layouts.master')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="/correio/compor" class="btn btn-primary btn-block mb-3">Compor</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Caixas</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
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
                @yield('conteudo')
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


@endsection
