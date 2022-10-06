@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CALENDARIO</h1>
@stop

@section('content')
   

<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div id="calendar">

                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="titulo"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formulario">
        <div class="modal-body">
            
            <div class=" form-floating mb-3">
                <input type="text" class="form-control" id="title" placeholder="Titulo del evento">
                <label for="title" class="form-label">Evento</label>
            </div>

            <div class=" form-floating mb-3">
                <input type="date" class="form-control" id="star" placeholder="star">
                <label for="star" class="form-label">Fecha</label>
            </div>

            <div class=" form-floating mb-3">
                <input type="color" class="form-control" id="color" placeholder="color">
                <label for="color" class="form-label">Color</label>
            </div>

            

           

        </div>

        <div class="modal-footer">
            <button class="btn btn-warning">Cancelar</button>
            <button class="btn btn-danger">Eliminar </button>
            <button class="btn btn-info" id="btnAccion" type="submit">Registrar</button>


        </div>
      </form>
       
    </div>
  </div>
</div>



@stop

@section('css')

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fullcalendar/lib/main.min.css') }}">
    
@stop


@section('js')
    
<script src="{{ asset('vendor/fullcalendar/lib/locales/es.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/lib/main.min.js') }}"></script>
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('vendor/moment/moment.min.js') }}"></script>





<script>
    var myModal = new bootstrap.Modal(document.getElementById('myModal'));
    let frm = document.getElementById('formulario');

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'prev, next, today',
            center: 'title',
            right: 'dayGridMonth, timeGridWeek, listWeek,'
            },
        dateClick: function (info){
            //console.log(info);
            document.getElementById('star').value = info.dateStr;
            document.getElementById('titulo').textContent = 'registro de evento';

            myModal.show();
        }
            
      });
      calendar.render();
      frm.addEventListener('submit', function(e){
          e.preventDefault();
          const title = document.getElementById('title').value;
          const fecha = document.getElementById('star').value;
          const color = document.getElementById('color').value;
        if (title == '' || fecha == '' || color == ''){
            Swal.fire(
                'Aviso',
                'Todos los campos son requeridos',
                'wraning'
            )
        }else{
            const url = 
        }

      })
    });

  </script>
@stop