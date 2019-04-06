<html>
  <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
			<?php
				$usuario = getenv("ENV_USUARIO");
				$password = getenv("ENV_PASSWORD");
				$servidor = getenv("ENV_SERVIDOR");
				$basededatos = getenv("ENV_BASEDEDATOS");
				$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
				$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
				$consulta = "select descrip from tabla01 where cod = 'token01'";
				$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
				while ($columna = mysqli_fetch_array( $resultado ))
				{
					$decodificado = base64_decode($columna['descrip']);
					echo $decodificado;
				}
				mysqli_close( $conexion );
			?>
        ]);

        var options = {
          width: 720, height: 216,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 400px; height: 120px;"></div>
  </body>
</html>