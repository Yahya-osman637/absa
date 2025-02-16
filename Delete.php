<?php require_once("include/conn.php"); ?>
<?php
if(isset($_GET['id'])){
            $id = $_GET['id'];
$sql = "DELETE  FROM tblpatients WHERE PatientID=$id";
$dqeuery = mysqli_query($con,$sql);
if($dqeuery){
header("location:index.php");
}
        }
        ?>