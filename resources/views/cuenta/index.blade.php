@extends('layouts.app', ['pageSlug' => 'cuentas'])


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">

            <div class="card-header">
                <div style="display: flex; justify-content: space-between; align-items: center;">

                    <span id="card_title">

                        <h4 class="card-title"> Sensores</h4>

                    </span>

                    <div class="float-right">
                        <a href="{{ route('cuentas.create') }}" class="btn btn-primary btn-sm float-right"
                            data-placement="left">
                            {{ __('Crear Nueva') }}
                        </a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    Número
                                </th>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Número de serie
                                </th>
                                <th>
                                    Lugar
                                </th>
                                <th>
                                    Modelo
                                </th>
                                <th>
                                    Capacidad
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cuentas as $cuenta )
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $cuenta->Id}}</td>
                                <td>{{ $cuenta->Numser }}</td>
                                <td>{{ $cuenta->Lugar }}</td>
                                <td>{{ $cuenta->Modelo }}</td>
                                <td>{{ $cuenta->Capacidad }}</td>


                                <td>
                                    <a class="btn btn-sm btn-primary " href="{{ route('cuentas.show',$cuenta->Id) }}"><i
                                            class="fa fa-fw fa-eye"></i> Mostrar</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('cuentas.edit',$cuenta->Id) }}"><i
                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                    <form action="{{route('cuentas.destroy',$cuenta->Id)}}" method="POST"
                                        class="formEliminar">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <!-- <i
                                                class="fa fa-fw fa-trash"></i> --> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!--   <script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.formEliminar')

        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {

                    event.preventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: 'Eliminar cuenta',
                        text: "Esta seguro de eliminar el la cuenta del provedor!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, borrar cuenta!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire(
                                'Borrado!',
                                'El sensor se ha sido borrado exitosamente.',
                                'success'
                            )
                        }
                    })
                }, false)
            })
    })()
    </script> -->
    <!--  <div class="col-md-12">
        <div class="card  card-plain">
            <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Country
                                </th>
                                <th>
                                    City
                                </th>
                                <th class="text-center">
                                    Salary
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Dakota Rice
                                </td>
                                <td>
                                    Niger
                                </td>
                                <td>
                                    Oud-Turnhout
                                </td>
                                <td class="text-center">
                                    $36,738
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Minerva Hooper
                                </td>
                                <td>
                                    Curaçao
                                </td>
                                <td>
                                    Sinaai-Waas
                                </td>
                                <td class="text-center">
                                    $23,789
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sage Rodriguez
                                </td>
                                <td>
                                    Netherlands
                                </td>
                                <td>
                                    Baileux
                                </td>
                                <td class="text-center">
                                    $56,142
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Philip Chaney
                                </td>
                                <td>
                                    Korea, South
                                </td>
                                <td>
                                    Overland Park
                                </td>
                                <td class="text-center">
                                    $38,735
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Doris Greene
                                </td>
                                <td>
                                    Malawi
                                </td>
                                <td>
                                    Feldkirchen in Kärnten
                                </td>
                                <td class="text-center">
                                    $63,542
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mason Porter
                                </td>
                                <td>
                                    Chile
                                </td>
                                <td>
                                    Gloucester
                                </td>
                                <td class="text-center">
                                    $78,615
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jon Porter
                                </td>
                                <td>
                                    Portugal
                                </td>
                                <td>
                                    Gloucester
                                </td>
                                <td class="text-center">
                                    $98,615
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->


</div>
@endsection