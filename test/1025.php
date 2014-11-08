
<!DOCTYPE html>
<html>
    <meta charset = "utf-8">
    
<body>
    <?php
         require '../utils/time.php';
        require '../utils/sql.php';
        /*
         get serializable time while commonly used formats
        */
      /* function getSerTime(){
           return date("Y-m-d h:i:sa");
       }
    */

    if($_FILES["upfile"]["name"] == NULL)
    {
        echo "no file";
        echo "<p>";
        echo "<a href = '\"1106.php\"'>return</a>"
    }else{
        echo "good";
    }

    echo getSerTime();
    echo '000';
    $db = new DBTools();
    echo '001';
    $result = $db.execQuery("select * from student");
    echo $result[0]['id'];
    echo '002';


    
    ?>
</body>
</html>