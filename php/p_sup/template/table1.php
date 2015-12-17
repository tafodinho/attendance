
<?php
    session_start();
    include "../../../core/connect.php";

    $branch = $_POST['man'];

    $sql = "SELECT * FROM security_officer_table WHERE branch_office = '$branch'";
    $result = $conn->query($sql);

    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {
        ?>
             <form method="POST" action="template/query1.php">
                        <div class="col-sm-1" value="<?php if(isset($_POST['submit'])) echo $_SESSION['id']; ?>"><?php echo $row['sec_off_id']; $_SESSION['id']=$row['sec_off_id']; ?></div>
                        <div class="col-sm-2" value="<?php if(isset($_POST['submit'])) echo $_SESSION['id'] ?>"><?php echo $row['first_name']; $_SESSION['fname']=$row['first_name']; ?></div>
                        <div class="col-sm-2" value="<?php if(isset($_POST['submit'])) echo $_SESSION['id'] ?>"><?php echo $row['last_name']; $_SESSION['lname']=$row['last_name']; ?></div>
                        <div class="col-sm-2" value="<?php if(isset($_POST['submit'])) echo $_SESSION['id'] ?>"><select class="form-control" name="status" id="status" value="">
                            <option value="NULL" selected>--status--</option>
                            <option value="1">present</option>
                            <option value="0">absent</option>
                        </select></div>
                        <input type="hidden" name="soid" id="soid" value="<?php echo $row['sec_off_id']; ?>">
                        <div class="col-sm-3"><input type="text" class="form-control" name="data" id="data" value=""></div>
                        <div class="col-sm-2"><button class="btn btn-default btn-block post" name="submit">Check</button></div>
                    <br>
                    <hr>
            </form>
        <?php
    }     
?>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/controle.js"></script>
