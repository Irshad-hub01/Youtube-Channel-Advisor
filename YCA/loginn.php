<?php
$email =$_post['EMAIL'];
$password =$_post['PASSWORD'];

if(!empty($email)|| !empty($password)){
 $host="localhost";
 $dbusername ="root";
 $dbpassword="";
$dbname="mysql";

 $conn= new  mysql($host,$dbusername,$dbpassword,$dbname);

 if(mysqli_connect_error()){
     die('connect Error(' . mysqli_connect_errno().')'. mysqli_connect_error());

 }else{
       $SELECT ="SELECT EMAIL from REGISTER where EMAIL =? limit 1";
       $INSERT = "INSERT INTO LOGIN(EMAIL , PASSWORD) values(?,?)";

       $stmt =$conn->prepare($SELECT);
       $stmt->bind_param("s",$email);
       $stmt->execute();
       $stmt->bind_result($email);
       $stmt->store_result();
       $rnum = $stmt->num_rows;
       if($rnum==0){
           $stmt->close();

           $stmt=$conn->prepare($INSERT);
           $stmt->bind_param("ssssii",$email,$password);
           $stmt->execute();
           echo" loged in successfully";
       }else{
           echo " someone already regester using this email";
       }
       $stmt->close();
       $conn->close();
 }
}
 else{
     echo "all file are required";
     die();
 }

?>
