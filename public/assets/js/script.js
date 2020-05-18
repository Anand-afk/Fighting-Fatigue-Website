var carMarkerArray = [];
var initLatitude;
var initLongitude;

// const audioContainer = document.getElementById("audioContainer");
var context = new (window.AudioContext || window.webkitAudioContext)();
//confirm("Click Anywhere on the Map to start tracking");

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 34.04924594193164, lng: -118.24104309082031}
    });
}

const createMap = ({lat, lng}) => {
    return new google.maps.Map(document.getElementById('map'), {
        center: {lat, lng},
        zoom: 15
    });
};

window.onload = function () {
    navigator.geolocation.getCurrentPosition(plotPosition);
    getUserLocation();
    navigator.geolocation.getCurrentPosition(function (position) {
        initLatitude = position.coords.latitude;
        initLongitude = position.coords.longitude;
    });
}

function plotPosition(position) {
    const initialPosition = {lat: position.coords.latitude, lng: position.coords.longitude};
    const map = createMap(initialPosition);
    var noPoi = [
        {
            featureType: "poi",
            stylers: [
                { visibility: "off" }
            ]
        }
    ];
    map.setOptions({styles: noPoi});
}

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



function mute() {
    text = document.getElementById("mutetext");
    if (text.innerText === "Turn off alerts") {
        text.innerText = "Turn on alerts";
    } else text.innerText = "Turn off alerts";
}

function startdriving() {
    var elem = document.getElementById("startdrive");
    elem.setAttribute("class", "btn btn-primary btn-block btn-danger");
    if (elem.textContent == "Start Driving") {
        elem.textContent = "Stop Driving";
        // init(false);
        var twohours = 0,
            display = document.querySelector('#time');
        startTimer(twohours, display);

        const initialPosition  = {lat: initLatitude, lng: initLongitude};
        console.log(initialPosition);
        const map = createMap(initialPosition);
        map.setOptions({ minZoom: 8, maxZoom: 15     });
        var trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);
        var image = {
            url: "car_crash.png", // url
            scaledSize: new google.maps.Size(50, 35), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        var image1 = {
            url: "banner.png", // url
            scaledSize: new google.maps.Size(100, 100), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        highSeverity.forEach(element => {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(element.Latitude, element.Longitude),
                map: map,
                icon: image,
                optimized: false
            });

            if (severity == "high") {
                var content = "High Severity: There are more than 10 accidents in this cluster. Be careful !!! High risk area ";

            } else if (severity == "medium") {
                var content = "Medium Severity: There are more than 5 accidents in this cluster. Chances of accident is moderate !!!";
            } else if (severity == "least") {
                var content = "Least Severity: There are more than 3 accidents in this cluster. Chances of accident is less !!!";
            }

            var infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                return function () {
                    infowindow.setContent(content);
                    infowindow.open(map, marker);
                };
            })(marker, content, infowindow));
        })

        var oldlat = "";
        var oldlng = "";

        document.addEventListener('click', function () {

            const carMarker = createMarker(
                {
                    map,
                    position: initialPosition
                });
            carMarkerArray.push(carMarker);
            getUserLocation();
            let watchId = trackLocation({
                onSuccess: ({coords: {latitude: lat, longitude: lng}}) => {
                    if (oldlat != lat.toFixed(3) && oldlng != lng.toFixed(3)) {
                        oldlat = lat.toFixed(3);
                        oldlng = lng.toFixed(3);
                        map.panTo({lat, lng});
                        carMarker.setPosition({lat, lng});

                        highSeverity.forEach(eachSeverity => {
                            acclat = eachSeverity.Latitude;
                            acclng = eachSeverity.Longitude;

                            x = distance(acclat, acclng, lat, lng, 'K');
                            remember = document.getElementById("check")
                            if (remember.checked === true && elem.textContent == "Stop Driving") {
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

                                    document.getElementById('car_audio').muted = false;
                                    document.getElementById('car_audio').play();
                                }
                            }
                        })

                    } else {
                        console.log("duplicate");
                    }
                }
            });

        });
    } else {
        elem.textContent = "Start Driving";
        elem.setAttribute("class", "btn btn-primary btn-block btn-success");
        stopTimer();
        navigator.geolocation.getCurrentPosition(plotPosition);
    }
}

function snooze() {
    var elem = document.getElementById("startdrive");
    elem.setAttribute("class", "btn btn-primary btn-block btn-danger");
    if (elem.textContent == "Start Driving") elem.textContent = "Stop Driving";
    snoozetimer = setTimeout(function () {
        $('#timermodal').modal('show');
    }, 5000);
    document.getElementById("break").onclick = function () {
        clearInterval(snoozetimer);
    }
        }
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    interval = setInterval(function () {
        hours = parseInt((timer / 3600) % 24, 10);
        minutes = parseInt((timer / 60) % 60, 10);
        seconds = parseInt(timer % 60, 10);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = hours + ":" + minutes + ":" + seconds;

        if (++timer > 7200) {
            $("#timermodal").modal();
            timer = duration;
            var elem = document.getElementById("startdrive");
            elem.setAttribute("class", "btn btn-primary btn-block btn-success");
            if (elem.textContent == "Stop Driving") {
                elem.textContent = "Start Driving";
            }
            stopTimer();
            carMarkerArray.forEach(removeMarker);
        }
    }, 10);
}

function removeMarker(item, index) {
    item.setMap(null);
}
function stopTimer() {
    display = document.querySelector('#time');
    clearInterval(interval);
    hours = "00";
    minutes = "00";
    seconds = "00";

    display.textContent = hours + ":" + minutes + ":" + seconds;
}

function init(audioStatus) {

}

function getUserLocation() {
    function locationSuccess(position) {
        var coords = position.coords;
        generateURL(coords);
    }
    function locationError() {
        console.log("error")
    }
    navigator.geolocation.getCurrentPosition(locationSuccess, locationError);
}

function generateURL(coords) {
    var cafeURL = 'https://www.google.com/maps/search/cafe/@' + coords.latitude + ',' + coords.longitude + ",14z";
    var parkingURL = 'https://www.google.com/maps/search/parking+lots/@' + coords.latitude + ',' + coords.longitude + ",14z";
    var x = document.getElementById('parkinglink');
    var a = document.getElementById('cafelink'); //or grab it by tagname etc
    a.href = cafeURL;
    x.href = parkingURL;
    var y = document.getElementById('parkinglinkTakeABreak');
    var b = document.getElementById('cafelinkTakeABreak'); //or grab it by tagname etc
    b.href = cafeURL;
    y.href = parkingURL;
}


function takingBreak() {
    $('#basicExampleModal').modal('hide')
}



