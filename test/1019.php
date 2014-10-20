<!DOCTYPE html>
<html>
    <meta charset = "utf-8">
<body>
    
   <?php
    require '../utils/time.php';
    echo "今天是 " . getSerTime() . "<br>";
   
    ?>
    <?php
        function SQL(){
            $server = 'localhost:3306';
            $user   = 'root';
            $pwd    = '123';
            $link = mysql_connect ( $server, $user, $pwd );

                if ($link) {
                    mysql_select_db ( 'test', $link );
                    mysql_query("set names utf8;");
                    $sql = "select * from student";
                    $result = mysql_query ( $sql );
                    $array = array();
                    $i = 0;
                    $row = mysql_fetch_array ( $result, MYSQL_BOTH );
                    echo count($row[0]['id']);
                    while ( $row = mysql_fetch_array ( $result, MYSQL_BOTH ) ) {	
                         $array[i]['id'];
                         $array[i]['name'];
                         $array[i]['age'];
                        /* echo $row['id'];
					     echo $row['name'];
                         echo $row['age'];*/
				
                }
              
                     mysql_free_result ( $result );
                    return $array;
                } else {
                    return "数据库连接KO";
                }
           
        }
    ?>
    <?php
        
       echo SQL();
       /* $server = 'localhost:3306';
        $user   = 'root';
        $pwd    = '123';
        $link = mysql_connect ( $server, $user, $pwd );
      
            if ($link) {
                mysql_select_db ( 'test', $link );
                mysql_query("set names utf8;");
                $sql = "select * from student";
                $result = mysql_query ( $sql );*/
              /*  echo "<table>";
                while ( $row = mysql_fetch_array ( $result, MYSQL_BOTH ) ) {					
					echo "<tr>";
					echo "";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["age"] . "</td>";

						
					echo "<td>";
					
					echo "</tr>";
                }
                echo "</table>";
                mysql_free_result ( $result );
            } else {
                echo "数据库连接KO";
            }*/
	
	?>
</body>
</html>