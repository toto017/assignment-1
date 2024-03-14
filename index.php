<?php 
    require('./engine.php');
    ConnectDB();

    $sql = 'SELECT * FROM stadium';
    $rs = mysqli_query($conn,$sql);
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
        
        <?php while($row = mysqli_fetch_assoc($rs)){ ?>
            <div class="col-4 mt-3 text-center">
                <table class="table text-center table-secondary">
                    <thead>
                        <tr>
                            <th><?php echo $row['stadium_name']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="stadium_detail.php?stadium_id=<?php echo $row['stadium_id']?>">
                            <?php echo '<img src="./img/'.$row['stadium_pic'].'" class="img-thumbnail">'; ?></td>
                        </tr>
                        <tr>
                            <td><a href="stadium_detail.php?stadium_id=<?php echo $row['stadium_id']?>" class="nav-link">
                            <button class="btn btn-light">รายละเอียด</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>
</div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
