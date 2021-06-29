<?php
    session_start();

    if (!isset($_SESSION['fname'])) {
        header("location:login.php");
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include './css/dashboard_style.php' ?>
</head>
<body>
    <div class="container">
        <a href="logout.php"><p class="logout">Logout</p></a>
        <div class="nav-bar">
            <a href="deposit.php"><img src="./images/icons8-safe-512.png" alt="" srcset=""></a>
            <a href="receiver.php"><img src="./images/icons8-money-transfer-64.png" alt="" srcset=""></a>
            <a href="update.php"><img src="./images/icons8-test-account-96.png" alt="" srcset=""></a>
            <a href="contact_help.php"><img src="./images/icons8-ask-question-80.png" alt="" srcset=""></a>
        </div>
        <div class="nav-title">
            <p class="title"><a href="deposit.php">Deposit Money</a></p>
            <p class="title"><a href="receiver.php">Send Money</a></p>
            <p class="title"><a href="update.php">Profile</a></p>
            <p class="title"><a href="contact_help.php">Ask Help</a></p>
        </div>
        <div class="welcome">
            <h1>Welcome <?php echo $_SESSION['fname']; ?></h1>
        </div>
        <div class="balance">
            <h1>Current Balance:</h1>
            <h1><?php
                include './server/connection.php';
                $id = $_SESSION['id'];
                $query = "select blc from data where id = $id";
                $res = mysqli_query($con, $query);
                $fetch = mysqli_fetch_array($res);
                $newRes = $fetch[0];
                echo $newRes;
            ?> $</h1>
        </div>
    </div>
    <div class="bottom"></div>
</body>
</html>