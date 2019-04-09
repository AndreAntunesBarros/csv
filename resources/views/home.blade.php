@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form method="post" action="/telefones">
            {{ csrf_field() }}
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Nome</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Celular</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Fixo</a>
                    </li>
                </ul>
                <br>
                <div id="myTabContent" class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <label for="textAreaNome">Inserir um nome por Linha</label>
                        <textarea class="form-control" id="textAreaNome" name="textAreaNome" rows="10"></textarea>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <label for="textAreaCelular">Inserir um Número por Linha</label>
                        <textarea class="form-control" id="textAreaCelular" name="textAreaCelular" rows="10"></textarea>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <label for="textAreaFixo">Inserir um Número por Linha</label>
                        <textarea class="form-control" id="textAreaFixo" name="textAreaFixo" rows="10"></textarea>
                    </div>

                </div>

            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
                                 
    </div>
</div>
@endsection
