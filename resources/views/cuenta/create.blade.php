@extends('layouts.app', ['pageSlug' => 'cuentas'])


@section('content')


<div class="container">
    <div class="row">


        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">
                    <h3>Agregar un nuevo sensor</h3>
                </span>
            </div>

        </div>
        <form action="{{route('cuentas.store')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
            {!! csrf_field() !!}
            <!-- Protección contra ataques ya implementado en laravel  https://www.welivesecurity.com/la-es/2015/04/21/vulnerabilidad-cross-site-request-forgery-csrf/-->
            <!--   @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif   -->


            <div class="form-group">
                <label for="title">Numero de serie</label>
                <input type="text" class="form-control" id="Numser" name="Numser" value="{{old('Numser')}}" />
            </div>
            <div class="form-group">
                <label for="title">Lugar</label>
                <input type="text" class="form-control" id="Lugar" name="Lugar" value="{{old('Lugar')}}" />
            </div>
            <div class="form-group">
                <label for="title">Modelo</label>
                <input type="text" class="form-control" id="Modelo" name="Modelo" value="{{old('Modelo')}}" />
            </div>
            <div class="form-group">
                <label for="title">Capacidad</label>
                <input type="text" class="form-control" id="Capacidad" name="Capacidad" value="{{old('Capacidad')}}" />
            </div>
            <p>__________________________________________________________________________________________________
            </p>

            <button type="submit" class="btn btn-success">Agregar sensor</button>
        </form>
    </div>
</div>

@endsection