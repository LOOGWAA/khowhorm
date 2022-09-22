<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <table style="border: 2px solid black; width:40%" align="center">
    <tr><td colspan="2" style="background-color: aqua;">กรอกข้อมูล<td></tr>
    <tr><td>ชื่อบัญชี</td><td><input type="text" name="ชื่อบัญชี"></td></tr>
    <tr><td>รหัสผ่าน</td><td><input type="text" name="รหัสผ่าน"></td></tr>
    <tr><td>ชื่อ-นามสกุล</td><td><input type="text" name="ชื่อ-นามสกุล"></td></tr>
    <tr><td>เพศ</td><td><from>
        <input type="radio" name="เพศ" value="ช" size="40">
        ชาย<br>
        <input type="radio" name="เพศ" value="ญ" size="40">
        หญิง<br>
        <input type="radio" name="เพศ" value="อื่นๆ" size="40">
        อื่นๆ<br>
        </from></td></tr>
    <tr><td>อีเมลล์</td><td><input type="text" name="อีเมลล์"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="login"></td></tr>
</table>
<br>
<div align="center">
     <a href="index.html">กลับไปที่หน้าหลัก</a>
</div>
</body>
</html>