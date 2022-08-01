@extends('layouts.app', ['pageSlug' => 'cuentas'])

@section('template_title')
{{ $cuenta->name ?? 'Show Cuenta' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Mostrando Sensor</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('cuentas') }}">Regresar</a>
                    </div>
                </div>

                <div class="card-body">





                    <div class="form-group">
                        <strong>Id:</strong>
                        {{ $cuenta->Id }}
                    </div>
                    <div class="form-group">
                        <strong>Número de serie:</strong>
                        {{ $cuenta->Numser }}
                    </div>
                    <div class="form-group">
                        <strong>Lugar:</strong>
                        {{ $cuenta->Lugar }}
                    </div>
                    <div class="form-group">
                        <strong>Modelo:</strong>
                        {{ $cuenta->Modelo }}
                    </div>
                    <div class="form-group">
                        <strong>Capacidad:</strong>
                        {{ $cuenta->Capacidad }}
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection