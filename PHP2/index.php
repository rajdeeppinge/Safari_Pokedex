<html>
<head>
<title>SAFARI POKEDEX</title>      
<meta http-equiv="refresh" content="15" />

<style type="text/css">	
/* sizes */
#main-wrap > div { min-height: 450px; }


#header,
#footer {
    min-height: 40px;
}

/* layout */
#main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
}

#sidebar {
    float: left;
    width: 10%;
}

#content-wrap {
    float: right;
    width: 90%;
}   

</style>


</head>

<body>

<div id="header"> <h1><center>Welcome to Safari Pokedex</center></h1></div>
<div id="main-wrap">
  


    <div id="content-wrap">
<?php

$filename = "/home/pi/Desktop/baby_cry_detection-master/output/prediction/prediction.txt";
$file = fopen( $filename, "r" );

if( $file == false ) {
	echo("PLEASE WAIT ANALYSING FILE");
	sleep(5);
	exit();
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );


if($filetext=="1")
{
echo("<h1>CAT</h1>");
echo "<img src='fullcat.png' />";
}
elseif ($filetext=="2")
{

echo("<h1>Dog</h1>");
echo "<img src='fulldog.png' />";
}
elseif ($filetext=="3")
{

echo("<h1>Pig</h1>");
echo "<img src='fullpig.png' />";
}
elseif ($filetext=="4")
{

echo("<h1>Cow</h1>");
echo "<img src='fullcow.png' />";

}
elseif ($filetext=="5")
{
echo("<h1>Frog</h1>");
echo "<img src='fullfrog.png' />";

}
elseif ($filetext=="6")
{
echo("<h1>Hen</h1>");
echo "<img src='hen.png' />";

}
else
{

	echo("<pre>We would be including the animal in our database</pre>");
}



?>

</div>


</div>
<div id="footer"><center>Copyrights @ 2016 Safari Pokedex</center></div>

</body>


</html>


