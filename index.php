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
    $query2 = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <scrip src="http://code.jquery.com/jquery-latest.min.js"></scrip>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <title>chart</title>
</head>
<body>
    <div id="dataView" class="container">
        <table>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>아이디</th>
                    <th>이름</th>
                    <th>시간</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once("databaseSelect.php");
                ?>
            </tbody>
        </table>
        <button type="button" onclick="Click()">db생성</button>
        <button type="button" onclick="Delete()">db삭제</button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <canvas id="myChartOne"></canvas>
            </div>
        </div>
    </div>
    <script>
    
    function Click(){
        location.href="databaseInsert.php";
    }
    function Delete(){
        location.href="databaseDelete.php";
    }

    var mychart = document.getElementById('myChartOne').getContext('2d');
    var chart01 = new Chart(mychart,{
        type : 'bar',//pie, line, doughnut, polarArea 어떤 형식으로 할건지
            data : {//타입에 들어갈 데이터 설정
                labels:['학원','연구원', '출판사', '미디어사', '위니브'],//밑에 표시되는 것
                datasets :[{//밑에 표시되는 것에 대한 데이터
                    label:"바울랩 매출액",//상단에 표시
                    data : [//해당 라벨에 들어갈 데이터 숫자들
                       10,
                       100,
                       100,
                       200,
                       1000
                ]
            }]
        }
    });
    </script>
</body>
</html>
