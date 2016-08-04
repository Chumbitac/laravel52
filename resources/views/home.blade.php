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


@endsection