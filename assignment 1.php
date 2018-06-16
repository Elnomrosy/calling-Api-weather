<!DOCTYPE HTML>
<html>    
<head> 
	<meta charset="utf-8">
	<title>
		Weather App.
	</title>
	<style >
		body{
			width: 690 px;
			margin: 0 auto;
			background-image: url("images (2).jpg");
			background-repeat: no-repeat;
			background-size: cover;

		}
		.userform{
			padding-top: 50 px;
		}
		form{
			 margin: 0 auto;
 			 width: 400px;
 			 padding: 1em;
 			 border: 1px solid #CCC;
 			 border-radius: 1em;
		}
		#press{
			margin-left: 100px;

		}

		</style>
		</head>
		</body>

		<form class="userform" name="Weather form" action="assignment 1.php" method="GET">
			<h1>Your weather for today.</h1>
			City:<input type="text" name="city" placeholder="city" /><br/>
			
			<input type="submit" name="submit" value ="submit"  id="press" />

		</form>
		<br/>
		

<?php
// abdelrahman eid 201501540  ahmed nasr 20150043   g 1,2

		$user_city=$_GET['city'];
		
		$api_url="https://api.weatherbit.io/v2.0/current?city=".$user_city."&key=c0d79264443f40d199b5dd5c0079e561";
		$weather=file_get_contents($api_url);

		$json=json_decode($weather,true);
		
		$out=$json['data']['0']['country_code'];		
		$out2=$json['data']['0']['state_code'];
		$out3=$json['data']['0']['wind_spd'];		
		$out4=$json['data']['0']['wind_dir'];
		$out5=$json['data']['0']['app_temp'];
		echo "<table   width =600px height=400px align= center border=1px solid #CCC cellspacing=4 cellpading=2>
<tr> <td><font color=black>country_code IS</td> <td>$out</font></td></tr> 
<tr> <td><font color=black>state_code IS</td> <td>$out2</font></td></tr>
<tr> <td><font color=black>wind_spd IS</td> <td>$out3</font></td></tr>
<tr> <td><font color=black>wind_dir IS</td> <td>$out4</font></td></tr>
<tr> <td><font color=black>app_temp IS</td> <td>$out5</font></td></tr>
</table>";


?>