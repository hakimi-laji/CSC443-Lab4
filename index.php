<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Military Aircraft</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			* {
			box-sizing: border-box;
			}
			
			body {
			margin: 0;
			background-image: url("bg.jpg");
			background-size: cover;
			}
			
			.header {
			font-family: "Lucida Console", "Courier New", monospace;
			background-image: url("header.jpg");
			padding: 20px;
			color: red;
			text-align: center;
			}
			
			.column {
			float: left;
			width: 33.33%;
			padding: 15px;
			}
			
			.row:after {
			content: "";
			display: table;
			clear: both;
			}
			@media screen and (max-width:600px) {
			.column {
			width: 100%;
			}
			}
			
			.caption {
			font-weight: bold;
			font-style: italic;
			text-align: center;
			}
			
			table, th, td {
			border: 1px solid black;
			}
			
			table {
			width: 100%;
			}
			
			.footer {
			color: white;
			font-family: "Lucida Console", "Courier New", monospace;
			background-image: url("ft.jpg");
			background-size: cover;
			padding: 5px;
			text-align: center;
			}
			
		</style>
	</head>
	<body>
		
		<div class="header">
			<h1>Military Aircraft</h1>
			<p style="color:yellow">Hobbyist website for fans of multi-million weapons of war</p>
			<p style="color:yellow">"I feel the need… The need for speed!" -Maverick (Top Gun, 1986)</p>
		</div>
		
		<div class="row">
			<div class="column">
				<h2 style="text-align: center">Fighter</h2>
				
				<div class="caption">
					<img src="f22.jpg" alt="F22" width="400" height="300"><br>
					Lockheed Martin F-22 Raptor (USA)
				</div>
				
				<p>This class of aircraft specializes in air-to-air combat. Sporting unmatched speed and mobility, trained pilots can utilize them to engange in dogfights for air superiority over the battlefield.</p>
				
				<table>
					<tr>
						<th>Speed</th>
						<td>---------------------------------------------------------------------[]-</td>
					</tr>
					<tr>
						<th>Armor</th>
						<td>-----[]-----------------------------------------------------------------</td>
					</tr>
					<tr>
						<th>Firepower</th>
						<td>---------------------------------[]-------------------------------------</td>
					</tr>
				</table>
				
			</div>
			
			<div class="column">
				<h2 style="text-align: center">Attacker</h2>
				
				<div class="caption">
					<img src="su34.jpg" alt="SU34" width="400" height="300"><br>
					Sukhoi Su-34 (Russia)
				</div>
				
				<p>In contrast to fighters, this class specializes in air-to-ground combat. Most attackers are equipped with bombs and heavy armor to sustain enemy fire from the ground.</p>
				
				<table>
					<tr>
						<th>Speed</th>
						<td>---------------[]-------------------------------------------------------</td>
					</tr>
					<tr>
						<th>Armor</th>
						<td>-------------------------------------------------------------------[]---</td>
					</tr>
					<tr>
						<th>Firepower</th>
						<td>----------------------------------------------------------------[]------</td>
					</tr>
				</table>
				
			</div>
			
			<div class="column">
				<h2 style="text-align: center">Multirole</h2>
				
				<div class="caption">
					<img src="gripen.jpg" alt="Gripen" width="400" height="300"><br>
					Saab JAS 39 Gripen (Sweden)
				</div>
				
				<p>While this class may not feature the speed and tenacity of fighter or the armor and firepower of attacker, this class of aircraft nonetheless reign supreme in a battlefield with multiple objectives.</p>
				
				<table>
					<tr>
						<th>Speed</th>
						<td>-------------------------------------------[]---------------------------</td>
					</tr>
					<tr>
						<th>Armor</th>
						<td>-------------------------------------[]---------------------------------</td>
					</tr>
					<tr>
						<th>Firepower</th>
						<td>-----------------------------------[]-----------------------------------</td>
					</tr>
				</table>
				
			</div>
		</div>
		
		<h1 style="text-align:center">My personal favorite: Grumman F-14 Tomcat</h1>
		<div class="row">
			<div class="column">
				<div class="caption">
					<img src="f14-1.jpg" alt="1" width="400" height="300">
				</div>
				<p style="text-align:center">Over 30 years of service (1974-2006)</p>
			</div>
			<div class="column">
				<div class="caption">
					<img src="f14-2.jpg" alt="2" width="400" height="300">
				</div>
				<p style="text-align:center">Variable sweep wings offer high mobility and speed</p>
			</div>
			<div class="column">
				<div class="caption">
					<img src="f14-3.jpg" alt="3" width="400" height="300">
				</div>
				<p style="text-align:center">Top speed reaching 2,485 km/h, faster than F-22 (2,414 km/h)</p>
			</div>
		</div>
		
		<div class="footer">
			<h2>Thank you for visiting my website</h2>
			<p>Designed with love by: HAKIMI</p>
			<p><a href="https://www.facebook.com/hakimi.laji.98/">Facebook</a></p>
			<p><a href="https://github.com/hakimi-laji">GitHub</a></p>
			<p><a href="https://www.linkedin.com/in/hakimi-laji/">LinkedIn</a></p>
		</div>
		
	</body>
</html>
