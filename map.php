<html>
<head>
<title>Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css">
    <link rel="stylesheet" href="css/main.css">
<style>
#map { height: 500px; }
</style>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>
</head>
<body>
<div class="container">
 <div id="map"></div>
<a href="index.php" class='py-5'>Go to home</a>
</div>


<script>
    var map = L.map('map',{scrollWheelZoom:false}).setView([13.00,80.30], 15);

    const basemaps = {
  StreetView: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',   {attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}),
  Topography: L.tileLayer.wms('http://ows.mundialis.de/services/service?',   {layers: 'TOPO-WMS'}),
  Places: L.tileLayer.wms('http://ows.mundialis.de/services/service?', {layers: 'OSM-Overlay-WMS'})
};

L.control.layers(basemaps).addTo(map);

basemaps.StreetView.addTo(map);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([13.0105, 80.2206]).addTo(map)
    .bindPopup('Deluxe Residence <br> 63, Anna Salai, Little Mount, Guindy, Chennai, Tamil Nadu 600032')
    .openPopup();
    L.marker([13.0629, 80.2617]).addTo(map)
    .bindPopup('Double Doors <br>  37, Uthamar Gandhi Rd, Tirumurthy Nagar, Nungambakkam, Chennai, Tamil Nadu 600034')
    .openPopup();
    L.marker([13.0404 , 80.2438]).addTo(map)
    .bindPopup('Single Symphony <br> 115, Sir Thyagaraya Rd, Parthasarathi Puram, T. Nagar, Chennai, Tamil Nadu 600017 ')
    .openPopup();
</script>

</body>
</html>