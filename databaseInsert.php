<?php
    $conn = mysqli_connect("127.0.0.1","somej","sns5sms!","test");

    $sql = "INSERT INTO test(id,name,bps,times)
            VALUE('somej','우정호',0.25,now())";

    $result = mysqli_query($conn,$sql);
    if($result == false){
        echo mysqli_error($conn);
        echo "<script>console.log('db접속에 실패하셨습니다.')</script>";
    }else{
        echo "<script>console.log('db접속에 성공하셨습니다.')</script>";
    }
    header('location:index.php');
?>