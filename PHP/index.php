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
    width: 40%;
}

#content-wrap {
    float: right;
    width: 60%;
}   

</style>


</head>

<body>

<div id="header"> <h1><center>Welcome to Safari Pokedex</center></h1></div>
<div id="main-wrap">
    <div id="sidebar">
<?php

$filename = "tmp.txt";
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
echo "<img src='cat.png' />";
}
elseif ($filetext=="2")
{
echo "<img src='dog.png' />";
}
elseif ($filetext=="3")
{
echo "<img src='tiger.png' />";
}
elseif ($filetext=="4")
{
echo "<img src='lion.png' />";
}
elseif ($filetext=="5")
{
echo "<img src='peacock.png' />";
}
else
{
	echo("<pre>We would be including the animal in our database</pre>");
}
?>

    </div>


    <div id="content-wrap">
<?php

$filename = "tmp.txt";
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

$filename1 = "Cat.txt";
$file1 = fopen( $filename1, "r" );
$filesize1 = filesize( $filename1 );
$filetext1 = fread( $file1, $filesize1 );

echo("<h1>CAT</h1>");
echo ( "<right>$filetext1</right>" );
}
elseif ($filetext=="2")
{
$filename1 = "Dog.txt";
$file1 = fopen( $filename1, "r" );
$filesize1 = filesize( $filename1 );
$filetext1 = fread( $file1, $filesize1 );
echo("<h1>Dog</h1>");
echo ( "<right>$filetext1</right>" );

}
elseif ($filetext=="3")
{
$filename1 = "Tiger.txt";
$file1 = fopen( $filename1, "r" );
$filesize1 = filesize( $filename1 );
$filetext1 = fread( $file1, $filesize1 );
echo("<h1>Tiger</h1>");
echo ( "<right>$filetext1</right>" );

}
elseif ($filetext=="4")
{
$filename1 = "Lion.txt";
$file1 = fopen( $filename1, "r" );
$filesize1 = filesize( $filename1 );
$filetext1 = fread( $file1, $filesize1 );
echo("<h1>Lion</h1>");
echo ( "<right>$filetext1</right>" );

}
elseif ($filetext=="5")
{
$filename1 = "Peacock.txt";
$file1 = fopen( $filename1, "r" );
$filesize1 = filesize( $filename1 );
$filetext1 = fread( $file1, $filesize1 );
echo("<h1>Peacock</h1>");
echo ( "<right>$filetext1</right>" );

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


