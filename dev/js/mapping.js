function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    disableDefaultUI: true
  });

  var geocoder = new google.maps.Geocoder();

  var address = document.querySelector('.js-map').getAttribute('data-address');
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

