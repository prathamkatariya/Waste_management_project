<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <title>Track Kachra Gadi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #map {
            margin: 60px 60px 60px 60px;
            width: 1250px;
            height: 500px;
            border: 2px black solid;
        }
    </style>
</head>

<body>
    <button onclick="getLocation()"> Click Here </button>
        <p id="demo"></p>
        <p id="demo1"></p>
    <script>
        var x = document.getElementById("demo");
        
        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition)
            }else{
                x.innerHTML = "Geolocation not supported";
            }
        }

        function showPosition(position){
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            var coords = new google.maps.LatLng(latitude,longitude);
            var mapoptions = {
                zoom: 13,
                center:coords,
                mapTypeId: google.maps.mapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById("map"), mapoptions);
            var marker = new google.maps.Marker({map:map,position:coords});
            document.getElementById("demo").innerHTML = latitude;
            document.getElementById("demo1").innerHTML = longitude;
            showposition.call(displayMap);
        }
    </script>


    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58614.764622734365!2d75.00742639561193!3d23.336692507359828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963fea373229b5b%3A0xcb0c22405de45a70!2sRatlam%2C%20Madhya%20Pradesh%20457001!5e0!3m2!1sen!2sin!4v1628870051673!5m2!1sen!2sin" width="1330px" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    -->

    <div id="map">
    </div>
    <p id='demo'> </p>
    

    <script>
        function displayMap(){
        var map = L.map('map').setView([latitude, longitude], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">Track Kachra Gadi</a> contributors'
        }).addTo(map);

        L.marker([latitude,  longitude]).addTo(map)
            .bindPopup('Exact Location Of Kachra Gadi')
            .openPopup();
    }
    </script>
</body>

</html>