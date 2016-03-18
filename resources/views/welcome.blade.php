@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="input-group ">
              <input id="tbBuscar" type="textbox" placeholder="Buscar . . ." class="form-control input-lg">
              <span class="input-group-btn">
                <button class="btn btn-success input-lg" type="button" id="bBuscar" ><spam class="glyphicon glyphicon-search" > </spam> </button>
              </span>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel-group" id="accordion" role="tablist" >
            <div class="panel panel-primary">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    1 - Ferreteria Don Pipo - a 23 mtrs.
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <strong>Direccion:</strong>Av colon 2430 - Centro<br><strong>Horario: </strong>Lun a vie de 09:00 a 18:00 hs.<br><strong>Estado: </strong>Abierto.
                </div>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2 - Ferreteria Gorosito - a 27 mtrs.
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <strong>Direccion:</strong>Av colon 2435 - Centro<br><strong>Horario: </strong>Lun a sab de 09:00 a 20:00 hs.<br><strong>Estado: </strong>Abierto.
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <div class="row "> 
        <div class="col-md-2"></div>
        
           <div class="col-md-8"id="map"></div>
        
        <div class="col-md-2"></div>
      </div>
    
</div>


<script>


function initMap() {
  var myLatLng = {lat: -31.4055037, lng: -64.2107078};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 18
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'DecimeDonde'
  });

  myLatLng = {lat: -31.4057042, lng: -64.2107078};
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'DecimeDonde'
  });
}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArk6jbLvsfnl37r5luwTTQZRyV7CCc4-U&callback=initMap"
        async defer></script>


@endsection
