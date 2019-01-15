@extends('layouts.admin_layout')
@section('admin_content')


<style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height:380px; 
        width:1349px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>


    <section class="probootstrap-hero probootstrap-hero-inner" style="background-image: url(/donate_front/img/hero_bg_bw_1.jpg); height:380px; width:1349px;"  data-stellar-background-ratio="0.5">
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





    @php

   //$location = 'Comilla,Bangladesh';
    $google_map_key = 'AIzaSyC9x8mCn5-P8XUl59uGqwmmcU6Alt1qza8';
    @endphp







    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate">
            
          </div>

          
        </div>
      </div>
    </section>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9x8mCn5-P8XUl59uGqwmmcU6Alt1qza8&callback=initMap"
    async defer></script>


    <script type="text/javascript">
      
     var map;
     function initMap() {

      var location = "Australia";
    
      var locations = [
      ['Sydney', -33.868820, 151.209290, 4],
      ['Brisbane', -27.469770, 153.025131, 5],
      ['Queensland', -20.917574, 142.702789, 3],
      ['Melbourne', -37.813629,144.963058, 2],
      ['New South Wales', -31.253218, 146.921097, 1]
    ];



      

      var google_map_key = "<?php echo $google_map_key; ?>"


      
      axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
          address:location,
          key:google_map_key,
        }
      })



      .then(function(response){
        // Log full response
        console.log(response);

        // Geometry
        var lat = response.data.results[0].geometry.location.lat;
        var lng = response.data.results[0].geometry.location.lng;
        var myLatlng = new google.maps.LatLng(lat,lng);

        var geometryOutput = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 4,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        /*
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: geometryOutput
        });

        */

        var marker, i;

      for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: geometryOutput
      });
    }

       
      })
      .catch(function(error){
        console.log(error);
      });


    }

    

  </script>   



  @endsection