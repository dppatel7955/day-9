<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");
$editid = isset($_GET['id']) ? $_GET['id'] : '';
$editq = mysqli_query($connection, "select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

if ($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];

    $uq = mysqli_query($connection, "update tbl_user set user _name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$editid}'") or die(mysqli_error($connection));
if($uq){
    echo "<script> alert{'record updated'}; window.location='3-table.php';</script>";
    }
?>
<html>
    <body>
    <from method="post">
        Name : <input type="text"  name="txt1"/><br>
        Gender: <select name="txt2">
                <option>Male</option>
                <option>Female</option>
        </select>
        <br> Mobile no : <input type="Number"  name="txt3"/><br>
         <input type="submit"/>
    </from>
    </body>
</html