@extends('_layout.app')


@section('conteudo')
@include('_layout.navbar')



<div class="container-fluid bg-slide">
    <div class="container text-center text-white">
        <div class="row">
            <div class="col-md-4 block2">

            </div>
            <div class="col-md-4 align-self-center">
                <h1 class="text">Bem vindo à Sugadão Cross</h1>
                <p text-align: center;>
                    <strong>SUGADÃO CrossFit&nbsp;</strong>

                    é um BOX moderno e completo, localizado em <strong>Samambaia&nbsp;</strong> no&nbsp;Distrito Federal. Nossa estrutura é 100% Gladius Equipament, que é a maior linha Nacional de Equipamentos para CrossFit.
                </p>
                <button type="button" class="btn btn-primary">Ver Mais</button>
            </div>
            <div class="col-md-4 ">

            </div>

        </div>

    </div>

</div>
@include('_layout.footer')
@endsection