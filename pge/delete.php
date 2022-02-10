<?php
    require('../connect.php');
    $m_id = $_GET['m_id'];
    $sql = ("DELETE FROM `member` WHERE m_id='$m_id'");
    $ai = "ALTER TABLE `member` AUTO_INCREMENT = 1;";
    $delete = mysqli_query($conn, $sql);
    mysqli_query($conn, $ai);
    header("location:/crud/index");
?>