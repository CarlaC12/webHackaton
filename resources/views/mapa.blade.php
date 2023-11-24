<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Maps JavaScript API</title>
    {{-- <link rel="stylesheet" href="asset{{('css.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #map {
            height: 100%;
            width: 50%;
            float: right;
        }

        #barras {
            float: left;
            width: 50%;
            height: 100vh;
        }

        #tab {
            float: left;
            width: 50%;
            height: 100vh;
            position: fixed;
            bottom: 0;
            left: 0;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Estilos para los círculos */
        .circle1 {
            width: 30px;
            height: 30px;
            background-color: #f03f0a;
            border-radius: 50%;
            display: inline-block;
        }

        .circle2 {
            width: 30px;
            height: 30px;
            background-color: #fce623;
            border-radius: 50%;
            display: inline-block;
        }
    </style>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
</head>

<body>


    <div id="barras">
        <div class="">
             <canvas id="chart-1" width="400" height="200"></canvas> 
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Riesgos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span id="circle1" class="circle1" onclick="miFuncion()"></span></td>
                        <td>Alto</td>

                    </tr>
                    <tr>
                        <td><span id="circle2" class="circle2" onclick="miFuncion2()"></span></td>
                        <td>Bajo</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div id ="map"> </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5ZElF3PG1e52lcJkI-CrZLQ9-k4bs98g&callback=initMap" async
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -17.780746023944754,
                    lng: -63.16678900657572
                },
                zoom: 13,
            });
        }

        function miFuncion() {

            for (var i = 0; i < locations.length; i++) {
                var location = locations[i];
                var marker = new google.maps.Marker({
                    position: {
                        lat: location.lat,
                        lng: location.lng
                    },
                    map: map,
                    title: location.title,
                    icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
                });
            }
        }
        document.getElementById('circle1').onclick = miFuncion;

        function miFuncion2() {
            for (var i = 0; i < locations2.length; i++) {
                var location2 = locations2[i];

                var marker = new google.maps.Marker({
                    position: {
                        lat: location2.lat,
                        lng: location2.lng
                    },
                    map: map,
                    title: location2.title,
                    icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
                });
            }
        }
        document.getElementById('circle2').onclick = miFuncion2;
        var locations = [{
                "lat": -17.77240929406341,
                "lng": -63.19579977893054,
                "title": "Acuario de Gijón"
            },
            {
                "lat": -17.8000,
                "lng": -63.1842,
                "title": "Plaza 24 de Septiembre"
            },
            {
                "lat": -17.7825,
                "lng": -63.1829,
                "title": "Catedral Basílica de San Lorenzo"
            },
            {
                "lat": -17.7672,
                "lng": -63.1895,
                "title": "Parque El Arenal"
            },
            {
                "lat": -17.7763,
                "lng": -63.1826,
                "title": "Parque Urbano"
            },
            {
                "lat": -17.7758,
                "lng": -63.1876,
                "title": "Zoológico Municipal Noel Kempff Mercado"
            },
            {
                "lat": -17.7526,
                "lng": -63.2107,
                "title": "Biocentro Güembé"
            },
            {
                "lat": -17.7837,
                "lng": -63.1981,
                "title": "Aeropuerto Internacional Viru Viru"
            },
            {
                "lat": -17.7989,
                "lng": -63.1731,
                "title": "MegaCenter"
            },
            {
                "lat": -17.7767,
                "lng": -63.1769,
                "title": "Universidad Autónoma Gabriel René Moreno"
            },
        ];
        var locations2 = [{
                "lat": -17.8200,
                "lng": -63.2050,
                "title": "Parque Zoológico"
            },
            {
                "lat": -17.7550,
                "lng": -63.2300,
                "title": "Jardín Botánico"
            },
            {
                "lat": -17.8100,
                "lng": -63.1800,
                "title": "Estadio Tahuichi Aguilera"
            },
            {
                "lat": -17.7450,
                "lng": -63.1950,
                "title": "Mirador Virgen de Luján"
            },
            {
                "lat": -17.7900,
                "lng": -63.1650,
                "title": "Parque Industrial"
            },
            {
                "lat": -17.8350,
                "lng": -63.1880,
                "title": "Centro Comercial Ventura Mall"
            },
            {
                "lat": -17.7700,
                "lng": -63.2200,
                "title": "Biblioteca Municipal"
            },
            {
                "lat": -17.8050,
                "lng": -63.1500,
                "title": "Centro de Convenciones Fexpocruz"
            },
            {
                "lat": -17.7600,
                "lng": -63.1750,
                "title": "Lago Los Volcanes"
            },
            {
                "lat": -17.8250,
                "lng": -63.1980,
                "title": "Club de Golf Urubo"
            }
        ];
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataStatic = {
                reparacionesMasSolicitadas: [{
                        id: 24,
                        nombre: "Acuario de Gijón",
                        cantidad: 9
                    },
                    {
                        id: 6,
                        nombre: "MegaCenter",
                        cantidad: 9
                    },
                    {
                        id: 10,
                        nombre: "UAGRM",
                        cantidad: 8
                    },
                    {
                        id: 30,
                        nombre: "AI Viru Viru",
                        cantidad: 8
                    },
                    {
                        id: 17,
                        nombre: "Parque Urbano",
                        cantidad: 7
                    },
                    {
                        id: 23,
                        nombre: "Parque Arenal",
                        cantidad: 7
                    }
                ]
            };

            const chart1 = document.getElementById('chart-1').getContext('2d');
            const colors1 = [
                'rgb(50, 224, 196, 0.9)',
                'rgb(13, 115, 119, 0.9)',
                'rgb(5, 191, 219, 0.9)',
                'rgb(82, 222, 151, 0.9)',
                'rgb(33, 33, 33, 0.9)',
                'rgb(0, 255, 198, 0.9)',
                'rgb(57, 74, 109, 0.9)',
                'rgb(57, 62, 70, 0.9)',
                'rgb(10, 77, 104, 0.9)',
                'rgb(36, 120, 129, 0.9)',
            ];

            new Chart(chart1, {
                type: 'bar',
                data: {
                    labels: dataStatic.reparacionesMasSolicitadas.slice(0, 6).map(service => service
                        .nombre),
                    datasets: [{
                        label: 'Cantidad de Asaltos',
                        data: dataStatic.reparacionesMasSolicitadas.slice(0, 6).map(service =>
                            service.cantidad),
                        borderWidth: 1,
                        backgroundColor: colors1,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>
