@extends('layouts.app')


@section('content')

    <!-- general form elements disabled -->
    <div class="card card-blue">
        <div class="card-header">
            <h3 class="card-title">Candidatura</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form role="form">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Apelido</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Idade</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Contacto Telefónico</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Habilitações Literárias</label>
                            <select class="form-control">
                                <option>9º Ano</option>
                                <option>12º Ano</option>
                                <option>Licenciatura</option>
                                <option>Mestrado</option>
                            </select>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Habilitações Literárias mais detalhadas e Curiosidades</label>
                            <textarea class="form-control" rows="5" placeholder="Insira aqui as suas habilitações mais detalhadas caso tenho selecionado Licenciatura ou Mestrado no campo anterior"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Comprovativos</label>
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
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-block bg-gradient-success">Submeter</button>
                    </div>

                </div>


            </form>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
