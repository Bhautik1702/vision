<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['userId'];
    if(isset($_POST['addToFavourite'])) {
        $itemId = $_POST["itemId"];
        $existSql = "SELECT * FROM `viewfavourite` WHERE 'itemId' = '$itemId' AND `userId`='$userId'";
        $result = mysqli_query($link, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            echo "<script>alert('Item Already Added.');
                    window.history.back(1);
                    </script>";
        }
        else{
            $sql = "INSERT INTO `viewfavourite` (`itemId`, `userId`) VALUES ('$itemId', '$userId')";   
            $result = mysqli_query($link, $sql);
            if ($result){
                echo "<script>
                    window.history.back(1);
                    </script>";
            }
        }
    }
    if(isset($_POST['removeItem'])) {
        $itemId = $_POST["itemId"];
        $sql = "DELETE FROM `viewfavourite` WHERE `itemId`='$itemId' AND `userId`='$userId'";   
        $result = mysqli_query($link, $sql);
        echo "<script>alert('Removed');
                window.history.back(1);
            </script>";
    }
}
?>