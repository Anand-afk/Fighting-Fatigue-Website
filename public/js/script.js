

// const audioContainer = document.getElementById("audioContainer");
var context = new (window.AudioContext || window.webkitAudioContext)();

car_audio.muted = false;
  // })
 
  const createMap = ({ lat, lng }) => {
    return new google.maps.Map(document.getElementById('map'), {
      center: { lat, lng },
      zoom: 15
    });
  };

  const createMarker = ({ map, position }) => {
    var image = {
      url: "crash.jpg", // url
      scaledSize: new google.maps.Size(50, 35), // scaled size
      origin: new google.maps.Point(0, 0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
    };
    return new google.maps.Marker({ map, position, icon: image });
  };

  const trackLocation = ({ onSuccess, onError = () => { } }) => {
    if ('geolocation' in navigator === false) {
      return onError(new Error('Geolocation is not supported by your browser.'));
    }
    return navigator.geolocation.watchPosition(onSuccess, onError, { maximumAge: 60000, timeout: 5000, enableHighAccuracy: true })
  };

  /**
   * Get position error message from the given error code.
   * @param {number} code
   * @return {String}
   */
  const getPositionErrorMessage = code => {
    switch (code) {
      case 1:
        return 'Permission denied.';
      case 2:
        return 'Position unavailable.';
      case 3:
        return 'Timeout reached.';

    }
  };
  function distance(lat1, lon1, lat2, lon2, unit) {
    if ((lat1 == lat2) && (lon1 == lon2)) {
      return 0;
    }
    else {
      var radlat1 = Math.PI * lat1 / 180;
      var radlat2 = Math.PI * lat2 / 180;
      var theta = parseFloat(lon1) - parseFloat(lon2);
      var radtheta = Math.PI * theta / 180;
      var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
      if (dist > 1) {
        dist = 1;
      }
      dist = Math.acos(dist);
      dist = dist * 180 / Math.PI;
      dist = dist * 60 * 1.1515;
      if (unit == "K") { dist = dist * 1.609344 }
      if (unit == "N") { dist = dist * 0.8684 }
      return dist;
    }
  }

  function init() {
    const initialPosition = { lat: 59.32, lng: 17.84 };
    const map = createMap(initialPosition);
    const marker = createMarker(
      {
        map,
        position: initialPosition
      });
    const $info = document.getElementById('info');
    var oldlat = "";
    var oldlng = "";

    
    document.addEventListener('click', function() {
    let watchId = trackLocation({
      onSuccess: ({ coords: { latitude: lat, longitude: lng } }) => {
        if (oldlat != lat.toFixed(3) && oldlng != lng.toFixed(3)) {
          oldlat = lat.toFixed(3);
          oldlong = lng.toFixed(3);
            map.panTo({ lat, lng });
            $info.textContent = `Lat: ${lat.toFixed(5)} Lng: ${lng.toFixed(5)}`;
            $info.classList.remove('error');
            marker.setPosition({ lat, lng });
            map.panTo({ lat, lng });
            $info.textContent = `Lat: ${lat.toFixed(5)} Lng: ${lng.toFixed(5)}`;
            $info.classList.remove('error');
         
            /**
             * return the distance between two points.
             *
             * @param {number} lat1		x position of first point
             * @param {number} lon1		y position of first point
             * @param {number} lat2		x position of second point
             * @param {number} lon2		y position of second point
             * @return {number} 		distance between given points
             */
            
              
            context.resume().then(() => {
            highSeverity.forEach(eachSeverity => {
              acclat = eachSeverity.Latitude;
              acclng = eachSeverity.Longitude;
              x = distance(acclat, acclng, lat, lng, 'K');
            
                if (x < 0.5) {
                  console.log(acclat,acclng);
                  console.log(lat,lng);
                    document.getElementById('car_audio').play();
                }
                else {
                  console.log("Far");
                }
            })
           });
          }
        else {
          console.log("duplicate");
        }
      },
      onError: err => {
        console.log($info);
        $info.textContent = `Error: ${err.message || getPositionErrorMessage(err.code)}`;
        $info.classList.add('error');
      }
    });
  
    });
  
  }
