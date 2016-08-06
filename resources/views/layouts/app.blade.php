<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Decime Donde!</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="//maps.google.com/maps?file=api&v=2&sensor=false&key=AIzaSyB_cBTvxMNWauiCzJOeRDa1RcCjx3ZnaaU" type="text/javascript"></script>
<script type="text/javascript">

var map = null;
var geocoder = null;
function initialize() {

  if (GBrowserIsCompatible()) {
    map = new GMap2(document.getElementById("map_canvas"));
    map.setCenter(new GLatLng(0, 0), 0);


    geocoder = new GClientGeocoder();
  }
}

function getLatLng (point) {
     var matchll = /\(([-.\d]*), ([-.\d]*)/.exec( point );
      if ( matchll ) {
       var lat = parseFloat( matchll[1] );
       var lon = parseFloat( matchll[2] );
       lat = lat.toFixed(6);
       lon = lon.toFixed(6);

      } else {
       var message = "<b>Error extracting info from</b>:" + point + "";
       var messagRoboGEO = message;
      }

     return new GLatLng(lat, lon);
 }

function searchDireccion(Direccion) {
  $('#modalMapa').modal('show') ;
  if (geocoder) {

    geocoder.getLatLng(Direccion, function(point) {

      if (!point) {
        alert(Direccion + " not found");
      } else {

        var latLng = getLatLng (point);
      //  var info = "<h3>"+Direccion+"</h3>Latitude: "+latLng.lat()+"  Longitude:"+latLng.lng();
        var info = "<h3>Aquí?</h3>"
        var marker = new GMarker(point);
        map.setCenter(new GLatLng(latLng.lat(), latLng.lng()), 17);
        map.addOverlay(marker);
        glatitud = latLng.lat();
        gLongitud = latLng.lng();

      }
    });
  }
}
</script>


<script>
var gLatitud = 0;
var gLongitud = 0;
$(document).ready(function(){

    
   
    $("#bBuscar").click(function(){
        var pattern = $('input[name=tbBuscar]').val();
        if (pattern == ""){
            alert("");
            return;
        }
        if (gLatitud == 0 && gLongitud == 0){
            ubicar();
        }
        $("#loading").show();
        
        $.ajax({
                method: "GET",
                url: "home/" + pattern,
          success: function(data){
            $("#loading").hide();
            $.each(data, function(i,item){

                alert(data[i].nombre + " " + data[i].direccion);

            })
          },
          error: function(){
                 alert("Error!!!"),
                 $("#loading").hide();
             }
        }); 
    });

    $("#bSi").click(function(){
        alert("bSi");
        $('#modalDireccion').modal('hide');
    });
});

function ubicar()
{
    var device = navigator.userAgent;
    if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
    {
        alert("Ingresaste desde un dispositivo movil!");
    }
    else
    {
        $('#modalDireccion').modal('show');
    }
}

</script>
    <style>
        body{
                font-family: 'Lato';
            }

        .fa-btn{
                    margin-right: 6px;
               }
        #modalDireccion {
                    padding-top:10%;
                  }
</style>

</head>
<body id="app-layout" onload="initialize();">
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
