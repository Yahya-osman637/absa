<?php require_once("include/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>abdisalam Dental Clinic</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  <script src="jquery-3.6.4.min.js"></script>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">abdisalam DENTAL CLINIC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
        aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">

        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle">Profile</i></a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left">Logout</i></a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              CORE
            </div>
          </li>
          <!-- bi bi-textarea-resize -->
          <li>
            <a href="dashboard.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              FORMS
            </div>
          </li>
          <li>
            <a href="add.php" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-textarea-resize"></i></span>
              <span>Registration Form</span>
            </a>
          </li>
          <li>
            <a href="service.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-receipt"></i></span>
              <span>Add Invoice</span>
            </a>
          </li>
          <li>
            <a href="manage.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-receipt"></i></span>
              <span>Manage Invoice</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              REPORT
            </div>
          </li>
          <li>
            <a href="dreport.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-newspaper"></i></span>
              <span>Report</span>
            </a>
          </li>
          <li mt-5>
            <a href="index.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-gear"></i></span>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4>Dashboard</h4>
        </div>
      </div>
      <?php 

$sql = "SELECT * FROM tblpatients WHERE status = 1";


$query = $con->query($sql);
$totalquantity=0;
$totalcost=0;
$sum=0;
$countProduct = $query->num_rows;


// echo "total quantity :".$totalquantity ;
// echo "total cost :".$totalcost;



?>
      <?php 

$sql = "SELECT * FROM tblpatients WHERE status = 2";


$query = $con->query($sql);
$totalquantity=0;
$totalcost=0;
$sum=0;
$count = $query->num_rows;


// echo "total quantity :".$totalquantity ;
// echo "total cost :".$totalcost;



?>
      <?php 

$sql = "SELECT * FROM tblpatients";


$query = $con->query($sql);
$totalquantity=0;
$totalcost=0;
$sum=0;
$counttt = $query->num_rows;


// echo "total quantity :".$totalquantity ;
// echo "total cost :".$totalcost;



?>
     <?php
     $total=0;
          $sql = "SELECT * FROM tblpayment";
          $query = mysqli_query($con, $sql);

          while ($row = mysqli_fetch_array($query)) {
            $total +=  $row['Amount'];
          }
        

            ?>

      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card bg-primary text-white h-100">
            <div class="card-body py-5 h1 text-center"> <?php
       echo ($countProduct);
       ?></div>
            <div class="card-footer d-flex">
      Total Active Patients
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-warning text-dark h-100">
            <div class="card-body py-5 h1 text-center"><?php
       echo ($count);
       ?></div>
            <div class="card-footer d-flex">
            Total In Active Patients
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-success text-white h-100">
            <div class="card-body py-5 h1 text-center"><?php
       echo ($counttt);?></div>
            <div class="card-footer d-flex">
             Total Patients
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-danger text-white h-100">
            <div class="card-body py-5 h1 text-center"><?php
       echo ($total);?></div>
            <div class="card-footer d-flex">
              Total Income
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
      </div>


      <table id="mytable" class="display nowrap dataTable dtr-inline " style="width: 100%;"
        aria-describedby="example_info">
        <thead>
          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
              style="width: 0px;" aria-sort="ascending" aria-label="Name:
              activate to sort column descending">
              Patient ID</th>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
              style="width: 0px;" aria-sort="ascending" aria-label="Name:
              activate to sort column descending">
              First Name</th>
            <th class="" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; "
              aria-label="Position: activate to sort column ascending"> Middle Name
            </th>
            <th class="sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
              style="width: 0px;" aria-label="Office: activate to sort column ascending"> Last Name
            </th>
            <th class="dt-body-right sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
              style="width: 0px; " aria-label="Age: activate to sort column ascending">
              Contact</th>
            <th class="dt-body-right sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
              style="width: 0px; " aria-label="Start date: activate to sort column ascending">Options
            </th>


          </tr>
          <?php
          $sql = "SELECT * FROM tblpatients";
          $query = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($query)) {

            ?>
          </thead>
<?php 
$counter = 1;
?>
          <tr>
          
            <td>
              <?php echo $counter++; ?>
            </td>
            <td>
              <?php echo $row['Fname']; ?>
            </td>
            <td>
              <?php echo $row['Mname']; ?>
            </td>
            <td>
              <?php echo $row['Lname']; ?>
            </td>
            <td>
              <?php echo $row['ContactNo']; ?>
            </td>
            <td class="dt-body-right dtr-hidden" style="">
              <a class="btn btn-small btn-primary" href="update.php?id=<?php echo $row['PatientID']; ?>">Update</a>
            
              <a class="btn btn-small btn-success" href="print.php?id=<?php echo $row['PatientID']; ?>">Print</a>


            </td>

          </tr>
        <?php } //END OF LOOP    ?>


      </table>

      <!-- <script>
    function myFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // for column one
        td1 = tr[i].getElementsByTagName("td")[1]; // for column two
        td2 = tr[i].getElementsByTagName("td")[2]; // for column one
        td3 = tr[i].getElementsByTagName("td")[3]; // for column two
        td4 = tr[i].getElementsByTagName("td")[4]; // for column two
        /* ADD columns here that you want you to filter to be used on */
        if (td) {
          if ((td.innerHTML.toUpperCase().indexOf(filter) > -1) || (td1.innerHTML.toUpperCase().indexOf(filter) > -1) || (td2.innerHTML.toUpperCase().indexOf(filter) > -1) || (td3.innerHTML.toUpperCase().indexOf(filter) > -1) || (td4.innerHTML.toUpperCase().indexOf(filter) > -1)) {
            tr[i].style.display = "";
          }
          else {
            tr[i].style.display = "none";
          }
        }
      }
    } 
  </script> -->


      <script src="./js/dataTables.bootstrap5.min.js"></script>
      <script src="./js/script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
      <script>
        $(document).ready(function () {
          $('#mytable').DataTable();
        });
      </script>
</body>

</html>