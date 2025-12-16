@extends('plantilla.app')

@section('contenido')
<div class="container mt-4">
    <h2>Mensajes de contacto</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
            <tr>
                <td>{{ $contacto->nombre }}</td>
                <td>{{ $contacto->email }}</td>
                <td>{{ $contacto->asunto }}</td>
                <td>{{ $contacto->mensaje }}</td>
                <td>{{ $contacto->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


