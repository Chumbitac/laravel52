@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="input-group ">
              <input name="tbBuscar" id="tbBuscar" type="textbox" placeholder="Buscar . . ." class="form-control input-lg">
              <span class="input-group-btn">
                <button class="btn btn-success input-lg" type="button" id="bBuscar" ><spam class="glyphicon glyphicon-search" > </spam> </button>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection

