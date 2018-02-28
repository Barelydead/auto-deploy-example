function initMap() {
    var hq = {lat: 46.904043, lng: -96.811193};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      center: hq
    });

    var marker = new google.maps.Marker({
      position: hq,
      map: map
    });
}
