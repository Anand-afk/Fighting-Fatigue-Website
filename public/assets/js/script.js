// created array and variables to be used in the below function to display the initial map
var carMarkerArray = [];
var initLatitude;
var initLongitude;

// created a new context variable to load the audio in the website, as the audio does not work by default according to the new policies.
var context = new (window.AudioContext || window.webkitAudioContext)();

// function that plot the latitude and longitude on the map and returns it
const createMap = ({lat, lng}) => {
    return new google.maps.Map(document.getElementById('map'), {
        center: {lat, lng},
        zoom: 15
    });
};

// function that runs when windows first load, this is for the map before start driving.
window.onload = function () {
    // get current position from the next function
    navigator.geolocation.getCurrentPosition(plotPosition);
    // calling the getUserLocation that is defined below in the code
    getUserLocation();
    // storing the lat and long into the variables that were defined at the start.
    navigator.geolocation.getCurrentPosition(function (position) {
        initLatitude = position.coords.latitude;
        initLongitude = position.coords.longitude;
    });
}

// getiing current location with no illustrations on the map, this is used for initally loading the map before start driving
function plotPosition(position) {
    const initialPosition = {lat: position.coords.latitude, lng: position.coords.longitude};
    const map = createMap(initialPosition);
    // removing all the illustrations on the map
    var noPoi = [
        {
            featureType: "poi",
            stylers: [
                {visibility: "off"}
            ]
        }
    ];
    map.setOptions({styles: noPoi});
}

// creating the car marker.
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
    // plotting the marker on the map and returning the map
    return new google.maps.Marker({map, position, icon: icon});
};

// tracking the location of the driver
const trackLocation = ({
                           // defining what to do when success and when error.
                           onSuccess, onError = () => {
    }
                       }) => {
    // if no response returned
    if ('geolocation' in navigator === false) {
        return onError(new Error('Geolocation is not supported by your browser.'));
    }
    // if response returned
    return navigator.geolocation.watchPosition(onSuccess, onError, {
        maximumAge: 60000,
        timeout: 60000,
        enableHighAccuracy: true
    })
};

//different error messages according to the code generated 1,2 or 3 respectively.
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

// function to calculate the distance between two latitudes and longitudes
function distance(lat1, lon1, lat2, lon2, unit) {
    // checking if the latitude 1 and latitude 1 are equal or not not , and similarly for longitude
    if ((lat1 == lat2) && (lon1 == lon2)) {
        // if true return nothing
        return 0;
        // else do following
    } else {
        // converting to radians
        var radlat1 = Math.PI * lat1 / 180;
        var radlat2 = Math.PI * lat2 / 180;
        var theta = parseFloat(lon1) - parseFloat(lon2);
        var radtheta = Math.PI * theta / 180;
        // using haversine formula to calculate the distance.
        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        if (dist > 1) {
            dist = 1;
        }
        dist = Math.acos(dist);
        dist = dist * 180 / Math.PI;
        dist = dist * 60 * 1.1515;
        // calulate in kilometer
        if (unit == "K") {
            dist = dist * 1.609344
        }
        // return distance
        return dist;
    }
}


// dynamically changing the mute button to unmute
function mute() {
    text = document.getElementById("mutetext");
    if (text.innerText === "Turn off alerts") {
        text.innerText = "Turn on alerts";
    } else text.innerText = "Turn off alerts";
}

