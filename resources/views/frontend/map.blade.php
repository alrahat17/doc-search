@extends('layouts.admin_layout')
@section('admin_content')


<style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height:380px; 
        width:1000px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
              <h1 class="probootstrap-heading probootstrap-animate">Contact Us </h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div id="map"></div>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate">
            <form action="" method="" class="form">
              <div class="form-group">
                  <label>Latitude</label>
                  <input type="text" name="latitude" id="latitude" class="form-control">
              </div>
              <div class="form-group">
                <label>Longtude</label>
                <input type="text" name="longitude" id="longitude" class="form-control">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7a-pVRxc_cx00QNTiPWQZW50qxiqZGO0&libraries=places"></script>


   <script type="text/javascript">
    var map;
    var myLatLng;
    $(document).ready(function() {
        geoLocationInit();
        function geoLocationInit() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                alert("Browser not supported");
            }
        }

    function success(position) {

        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        //console.log([latval,lngval]);
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        //nearbySearch(myLatLng, "school");
        searchGirls(latval,lngval);
      }
     function fail() {
          alert("it fails");
      }


       //Create Map
       function createMap(myLatLng) {
           map = new google.maps.Map(document.getElementById('map'), {
               center: myLatLng,
               zoom: 12
           });
           var marker = new google.maps.Marker({
               position: myLatLng,
               map: map,
               draggable:true,
           });

           /*Drugable Functionality*/

           google.maps.event.addListener(marker, 'dragend', function(evt){
            var lat = evt.latLng.lat().toFixed(3);
            var lng = evt.latLng.lng().toFixed(3);
            $('#latitude').val(lat);
            $('#longitude').val(lng);
           });
        }

        //Create marker
       function createMarker(latlng, icn, name) {
           var marker = new google.maps.Marker({
               position: latlng,
               map: map,
               //icon: icn,
               draggable:true,
               title: name
           });
       }
        function searchGirls(lat,lng){
            $.post('http://localhost:8000/api/searchGirls',{lat:lat,lng:lng},function(match){
              $.each(match, function(i,val){
                var glatval = val.lat;
                var glngval = val.lng;
                var gname = val.name;
                var GLatLng = new google.maps.LatLng(glatval, glngval);
                var gicn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                createMarker(GLatLng,gicn,gname);
                
               });
            });
        }

      });
   </script>   

  @endsection
