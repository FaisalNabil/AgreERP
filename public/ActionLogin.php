<?php session_start();
    $loginfailed = $phone = $emptyData = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        function getJSONFromDB($sql){

             include 'db.php';
             
            $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
            $arr=array();
            while($row = mysqli_fetch_assoc($result)) {
                $arr[]=$row;
            }
            return json_encode($arr);
        }

        $sql="select phone,password from farmer where phone = '".$phone."'";
        $jsonData= getJSONFromDB($sql);
        $json=json_decode($jsonData);
        if($jsonData=="[]"){
            $emptyData = "phone not found"; 
            //echo "not found";  
        }
        elseif($json[0]->password == $password){
            $_SESSION["farmerphone"] = $phone;
            header("Location: farmer_home.html");
        }
        else{
            $loginfailed = "Phone and password are not match";
        }    
        
    }
?>