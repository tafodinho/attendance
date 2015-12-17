<?php

    session_start();

	include "../../../core/connect.php";

        $title = $_POST['title'];
        $remark = $_POST['content'];
        $sup_id = $_SESSION['id'];
        $date = time();

        $sql = "INSERT INTO report_table (title, content, sup_id, time)
                VALUES ('$title', '$remark', '$sup_id', '$date')";
        $result = $conn->query($sql);
        if($result === TRUE)
        {
            echo "success";
        }
        else
        {
            echo "lie";
        }
?>