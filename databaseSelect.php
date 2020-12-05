<?php
    $conn = mysqli_connect("127.0.0.1","somej","sns5sms!","test");
    
    $sql = "SELECT * FROM test";

    $result = mysqli_query($conn,$sql);
    if($result == false){
        error_log($conn);
    }else{
        echo "<script>
                    console.log('db에 접속하셨습니다.')
              </script>";
    }
    
    while($query = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$query['id']."</td>",
             "<td>".$query['name']."</td>",
             "<td>".$query['bps']."</td>",
             "<td>".$query['times']."</td>";
        echo "</tr>";
        echo "<script>console.log('".$query[3]."')</script>";
    }
    
?>