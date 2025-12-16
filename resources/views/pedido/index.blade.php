@extends('plantilla.app')

@section('contenido')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h4>Mis Pedidos</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($registros as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->created_at->format('d/m/Y') }}</td>
                        <td>${{ number_format($pedido->total, 0, ',', '.') }}</td>
                        <td>{{ ucfirst($pedido->estado) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            No hay pedidos registrados
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection
