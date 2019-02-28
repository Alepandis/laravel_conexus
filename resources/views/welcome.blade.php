<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caso práctico</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </head>
    <body>
      @if (session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
      @endif

      <form id="form_alta" action="{{route('persona.alta')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="POST">
        <div class="row m-4">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="name">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label" for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" placeholder="01-(55)-55555555" required="true">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                  <label class="control-label" for="correo">Correo:</label>
                  <input type="text" class="form-control" name="correo" placeholder="mail@mail.com" required="true">
              </div>
            </div>
        </div>
        <div class="row m-4">
          <div class="col-sm-11">
            <div class="form-group">
              <label class="control-label" for="comentarios">Comentarios</label>
              <textarea class="form-control" name="comentarios" rows="3" required="true"></textarea>
            </div>
          </div>
        </div>
        <div class="row m-4">
          <div class="col-sm-11">
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="check">
              <label class="form-check-label" for="check">Acepto Términos y Condiciones</label>
            </div>
            <button type="submit" class="btn btn-primary form">Guardar</button>
          </div>
        </div>
      </form>
    </body>
</html>
