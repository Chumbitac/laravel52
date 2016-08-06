@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container">
   <br><br>
   <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
      <img src="regordete_logo.png" alt="..." class="img-responsive" >
        </div>
        <div class="col-md-2"></div>
   </div>
</div><br>
    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="input-group ">
              <input name="tbBuscar" id="tbBuscar" type="textbox" placeholder="Buscar . . ." class="form-control input-lg">
              <span class="input-group-btn">
                <button class="btn btn-info input-lg" type="button" id="bBuscar" ><spam class="glyphicon glyphicon-search" > </spam> </button>
              </span>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div id="loading" hidden>
      <div class="center-block" >
          <p><img class="img-responsive center-block" src="loading.gif" /></p>
      </div>
    </div>
    <br><br>   
</div>




 <div class="modal fade" id="modalDireccion" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="input-group ">
              <input name="tbDireccion" id="tbDireccion" type="textbox" placeholder="Ingrese su direccion . . ." class="form-control input-lg">
              <span class="input-group-btn">
                <button class="btn btn-success input-lg" type="button" onclick="searchDireccion(document.getElementById('tbDireccion').value)" ><spam class="glyphicon glyphicon-globe" > </spam> </button>
              </span>
            </div>
        </div>
        <br>
        <div class="modal-footer">
           <br>
        </div>
      </div>
    </div>
  </div>

 <div class="modal fade" id="modalMapa" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>¿Sera por aquí?</h3>
        </div>
        <div class="modal-body">
            <div id="map_canvas" style="width: 100%; height: 300px"></div>
        </div>
        <br>
        <div class="modal-footer">
            <button id="bNo" type="submit" class="btn btn-danger btn-danger pull-left" data-dismiss="modal">No</button>
            <button id="bSi"type="submit" class="btn btn-success btn-success pull-left" data-dismiss="modal">Si</button>
        </div>
      </div>
    </div>
  </div>

@endsection