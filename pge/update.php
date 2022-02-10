<?php
require('../connect.php');
$m_id = $_GET['m_id'];
if (isset($_POST['send'])) {
    $m_stuid = $_POST['m_stuid'];
    $m_fname = $_POST['m_fname'];
    $m_lname = $_POST['m_lname'];
    $m_age = $_POST['m_age'];
    $m_grade = $_POST['m_grade'];

    $sql = "UPDATE member SET m_stuid='$m_stuid', m_fname='$m_fname', m_lname='$m_lname', m_age='$m_age', m_grade='$m_grade' WHERE m_id='$m_id' ";
    $result = mysqli_query($conn, $sql);
    header("refresh:1;/crud/index");
}
if (isset($_POST['back'])) {
    header("location:/crud/index");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <?php require('../pge/navbar.php') ?>
    <h1 class="text-center">Update user</h1>


    <div class="container">
        <form class="form-horizontal" method="POST">
            <?php $show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM member WHERE m_id='$m_id'")); { ?>
                <div class="row form-group">
                    <div class="col">
                        <label for="std">รหัสนักศึกษา :</label>
                        <input type="text" class="form-control" id="std" name="m_stuid" value="<?php echo $show['m_stuid'] ?>">
                    </div>
                    <div class="col">
                        <label for="grade">ปีการศึกษา :</label>
                        <input type="text" class="form-control" id="grad" name="m_grade" value="<?php echo $show['m_grade'] ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="Name">ชื่อ :</label>
                        <input type="text" class="form-control" id="Name" name="m_fname" value="<?php echo $show['m_fname'] ?>">
                    </div>
                    <div class="col">
                        <label for="Surname">นามสกุล :</label>
                        <input type="text" class="form-control" id="Surname" name="m_lname" value="<?php echo $show['m_lname'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="age">อายุ :</label>
                    <input type="number" class="form-control" id="age" name="m_age" value="<?php echo $show['m_age'] ?>">
                </div>

                <div class="form-group"></div>
                <button type="submit" name="send" class="btn btn-success">ตกลง</button>
                <button name="back" class="btn btn-danger">ยกเลิก</button>
    </div>
<?php } ?>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>