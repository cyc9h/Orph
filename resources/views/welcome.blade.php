@extends('layouts.master')

@section('map') 

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
            integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
            crossorigin=""/>
        
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
            integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
            crossorigin=""></script>
        
        <style>
            #mapid
            {
            width: 1349px;
            height: 385px;
            }
        </style>
    </head>
    
    <body>

        <div id="mapid"></div>
        
        <script>
            
            var mymap = L.map('mapid').setView([-0.947083,100.417183], 13);
            
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', 
            {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'sk.eyJ1Ijoibm92MTEiLCJhIjoiY2p5ZTRvcG5jMDIwYzNpb2p5ZXNuMmF3aCJ9.K3hgLb66VT4vhVnF0eF6DA'
            }).addTo(mymap);
            
            // var markersLayer = new L.LayerGroup();	//layer contain searched elements
            // mymap.addLayer(markersLayer);

            // var controlSearch = new L.Control.Search
            // ({
            //     layer: markersLayer, initial: false, position:'top'
            // });
            // mymap.addControl(controlSearch);
            
//            var searchControl = L.esri.Geocoding.geosearch().addTo(mmymap);
//            
//            var results = L.LayerGroup.addTo(mymap);
            
            var LeafIcon = L.Icon.extend({
                options: {
                    iconSize:     [30,50],
                    iconAnchor:   [22, 94],
                    popupAnchor:  [-3, -76]
                }
            });
            
            var blueIcon = new LeafIcon({iconUrl: 'image/marker.png'}),
                pinkIcon = new LeafIcon({iconUrl: 'image/marker2.png'})
            
//            L.marker([-0.947083,100.417183], {icon: blueIcon}).addTo(mymap).bindPopup("I am a green leaf.");
//            //L.marker([-0.947083,100.417183], {icon: pinkIcon}).addTo(mymap).bindPopup("I am a red leaf.");
            <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "orph";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT * from panti";
                $result = $conn->query($sql);

//                $data = array();
//                echo " var latlong = [ " ;
//
//                for ($x = 0; $x < $result->num_rows; $x++) 
//                {
//                    $data[] = $result->fetch_assoc();
//                    echo " [ " , $data[$x]['long_'], " , " , $data[$x]['lat_'], " ] " ;
//
//                    if ($x <= ($result->num_rows - 2)) 
//                    {
//                    echo " , " ;
//                    }
//                }
//                echo " ]; " ;
            
                $data = '';
                
                while($row = $result->fetch_assoc())
                {
                    $data .= 'L.marker(['.$row['lat_'].', '.$row['long_'].'],{icon: blueIcon}).addTo(mymap)
                   .bindPopup("<b>Panti Asuhan</b></br><b>'.$row['nama'].'</b></br>'.$row['alamat'].'</b><br><a href=addpanti type=submit class=buttondetail>Lihat Detail</a><br/>");';
                }
            
                echo $data;

            ?>

            //$data .= 'L.marker(['.$row['lat_'].', '.$row['long_'].'],{icon: blueIcon}).addTo(mymap)
             //       .bindPopup("<b>Panti Asuhan</b></br><b>'.$row['nama'].'</b></br>'.$row['alamat'].'</b><br><a href=addpanti type=submit class=buttondetail>Lihat Detail</a><br/>");';

            //var popup = L.popup();
            
            
//            for ( var i = 0; i < latlong.length; i ++) 
//            {
//                marker = new L.marker([latlong[i][1],latlong[i][1]]).addTo(mymap);
//                //marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
//            }
            
//            var popup = L.popup()
//                .setLatLng([-0.947083,100.417183])
//                .setContent("I am a standalone popup.")
//                .openOn(mymap);
//            
//            var geojsonFeature = {
//                "type": "Feature",
//                "properties": {
//                    "name": "Coors Field",
//                    "amenity": "Baseball Stadium",
//                    "popupContent": "This is where the Rockies play!"
//                },
//                "geometry": {
//                    "type": "Point",
//                    "coordinates": [-0.947083,100.417183]
//                }
//            };
//            
//            L.geoJSON(geojsonFeature).addTo(mymap);
            
            
            
        </script>

        

    </body>
</html>

@endsection