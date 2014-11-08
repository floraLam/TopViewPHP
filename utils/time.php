<?php
        /*
         get serializable time while commonly used formats
        */
       function getSerTime(){
           return date("Y-m-d h:i:sa");
       }
    
        function traInput($data){
        
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>