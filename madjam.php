<?php 
    require('./engine.php');
    checkLogin();
    ConnectDB();

    $sql = 'SELECT * FROM stadium WHERE stadium_id = "'.$_GET['stadium_id'].'"';
    $rs = mysqli_query($conn,$sql);
    $_SESSION['stadium'] = mysqli_fetch_assoc($rs);

    
    $day = date('Y-m-d', strtotime($_GET['day']));
    $dayx = date('Y-m-d', strtotime($day));

    $sql = 'INSERT INTO booking (stadium_id,day,time,term,user_id,cost)
    VALUES ("'.$_GET['stadium_id'].'",
    "'.$dayx.'",
    "'.$choosetime2[$_GET['time']-1].'",
    "'.$_GET['time'].'",
    "'.$_SESSION['user']['user_id'].'",
    "'.$_SESSION['stadium']['cost'].'")';
    mysqli_query($GLOBALS['conn'],$sql);

    $sql = 'UPDATE `program` SET `'.$choosetime[$_GET['time']-1].'` = "จองแล้ว" 
                WHERE stadium_id ='.$_GET['stadium_id'].' AND day ="'.$dayx.'"';
                mysqli_query($GLOBALS['conn'],$sql);
            echo "<script>
                    setTimeout(function () {
                        alert('ชำระเงินเรียบร้อย!!');
                        window.location.href = 'index.php';
                    }, 3000);
                </script>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองสนาม</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<body>
<?php require('./nav.php')?>
<div class="row">
    <div class="col-sm-3">
        <?php require('./menu.php')?>
    </div>
    <div class="col-9 container mt-3 text-center row">
    <form method="post">
        <div class="col-12 mt-3 text-center row">
            <h3 style="margin-bottom: 0.5cm">จ่ายมัดจำ : <?php echo $_SESSION['stadium']['cost'] ?></h3>
            <div class="col-12"><img src="./img/qrcode.png" class="img-thumbnail w-25"></div>
            
            <div class="col-12">
            </div>
        </div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
