<?php
    $conn = mysqli_connect("127.0.0.1","somej","sns5sms!","test");
    
    $sql = "delete FROM test
            ORDER BY times DESC LIMIT 1";

    $result = mysqli_query($conn,$sql);
    if($result == false){
        error_log($conn);
    }else{
        echo "<script>
                    console.log('db에 접속하셨습니다.')
              </script>";
    }

    header("location:index.php");
?>