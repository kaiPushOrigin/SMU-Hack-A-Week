
<?php include "db.php"; ?>

<?php $sql = "SELECT distinct interests FROM info GROUP BY interests;";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    $num_results = mysql_num_rows($result);
    for ($i=1;$i<2;$i++) {
        $row = mysql_fetch_array($result);
        $interests = $row['interests'];

    }
   $pr = $_GET["interests"]; 
}
?>


 
<html>
  <head>
    <title>Pass variable from PHP to JavaScript - Cyberster's Blog'</title>
  



<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
<link rel="stylesheet" href="myLoc.css">




  <body>
    <script>
      var js_var = "<?php echo $interests; ?>";
        alert(js_var);
    var watchId = null;
var map = null;
var infowindow;                                 //global variables
var prevCoords = null;
var allMarkers = [];
var bound = new google.maps.LatLngBounds();
var myVar = 'pubs';

window.onload = getMyLocation;

function getMyLocation() {
  if (navigator.geolocation) {
    watchLocation();
  }
  else {
    alert("Oops, no geolocation support");
  }
}

function displayLocation(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;

  if (map == null) {
    showMap(position.coords);
    prevCoords = position.coords;
  }
  else {
    var meters = computeDistance(position.coords, prevCoords) * 1000;
    if (meters > 8) {
      scrollMapToPosition(position.coords);
      prevCoords = position.coords;
    }
  }
}


function showMap(coords) {
  var googleLatAndLong = new google.maps.LatLng(coords.latitude, 
                          coords.longitude);
  var mapOptions = {
    zoom: 10,
    center: googleLatAndLong,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var mapDiv = document.getElementById("map-canvas");
  map = new google.maps.Map(mapDiv, mapOptions);

  // add the user marker
  var title = "Your Location";
  var content = "You are here";   

  addMarker(map, googleLatAndLong, title, content);
  addNearbyPlaces(map, googleLatAndLong);

}

function addMarker(map, latlong, title, content) {
  var markerOptions = {
    position: latlong,
    map: map,
    title: title,
    clickable: true,
    icon:'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
  };

  var marker = new google.maps.Marker(markerOptions);

  allMarkers.push(marker);

  var infoWindowOptions = {
    content: content,
    position: latlong
  };

  var infoWindow = new google.maps.InfoWindow(infoWindowOptions);


  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.open(map);
  });
}

function addNearbyPlaces(map, googleLatAndLong){

    var request = {
    location: googleLatAndLong,
    radius: 500,
    keyword: js_var
  };

  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}

function callback(results, status) {
  if(status == google.maps.places.PlacesServiceStatus.OK) {
    for(var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }

    setMapBounds();                                       // to set maps position

  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  if (place.icon) {
      var image = new google.maps.MarkerImage(
            place.icon, new google.maps.Size(71, 71),
            new google.maps.Point(0, 0), new google.maps.Point(17, 34),
            new google.maps.Size(25, 25));
  } 
  else
       var image = null;

  //var photos = place.photos;

  var marker = new google.maps.Marker({
    map: map,
    icon: image,
    position: placeLoc
  });

  var request =  {
      reference: place.reference
    };

  var service = new google.maps.places.PlacesService(map);  

  allMarkers.push(marker);

  // setting content on markers

  google.maps.event.addListener(marker,'click',function(){
        service.getDetails(request, function(place, status) {
          if (status == google.maps.places.PlacesServiceStatus.OK) {
            var contentStr = '<h5>'+place.name+'</h5><p>'+place.formatted_address;
            if (!!place.formatted_phone_number) contentStr += '<br>'+place.formatted_phone_number;
            if (!!place.website) contentStr += '<br><a target="_blank" href="'+place.website+'">'+place.website+'</a>';
            contentStr += '<br>'+place.types+'</p>';
            infowindow.setContent(contentStr);
            infowindow.open(map,marker);
          } else { 
            var contentStr = "<h5>No Result, status="+status+"</h5>";
            infowindow.setContent(contentStr);
            infowindow.open(map,marker);
          }
        });
    });
}


//
// Code to watch the user's location
//
function watchLocation() {
  watchId = navigator.geolocation.watchPosition(
          displayLocation, 
          displayError);
}

function scrollMapToPosition(coords) {
  var latitude = coords.latitude;
  var longitude = coords.longitude;

  var latlong = new google.maps.LatLng(latitude, longitude);

  deleteMarkers();                       //deleting old markers

  // add the new marker
  addMarker(map, latlong, "Your location", "You are here ");
  addNearbyPlaces(map, latlong);

}


function deleteMarkers() {
  clearMarkers();
  allMarkers = [];
}

function clearMarkers(){

         for(var i=0;i<allMarkers.length;i++)
         {
             allMarkers[i].setMap(null);
         }
}



function setMapBounds(){
  for(var i in allMarkers)
  {
    bound.extend(allMarkers[i].getPosition());
  }

  map.fitBounds(bound); 
}


function displayError(error) {
  var errorTypes = {
    0: "Unknown error",
    1: "Permission denied",
    2: "Position is not available",
    3: "Request timeout"
  };
  var errorMessage = errorTypes[error.code];
  if (error.code == 0 || error.code == 2) {
    errorMessage = errorMessage + " " + error.message;
  }
  var div = document.getElementById("location");
  div.innerHTML = errorMessage;
}




// --------------------- Ready Bake ------------------
//
// Uses the Spherical Law of Cosines to find the distance
// between two lat/long points
//
function computeDistance(startCoords, destCoords) {
  var startLatRads = degreesToRadians(startCoords.latitude);
  var startLongRads = degreesToRadians(startCoords.longitude);
  var destLatRads = degreesToRadians(destCoords.latitude);
  var destLongRads = degreesToRadians(destCoords.longitude);

  var Radius = 6371; // radius of the Earth in km
  var distance = Math.acos(Math.sin(startLatRads) * Math.sin(destLatRads) + 
          Math.cos(startLatRads) * Math.cos(destLatRads) *
          Math.cos(startLongRads - destLongRads)) * Radius;

  return distance;
}

function degreesToRadians(degrees) {
  radians = (degrees * Math.PI)/180;
  return radians;
}

  </script>

<div id="map-canvas">
</div>

<div id="location">
</div>

</body>
</html>