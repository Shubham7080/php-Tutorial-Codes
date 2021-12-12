<html>
<body>
    <form action="#" method="GET">
    UserName:<input type="text" name="user"><br>
    Password:<input type="password" name="pass">    
    <br><br>
        <button type="submit" name="submit">Submit</button>
    
    
    </form>
    
    
    </body>

</html>


<?php

if(isset($_GET["submit"])){
     $user = $_GET["user"];
    $pass = $_GET["pass"];
   $li = "<table><th>name</th><td>";
       echo $li ."$user"."</td>";
       
     
       echo $li ."$pass"."</td>";
       echo "$li"."</table>";
}
else{
    echo "error";
}



?>