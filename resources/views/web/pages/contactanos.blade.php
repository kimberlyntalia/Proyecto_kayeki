@extends('web.app')

@section('header')
@endsection

@section('contenido')
<section class="content">
    <div class="card">
        <div class="card-body row">

            <!-- INFO IZQUIERDA -->
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <div>
                    <h2 class="ubicacion"><strong>KAJEKI</strong></h2>
                    <p class="lead mb-5">
                        CLL12 AV8 12-15, Prados del este<br>
                        Teléfono: 3186425500
                    </p>
                </div>
            </div>

            <!-- CONTENIDO DERECHO -->
            <div class="col-7">

                {{-- MENSAJE DE ÉXITO --}}
                @if(session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif

                {{-- FORMULARIO SOLO PARA INVITADOS --}}
                @guest
                <form action="{{ route('contacto.guardar') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Asunto</label>
                        <input type="text" name="asunto" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea name="mensaje" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">
                            Enviar mensaje
                        </button>
                    </div>
                </form>
                @endguest

                {{-- TABLA SOLO PARA USUARIOS LOGUEADOS --}}
                @auth
                <hr>
                <h4>📩 Mensajes recibidos</h4>

                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contactos as $contacto)
                            <tr>
                                <td>{{ $contacto->nombre }}</td>
                                <td>{{ $contacto->email }}</td>
                                <td>{{ $contacto->asunto }}</td>
                                <td>{{ $contacto->mensaje }}</td>
                                <td>
    <form method="POST" action="{{ route('contacto.eliminar', $contacto->id) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">
            Eliminar
        </button>
    </form>
</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endauth

            </div>
        </div>
    </div>
</section>
@endsection
