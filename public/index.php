<?php
 
if($_POST){
$wheretheiss = file_get_contents('https://api.wheretheiss.at/v1/satellites/25544');
$obj = json_decode($wheretheiss);

$latitude = $obj->latitude;
$longitude = $obj->longitude;

$get_map_details = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=UseAPIKey");
//echo $get_map_details;
$location_data = json_decode($get_map_details, true);


$formatted_address = isset($location_data['results'][0]['formatted_address']) ? $location_data['results'][0]['formatted_address'] : "";

echo "Latitude: ".$latitude.'<br /><br />';
echo "Longitude: ".$longitude.'<br /><br />';
echo "Currently ISS is over ".$formatted_address;
}

?>


<html>
	<head>
		<style>
			table{
			  font-family: Calibri; 
			  color:white; 
			  font-size: 11pt; 
			  font-style: normal;
			  font-weight: bold;
			  text-align:; 
			  background-color: lightskyblue; 
			  border-collapse: collapse; 
			  border: 2px solid navy;
			  margin-top:100px
			}
			table.inner{
			  border: 0px
			}
		</style>
	</head>
	 
	<body>
		<form action="" method="post">
		<table align="center" cellpadding = "10">
			<input type='hidden' name='address' placeholder='Enter any address here' />
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Please click to check Current Location Of ISS">
				</td>
			</tr>
		</table>
		 
		</form>
		 
	</body>
</html>

