
@extends('web.app')
@section('header')
@endsection
@section('contenido')
 
 <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2 class="ubicacion"><strong>KAJEKI</strong></h2>
              <p class="lead mb-5">CLL12 AV8 12-15, Prados del este<br>
                Teléfono: 3186425500
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Nombre</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Asunto</label>
              <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">Mensaje</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary mt-2" value="Send message">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->


  @endsection