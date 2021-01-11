<?php  
 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
 $query = "SELECT location, count(*) as number FROM muusika_andmed GROUP BY location";
 $result = mysqli_query($connect, $query);  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Muusika</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Location', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["location"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Elukoht',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
	               chart.draw(data, options);  
	          }  
	</script>
</head>
<body>
	<br>
	<br>
	<div style="width:900px;">
		<h1>Tere! Olen TAK-17 õpilane, Johan-Rasmus Teär, Kuressaare Ametikoolist. Korraldasin uuringu selleks, et teada saada paremini oma lähituttavate ja pereliikmete muusikamaitsest ja harjumistest muusika kuulamiseks.</h1>
		<h3 align="center">Vastajate elukoht</h3><br>
		<div id="piechart" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT age, count(*) as number FROM muusika_andmed GROUP BY age";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Vanus', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["age"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Vanus',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Vastajate vanus</h3><br>
		<div id="piechart2" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT gender, count(*) as number FROM muusika_andmed GROUP BY gender";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Sugu', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["gender"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Sugu',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Vastajate sugu</h3><br>
		<div id="piechart3" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT grade_estradio, count(*) as number FROM muusika_andmed GROUP BY grade_estradio";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['H', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["grade_estradio"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Eesti raadio hinne',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Eesti raadio hinne</h3><br>
		<div id="piechart4" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT play_intsrument, count(*) as number FROM muusika_andmed GROUP BY play_intsrument";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Pill', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["play_intsrument"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Kas mängib pilli?',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart5'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Kas mängib pilli?</h3><br>
		<div id="piechart5" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT intstrument, count(*) as number FROM pill GROUP BY intstrument";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Pill', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["intstrument"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Lemmikpillid',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart6'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Vastajate lemmikpillid</h3><br>
		<div id="piechart6" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT stiil, count(*) as number FROM stiil GROUP BY stiil";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Stiil', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["stiil"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Stiilid',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart7'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Vastajate lemmikstiil</h3><br>
		<div id="piechart7" style="width: 900px; height: 500px;"></div>
	</div><?php  
	 $connect = mysqli_connect("localhost", "root", "", "muusika_andmed");  
	 $query = "SELECT platvorm, count(*) as number FROM platvorm GROUP BY platvorm";
	 $result = mysqli_query($connect, $query);  
	 ?>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script> 
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript">
	</script> 
	<script type="text/javascript">
	 
	          google.charts.load('current', {'packages':['corechart']});  
	          google.charts.setOnLoadCallback(drawChart);  
	          function drawChart()  
	          {  
	               var data = google.visualization.arrayToDataTable([  
	                         ['Platvorm', 'Number'],  
	                         <?php  
	                         while($row = mysqli_fetch_array($result))  
	                         {  
	                              echo "['".$row["platvorm"]."', ".$row["number"]."],";  
	                         }  
	                         ?>  
	                    ]);  
	               var options = {  
	                     title: 'Platvorm',  
	                     //is3D:true,  
	                     pieHole: 0.4  
	                    };  
	               var chart = new google.visualization.PieChart(document.getElementById('piechart8'));  
	               chart.draw(data, options);  
	          }  
	</script><br>
	<br>
	<div style="width:900px;">
		<h3 align="center">Vastajate lemmik platvorm</h3><br>
		<div id="piechart8" style="width: 900px; height: 500px;"></div>
	</div>
</body>
</html>