<?php 
    require('./engine.php');
    checkLogin();
    ConnectDB();

    $sql = 'SELECT * FROM stadium WHERE stadium_id = "'.$_GET['stadium_id'].'"';
    $rs = mysqli_query($conn,$sql);
    $_SESSION['stadium'] = mysqli_fetch_assoc($rs);

    if(isset($_POST['btn1'])){
        $day = date('Y-m-d', strtotime($_GET['day']));
        $dayx = date('Y-m-d', strtotime($day));

        echo "<script>
        window.location.href = 'madjam.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=".$_GET['time']."';
        </script>";

    }
    if(isset($_POST['btn2'])){
        echo "<script>
        window.location.href = 'stadium_detail.php?stadium_id=".$_GET['stadium_id']."';
        </script>";
    }
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
        <div class="col-12 mt-3 text-center row text-light">
            <h2 style="margin-bottom: 0.5cm">จองสนาม : <?php echo $_SESSION['stadium']['stadium_name'] ?></h2>
            <div class="col-6"><?php echo '<img src="./img/'.$_SESSION['stadium']['stadium_pic'].'" class="img-thumbnail">'; ?></div>
            <div class="col-6">
                <h4 style="text-align: left;">รายละเอียด :<p style="margin-left: 0.4cm"> <?php echo $_SESSION['stadium']['stadium_detail'] ?></p></h4>
                <h4 style="margin-top: 2cm; text-align: right;">ราคามัดจำ : <?php echo $_SESSION['stadium']['cost'] ?></h4>
            </div>
            <div class="col-4">
                <button name="btn2" style="margin: 0.5cm;" class="btn btn-warning">เลือกใหม่</button>
            </div>
            <div class="col-8">
                <button name="btn1" style="margin: 0.5cm;" class="btn btn-success" type="submit">ชำระเงิน</button>
            </div>
        </div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
