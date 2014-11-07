<html>
<head>
<meta charset = "utf-8">    
</head>

<body>
    <form ENCTYPE = "multipart/form-data" ACTION = "1025.php" METHOD = "POST">
        <input type = "file" name = "upfile" />
        <p>
            <input type = "submit" value ="submit">
            <input type  = "reset" value ="reset">
        </p>
    </form>
<?php
    define("STANDERD_H","hello word");//define global value
    echo STANDERD_H;
    
    require '../utils/time.php';

    echo traInput(' 0 </> ');

    echo "</br>";
    echo ceil(5.5);
    echo "</br>";
    echo floor(5.5);
    echo "</br>";
    echo max(5.5,6,8);

    echo "</br>";
    echo rand(0,9);
    echo "</br>";
    echo rand(1000,9999);

     echo "</br>";
    $s = "hello word";
    echo substr($s,3,5);
/*
    Header("Content-type:image/png");
    $im = imagecreate(400,400);
    $black = imagecolorallocate($im,0,0,0);

    imagesetpixel($im,20,20,$black);
    imagesetpixel($im,21,21,$black);
    imagesetpixel($im,22,22,$black);
    imagesetpixel($im,23,22,$black);
    imagefilledrectangle($im,5,5,395,395,$black);

    ImagePNG($im);*/
  
    echo htmlspecialchars("</>");
    echo strtoupper("hello world");
    echo chop("1            2");
    echo "</br>";
    echo md5("hello world");
    echo "</br>";
    echo nl2br("\n");
    echo str_replace('a','b','abba');


     echo "</br>";
   /* $filename = "data.txt";
    if(file_exists($filename)){
        echo date("Y-m-d h:i:sa",filemtime($filename));
        
        $myfile = fopen($filename,"w");
        fwrite($myfile,"hello world");
        fgets($myfile,255);
        fclose($myfile);
        
    }*/
    $filename = "data.txt";
    if(file_exists($filename)){
        echo date("Y-m-d h:i:sa",filemtime($filename));
        
        $myfile = fopen($filename,"r");
        fwrite($myfile,"hello world");
        $myline = fgets($myfile,255);
        echo $myline;
        fclose($myfile);
        
    }


    $repeatArray = array(0,0,1,2,1,0,2);
    $norepeat = array_unique($repeatArray);
    for ($row = 0; $row < count($norepeat); $row++) {
        echo $norepeat[$row];
    }
    $cars  = array(
        0=>array(
            0,1,2
        ),1=>array(
            0,1,2
        ),2=>array(
            0,1,2
        ),3=>array(
            0,1,2
        )
    );
    sort($cars);
    
    for ($row = 0; $row < count($cars); $row++) {
		  echo "<p><b>Row number $row</b></p>";
		  echo "<ul>";
		  for ($col = 0; $col < count($cars[0]); $col++) {
		    echo "<li>".$cars[$row][$col]."</li>";
		  }
		  echo "</ul>";
		}
    

?>    
</body>
</html>