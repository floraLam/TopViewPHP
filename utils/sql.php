<?php
date_default_timezone_set('prc');
/**
 * @author NicoKam
 * @copyright 2014
 */


define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USER', 'root');
define('DB_PASS', '123');
define('DB_NAME', 'test');

class DBTools{  
    public static function execQuery($sql)
    {
        DBTools::savelog($sql);
       
        $res = array();
        $link = mysql_connect(DB_HOST . ':' . DB_PORT, DB_USER, DB_PASS);
        if ($link) {
            mysql_select_db(DB_NAME, $link);
         
            mysql_query("set names utf8;");
            //$sql = "select * from userinfo";
            $result = mysql_query($sql);
           //  echo json_encode($result);
            $i=0;
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                $res[$i]=$row;
                $i++;
               // echo json_encode($row);
            }
            //mysql_free_result($result);
            mysql_close($link);
        } else {
          echo "0";
            return null;
        }
        return $res;
    }
    
    public static function execNQuery($sql)
    {
       // DBTools::savelog($sql);
        $link = mysql_connect(DB_HOST . ':' . DB_PORT, DB_USER, DB_PASS);
        if ($link) {
            try{
                mysql_select_db(DB_NAME, $link);
                mysql_query("set names utf8;");
                //$sql = "select * from userinfo";
                $result = mysql_query($sql);
                $i=0;
                $res= mysql_insert_id($link);
                mysql_close($link);
            }catch(exception $e){
                return $e;
            }
        } else {
            return null;
        }
        return $res;
    }

    public static  function savelog($str){
        @ $james=fopen("log/log-".date('Y-m-d',time()).".txt","a");
        fwrite($james,date('Y-m-d H:i:s',time()) .': ' . $str ."\r\n");
        fclose($james);
    }
}


?>