@extends('layouts.app')
@section('content')

    <div>
        <div>
            <h3><strong>Sobre</strong></h3>
            <div class="well">
                <p class="text-justify">
                    O REGES é um website que foi resultado de um projeto da disciplina Laboratório
                    de Programação, lecionada na Universidade Fernando Pessoa.
                    <br>
                    Tem como objetivo permitir efetuar a gestão de recursos
                    humanos de uma empresa.
                    <br><br/>
                </p>


                <hr/>
                <p class="text-justify">Os autores deste projeto foram:
                    <br><br/>
                <table class="text-center" style="border:1px solid black;margin-left:3em;">
                    <tr style="border:1px solid black;">
                        <th style="border:1px solid black;padding:0 15px 0 15px;">Número de aluno</th>
                        <th style="border:1px solid black;padding:0 15px 0 15px;">Nome</th>
                        <th style="border:1px solid black;padding:0 15px 0 15px;">Email</th>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;padding:0 15px 0 15px;">35384</td>
                        <td style="border:1px solid black;padding:0 15px 0 15px;">Fábio Rocha</td>
                        <td style="border:1px solid black;padding:0 15px 0 15px;">35383@ufp.edu.pt</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;padding:0 15px 0 15px;">35188</td>
                        <td style="border:1px solid black;padding:0 15px 0 15px;">Ricardo Simões</td>
                        <td style="border:1px solid black;padding:0 15px 0 15px;">35188@ufp.edu.pt</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
