@extends('layouts.master')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary col-sm-8">
                <div class="card-header">
                    <h3 class="card-title">Fazer um Pedido</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Assunto</label>
                                    <input type="text" class="form-control" placeholder="Escreva o seu assunto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Exposição do Pedido</label>
                                    <textarea class="form-control" rows="3" placeholder="Descreva o que pretende"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Carregar FIcheiro</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Selecione Ficheiro</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar Pedido</button>
                </div>
                </form>
            </div>
        </div>
    </div>




@endsection
