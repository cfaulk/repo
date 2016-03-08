<?php
---CREATED BY Corey Faulkerson. Find me at dudermang.com ---*/
function checkserve() {
//set ip address of the developement server
$dserver = '192.168.0.20';
//set ip address of the production server
$pserver = '192.168.0.234';

if($_SERVER['SERVER_ADDR']==$dserver)
	{
		#this is the Developement server
		$serv= "Developement";
 	} 
else
{
if($_SERVER['SERVER_ADDR']==$pserver)
	{
		#this is the production server
		$serv="Production";
	}
}

//displays "Developement" or "Production" based on the servers IP address
echo $serv;
}

//to call this funtion just include the file in your code and call the function like seen below.
echo checkserve();














?>
