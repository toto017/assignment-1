<?php 
    if(isset($_SESSION['user'])){
        echo "
        <div class='container mt-3 text-center'>
<div class='d-grid gap-3'>
<table class='table'>
    <thead class='table-dark'>
      <tr><th><center><h2><font color='white'>ยินต้อนรับ</font></h2></th>
    </tr>
    <tr><center>
        <td><center><h2>ผู้ใช้ : ". $_SESSION['user']['user_name']." </h2></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><a class='nav-link' href='index.php'>หน้าหลัก</a></td>
    </tr>
    <tr>
        <td><a class='nav-link' href='myhistory.php'>ประวัติการจองของฉัน</a></td>
    </tr>
</table>
<table class='table'>
    <thead class='table-success'>
        <tr>
        <th><a class='nav-link' href='logout.php'>ออกจากระบบ</a></td>
    </tr>
</table>
</div>
</div>
        ";
    }else{
        echo "
<div class='container mt-3 text-center'>
    <div class='d-grid gap-3'>
        <table class='table'>
            <thead class='table-dark'>
                <tr>
                    <th><center><h2><font color='white'>ยินต้อนรับ</font></h2></th>
                </tr>
                <tr><center>
                    <td><center><h2>ผู้เยี่ยมชม</h2></td>
                </tr>
            </thead>
        </table>
        <table class='table'>
            <thead class='table-success'>
                <tr>
                    <th><a class='nav-link' href='login.php'>เข้าสู่ระบบ</a></td>
                </tr>
                <tr>
                    <th><a class='nav-link' href='regist.php'>สมัครสมาชิก</a></td>
                </tr>
            </thead>
        </table>
    </div>
</div>
        ";
    }
?>