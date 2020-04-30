// const audioContainer = document.getElementById("audioContainer");
var context = new (window.AudioContext || window.webkitAudioContext)();
//confirm("Click Anywhere on the Map to start tracking");
document.getElementById("map").innerHTML = "<div style = 'margin-top : 20%'><h1>Turn on the alerts</h1> </div>";
const createMap = ({lat, lng}) => {
    return new google.maps.Map(document.getElementById('map'), {
        center: {lat, lng},
        zoom: 15
    });
};


const createMarker = ({map, position}) => {
    var data = 90;
    var icon = { // car icon
        path: 'M29.395,0H17.636c-3.117,0-5.643,3.467-5.643,6.584v34.804c0,3.116,2.526,5.644,5.643,5.644h11.759   c3.116,0,5.644-2.527,5.644-5.644V6.584C35.037,3.467,32.511,0,29.395,0z M34.05,14.188v11.665l-2.729,0.351v-4.806L34.05,14.188z    M32.618,10.773c-1.016,3.9-2.219,8.51-2.219,8.51H16.631l-2.222-8.51C14.41,10.773,23.293,7.755,32.618,10.773z M15.741,21.713   v4.492l-2.73-0.349V14.502L15.741,21.713z M13.011,37.938V27.579l2.73,0.343v8.196L13.011,37.938z M14.568,40.882l2.218-3.336   h13.771l2.219,3.336H14.568z M31.321,35.805v-7.872l2.729-0.355v10.048L31.321,35.805',
        scale: 0.5,
        fillColor: "#427af4", //<-- Car Color, you can change it
        fillOpacity: 1,
        strokeWeight: 1,
        anchor: new google.maps.Point(0, 5),
        rotation: data
    }
    return new google.maps.Marker({map, position, icon: icon});
};

const trackLocation = ({
                           onSuccess, onError = () => {
    }
                       }) => {
    if ('geolocation' in navigator === false) {
        return onError(new Error('Geolocation is not supported by your browser.'));
    }
    return navigator.geolocation.watchPosition(onSuccess, onError, {
        maximumAge: 60000,
        timeout: 60000,
        enableHighAccuracy: true
    })
};

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
    } else {
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
        if (unit == "K") {
            dist = dist * 1.609344
        }
        if (unit == "N") {
            dist = dist * 0.8684
        }
        return dist;
    }
}

function validate() {
    var remember = document.getElementById("check");

    if (remember.checked === true) {
        init(false);
    } else if (remember.checked === false) {
        init(true);
    }
}

function init(audioStatus) {
    const initialPosition = {lat: -37.818594, lng: 144.967466};
    const map = createMap(initialPosition);

    var image = {
        url: "car_crash.png", // url
        scaledSize: new google.maps.Size(50, 35), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
    };

    highSeverity.forEach(element => {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(element.Latitude, element.Longitude),
            map: map,
            icon: image
        });
    });

    var oldlat = "";
    var oldlng = "";

    document.addEventListener('click', function () {

        const marker = createMarker(
            {
                map,
                position: initialPosition
            });

        let watchId = trackLocation({
            onSuccess: ({coords: {latitude: lat, longitude: lng}}) => {
                if (oldlat != lat.toFixed(3) && oldlng != lng.toFixed(3)) {
                    oldlat = lat.toFixed(3);
                    oldlng = lng.toFixed(3);
                    map.panTo({lat, lng});
                    marker.setPosition({lat, lng});


                    var remember = document.getElementById("check");
                    if (remember.checked === true) {

                        highSeverity.forEach(eachSeverity => {
                            acclat = eachSeverity.Latitude;
                            acclng = eachSeverity.Longitude;

                            x = distance(acclat, acclng, lat, lng, 'K');
                            if (x < 0.5) {
                                const bouncemarker = new google.maps.Marker({
                                    position: new google.maps.LatLng(acclat, acclng),
                                    map: map,
                                    icon: image,
                                    animation: google.maps.Animation.BOUNCE
                                });
                                setTimeout(function () {
                                    bouncemarker.setAnimation(null);
                                }, 10000);

                                car_audio.muted = audioStatus;
                                console.log("This is audio status false");
                                document.getElementById('car_audio').play();

                            }
                        })

                    }


                } else {
                    console.log("duplicate");
                }
            }
        });

    });
}

