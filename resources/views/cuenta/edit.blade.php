@extends('layouts.app', ['pageSlug' => 'cuentas'])


@section('content')


<div class="container">
    <div class="row">


        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">
                    <h3>Editar sensor</h3>
                </span>
            </div>

        </div>
        <form action="{{route('cuentas.update',$cuenta->Id)}}" method="post" role="form" enctype="multipart/form-data"
            class="col-lg-7">

            {{ method_field('PATCH') }}
            {!! csrf_field() !!}
            @method('PATCH')


            <div class="form-group">
                <label for="title">Numero de serie</label>
                <input type="text" class="form-control" id="Numser" name="Numser" value=" {{ $cuenta->Numser }}" />
            </div>
            <div class="form-group">
                <label for="title">Lugar</label>
                <input type="text" class="form-control" id="Lugar" name="Lugar" value="{{ $cuenta->Lugar }}" />
            </div>
            <div class="form-group">
                <label for="title">Modelo</label>
                <input type="text" class="form-control" id="Modelo" name="Modelo" value=" {{ $cuenta->Modelo }}" />
            </div>
            <div class="form-group">
                <label for="title">Capacidad</label>
                <input type="text" class="form-control" id="Capacidad" name="Capacidad"
                    value="{{ $cuenta->Capacidad }}" />
            </div>
            <p>__________________________________________________________________________________________________
            </p>

            <button type="submit" class="btn btn-success">Editar sensor</button>
        </form>
    </div>
</div>

@endsection