// on clicking the start driving button
function startdriving() {
    // getting element by id to check if button clicked or not
    var elem = document.getElementById("startdrive");
    // changing the color of button
    elem.setAttribute("class", "btn btn-primary btn-block btn-danger");
    // checking if button clicked or not
    if (elem.textContent == "Start Driving") {
        elem.textContent = "Stop Driving";
        // init(false);
        var twohours = 0,
            //starting the timer
            display = document.querySelector('#time');
        // callling the start timer function
        startTimer(twohours, display);

        // creating the dictionary
        const initialPosition = {lat: initLatitude, lng: initLongitude};
        //console.log(initialPosition);

        //creating the map with the new fetched location of the driver
        const map = createMap(initialPosition);
        // setting the zoom in and zoom out limit to the map
        map.setOptions({minZoom: 8, maxZoom: 15});
        // setting the traffic layer, to show the road closures on the map
        var trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);
        // marker for accident cluster
        var image = {
            url: "car_crash.png", // url
            scaledSize: new google.maps.Size(50, 35), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        // running the for loop through the list of lat long of accident clusters coming from the database
        highSeverity.forEach(element => {
            //plotting the lat longs on the map one by one
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(element.Latitude, element.Longitude),
                map: map,
                icon: image,
                optimized: false
            });
            //setting the legends, so that when clicking on the cluster it will show the infowindow with
            // description respective to the severity level.
            if (severity == "high") {
                var content = "High Severity: There are more than 10 accidents in this cluster. Be careful !!! High risk area ";
                // when severity is medium
            } else if (severity == "medium") {
                var content = "Medium Severity: There are more than 5 accidents in this cluster. Chances of accident is moderate !!!";
            }
            //when severity is least
            else if (severity == "low") {
                var content = "Least Severity: There are more than 3 accidents in this cluster. Chances of accident is less !!!";
            }

            //info window
            var infowindow = new google.maps.InfoWindow();

            // on clicking the marker it will show the info window.
            google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                return function () {
                    infowindow.setContent(content);
                    infowindow.open(map, marker);
                };
            })(marker, content, infowindow));
        })

        // variables for save previous lat and long
        var oldlat = "";
        var oldlng = "";

        // plotting the car marker
        const carMarker = createMarker(
            {
                map,
                position: initialPosition
            });
        // pushing the car marker to the array
        carMarkerArray.push(carMarker);
        getUserLocation();
        // calling the track location function defined above
        let watchId = trackLocation({
            // when received the lat long
            onSuccess: ({coords: {latitude: lat, longitude: lng}}) => {
                // checking if the previous lat and long is same as the new one.
                if (oldlat != lat.toFixed(3) && oldlng != lng.toFixed(3)) {
                    //saving the lat and long
                    oldlat = lat.toFixed(3);
                    oldlng = lng.toFixed(3);
                    //paning to the current location of the user
                    map.panTo({lat, lng});
                    //setting car marker at that location
                    carMarker.setPosition({lat, lng});

                    //runnning another loop to compare the drivers current location with the accident cluster coordinates every time the driver moves
                    highSeverity.forEach(eachSeverity => {
                        // saving the accident lattitude and longitude
                        acclat = eachSeverity.Latitude;
                        acclng = eachSeverity.Longitude;
                        //calling the distance function to calculate the distance
                        x = distance(acclat, acclng, lat, lng, 'K');
                        remember = document.getElementById("check")
                        // if button is set to stop driving then going inside
                        if (remember.checked === true && elem.textContent == "Stop Driving") {
                            // checking if the driver is within the 300 m radius of the cluster
                            if (x < 0.3) {
                                //bouncing the marker to indicate the alert visually
                                const bouncemarker = new google.maps.Marker({
                                    position: new google.maps.LatLng(acclat, acclng),
                                    map: map,
                                    icon: image,
                                    animation: google.maps.Animation.BOUNCE
                                });
                                // setting time interval for the bouncing car marker
                                setTimeout(function () {
                                    bouncemarker.setAnimation(null);
                                }, 10000);
                                // setting the status of audio on the website to false, as originally when created I had muted it
                                document.getElementById('car_audio').muted = false;
                                // playing the audio
                                document.getElementById('car_audio').play();
                            }
                        }
                    })

                } else {
                    // if the coordinates are repeated, print duplicate on the console.
                    console.log("duplicate");
                }
            }
        });
    } else {
        // if the button is pressed again, changing the button and color of the button back to original
        elem.textContent = "Start Driving";
        elem.setAttribute("class", "btn btn-primary btn-block btn-success");
        // stopping the timer
        stopTimer();
        navigator.geolocation.getCurrentPosition(plotPosition);
    }
}
// snooze button on the modal.
function snooze() {
    // changing the text on the button to stop driving
    var elem = document.getElementById("startdrive");
    elem.setAttribute("class", "btn btn-primary btn-block btn-danger");
    if (elem.textContent == "Start Driving") elem.textContent = "Stop Driving";
    // showing the modal again when the driver snoozes the reminder
    snoozetimer = setTimeout(function () {
        $('#timermodal').modal('show');
        //have set to 5 seconds for testing purpose
    }, 5000);
    // clearing the interval and resetting
    document.getElementById("break").onclick = function () {
        clearInterval(snoozetimer);
    }
}
// start timer function
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    //set interval function
    interval = setInterval(function () {
        // hours. minutes and seconds and converting to respective units
        hours = parseInt((timer / 3600) % 24, 10);
        minutes = parseInt((timer / 60) % 60, 10);
        seconds = parseInt(timer % 60, 10);

        // setting the hours mins and seconds
        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        // displaying the timer on the screen
        display.textContent = hours + ":" + minutes + ":" + seconds;

        // setting the timer and giving the value of 2 hours
        if (++timer > 7200) {
            $("#timermodal").modal();
            timer = duration;
            // changing the button color and text
            var elem = document.getElementById("startdrive");
            elem.setAttribute("class", "btn btn-primary btn-block btn-success");
            if (elem.textContent == "Stop Driving") {
                elem.textContent = "Start Driving";
            }
            stopTimer();
            // removing the old car marker
            carMarkerArray.forEach(removeMarker);
        }
    }, 10);
}

// removing the marker
function removeMarker(item, index) {
    item.setMap(null);
}

// stopping the timer
function stopTimer() {
    display = document.querySelector('#time');
    clearInterval(interval);
    hours = "00";
    minutes = "00";
    seconds = "00";
    // resetting the timer
    display.textContent = hours + ":" + minutes + ":" + seconds;
}

function init(audioStatus) {

}

// getting the users location
function getUserLocation() {
    // if the location received
    function locationSuccess(position) {
        var coords = position.coords;
        generateURL(coords);
    }
    // if not receiving the location
    function locationError() {
        console.log("error")
    }

    navigator.geolocation.getCurrentPosition(locationSuccess, locationError);
}

// generating dynamic url for cafe and parking lots to be displayed on the modal
function generateURL(coords) {
    //setting the urls
    var cafeURL = 'https://www.google.com/maps/search/cafe/@' + coords.latitude + ',' + coords.longitude + ",14z";
    var parkingURL = 'https://www.google.com/maps/search/parking+lots/@' + coords.latitude + ',' + coords.longitude + ",14z";
    var x = document.getElementById('parkinglink');
    var a = document.getElementById('cafelink'); //or grab it by tagname etc
    // changing the url to the link on the modal
    a.href = cafeURL;
    x.href = parkingURL;
    var y = document.getElementById('parkinglinkTakeABreak');
    var b = document.getElementById('cafelinkTakeABreak'); //or grab it by tagname etc
    // changing the url to the link on the modal
    b.href = cafeURL;
    y.href = parkingURL;
}

// when the driver decides to take the break manually, the reminder of the snooze will disappear.
function takingBreak() {
    $('#basicExampleModal').modal('hide')
}



