@extends('plantilla.app')

@section('contenido')
<div class="app-content">
    <div class="container-fluid">

        {{-- TÍTULO --}}
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="fw-bold">Panel de administración</h2>
                <p class="text-muted">Bienvenida al dashboard de KAJEKI</p>
            </div>
        </div>

        {{-- MENSAJE --}}
        @if(Session::has('mensaje'))
            <div class="alert alert-info alert-dismissible fade show">
                {{ Session::get('mensaje') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- TARJETAS --}}
        <div class="row">

            {{-- PEDIDOS --}}
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <i class="bi bi-bag-check fs-1 text-primary"></i>
                        <h5 class="mt-2">Pedidos</h5>
                        <p class="text-muted">Ver pedidos realizados</p>
                        <a href="{{ route('perfil.pedidos') }}" class="btn btn-outline-primary btn-sm">
                            Ver pedidos
                        </a>
                    </div>
                </div>
            </div>

            {{-- PRODUCTOS --}}
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <i class="bi bi-box-seam fs-1 text-success"></i>
                        <h5 class="mt-2">Productos</h5>
                        <p class="text-muted">Gestionar productos</p>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline-success btn-sm">
                            Ir a productos
                        </a>
                    </div>
                </div>
            </div>

            {{-- USUARIOS --}}
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <i class="bi bi-people fs-1 text-warning"></i>
                        <h5 class="mt-2">Usuarios</h5>
                        <p class="text-muted">Administrar usuarios</p>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-outline-warning btn-sm">
                            Ver usuarios
                        </a>
                    </div>
                </div>
            </div>

            {{-- CONTACTANOS (MENSAJES) --}}
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <i class="bi bi-envelope fs-1 text-danger"></i>
                        <h5 class="mt-2">Contactanos</h5>
                        <p class="text-muted">Mensajes recibidos</p>
                        <a href="{{ route('contactanos') }}" class="btn btn-outline-danger btn-sm">
                            Ver mensajes
                        </a>
                    </div>
                </div>
            </div>

            {{-- PERFIL --}}
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <i class="bi bi-person-circle fs-1 text-secondary"></i>
                        <h5 class="mt-2">Mi perfil</h5>
                        <p class="text-muted">Editar mi información</p>
                        <a href="{{ route('perfil.edit') }}" class="btn btn-outline-secondary btn-sm">
                            Ir a perfil
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('mnuDashboard')?.classList.add('active');
</script>
@endpush
