<?php 
    require('./engine.php');
    ConnectDB();

    $sql = 'SELECT * FROM stadium WHERE stadium_id = "'.$_GET['stadium_id'].'"';
    $rs = mysqli_query($conn,$sql);
    $_SESSION['stadium'] = mysqli_fetch_assoc($rs);
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
        <div class="col-12 mt-3 text-center row">
            <h3>จองสนาม : <?php echo $_SESSION['stadium']['stadium_name'] ?></h3>
            <table class="table table-bordered border-primary text-center" style="height: 60vh;">
            
                <tr valign="middle"><th></th>
                    <th>10:00 - 11:00</th>
                    <th>11:00 - 12:00</th>
                    <th>12:00 - 13:00</th>
                    <th>13:00 - 14:00</th>
                    <th>14:00 - 15:00</th> 
                    <th>15:00 - 16:00</th>
                    <th>16:00 - 17:00</th>
                    <th>17:00 - 18:00</th>
                </tr>
            
            
                <?php $n=0; while($n < 7){ 
                    $day = date('Y-m-d', strtotime("+$n day"));
                    $dayx = date('Y-m-d', strtotime($day));
                    $sql = 'SELECT * FROM program WHERE stadium_id = "'.$_GET['stadium_id'].'" and day="'.$day.'" ';
                    $rs = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rs)==0){
                        $sql = 'INSERT INTO program (stadium_id,day,time1,time2,time3,time4,time5,time6,time7,time8)
                            VALUES ("'.$_GET['stadium_id'].'",
                                    "'.$dayx.'",
                                    "ว่าง","ว่าง","ว่าง","ว่าง",
                                    "ว่าง","ว่าง","ว่าง","ว่าง")';
                            mysqli_query($GLOBALS['conn'],$sql);
                    }

                    $sql = 'SELECT * FROM program WHERE stadium_id = "'
                    .$_GET['stadium_id'].'" and day="'.$day.'" ';
                    $rs = mysqli_query($GLOBALS['conn'],$sql);
                    $row = mysqli_fetch_assoc($rs);
                ?>
                <tr valign="middle">
                    <td>วันที่ <?php echo date('d-m-Y', strtotime("+$n day")); ?></td>

                    <td <?php if($row['time1']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time1']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time1']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time1']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[0].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time1']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=1' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time1']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time2']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time2']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time2']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time2']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[1].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time2']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=2' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time2']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time3']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time3']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time3']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time3']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[2].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time3']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=3' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time3']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time4']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time4']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time4']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time4']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[3].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time4']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=4' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time4']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time5']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time5']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time5']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time5']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[4].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time5']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=5' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time5']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time6']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time6']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time6']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time6']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[5].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time6']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=6' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time6']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time7']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time7']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time7']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time7']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[6].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time7']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=7' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";}  
                        if($row['time7']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                    <td <?php if($row['time8']=="จองแล้ว"){echo "class='table-success'";}
                    if($row['time8']=="ว่าง"){echo "class='table-primary'";}
                    if($row['time8']=="ปรับปรุง"){echo "class='table-danger'";} ?>>
                        <?php if($row['time8']=="จองแล้ว"){
                            $sql = 'SELECT * FROM booking WHERE stadium_id = "'.$_GET['stadium_id'].'" 
                            and day="'.$day.'" and time="'.$choosetime2[7].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['booking'] = mysqli_fetch_assoc($rs);

                            $sql = 'SELECT * FROM users WHERE user_id = "'.$_SESSION['booking']['user_id'].'"';
                            $rs = mysqli_query($GLOBALS['conn'],$sql);
                            $_SESSION['showuser'] = mysqli_fetch_assoc($rs);

                            echo "จองแล้ว <br> โดย ".$_SESSION['showuser']['user_name'];}
                        if($row['time8']=="ว่าง"){echo "<a href='jong.php?stadium_id=".$_GET['stadium_id']."&day=".$day."&time=8' class='nav-link'>" ; 
                            echo "<button class='btn w-100 h-100'>ว่าง</button>";} 
                        if($row['time8']=="ปรับปรุง"){echo "ปรับปรุง";} ?>
                    </td>
                </tr>
                    <?php $n++; } ?>
            
            </table>
            <div class="col-6"><button class="btn btn-warning" onclick="window.location.href='index.php'">เลือกสนามอื่น</button></div>
            
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
