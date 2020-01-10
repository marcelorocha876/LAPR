@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Comprovativos de Morada</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="well">
                        <p class="text-justify">
                            Submeta abaixo os comprovativos que possuir para justificar a sua morada.
                            <br>
                            <br>
                            Exemplo: Carta de Eletricidade, Carta de Internet, etc.
                            <br>
                            <br>
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Selecione Ficheiro</label>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Selecione Ficheiro</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-block bg-gradient-success">Submeter</button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
