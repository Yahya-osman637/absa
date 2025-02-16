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
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="add.php">

              <span class="me-2"><i class="bi bi-textarea-resize"></i></span>
              <span>Registration Form</span>
              <span class="ms-auto">
                <span class="right-icon">

                </span>
              </span>
            </a>

          </li>
          <li>
            <a href="service.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-receipt"></i></span>
              <span>invoice</span>
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
            <a href="report.php" class="nav-link px-3">
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
          <h4>Add Patient</h4>
        </div>
      </div>

      <?php

      if (isset($_POST['kudar'])) {
        $fname = $_POST['Fname'];
        $Mname = $_POST['Mname'];
        $Lname = $_POST['Lname'];
        $ContactNo = $_POST['ContactNo'];
        $Registration = $_POST['Registration'];
        $Total = $_POST['Total'];
        $Paid = $_POST['Paid'];
        $status = $_POST['status'];
        $bill = $_POST['bill'];


        $sql = "INSERT INTO tblpatients(Fname, Mname, Lname, ContactNo, Registration, Total, Paid, status, Bill)
    VALUES('$fname','$Mname','$Lname','$ContactNo','$Registration','$Total','$Paid', '$status','$bill')";

        $query = mysqli_query($con, $sql);
        if ($query) {
        } else {
          echo "cilad aya jirta";
        }

      }

      ?>


      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span>Registration Form</span>
              </div>
              <div class="card-body">
                <form method="post" id="myForm">
                  <div class="form-group">
                    <label for="">First Name *</label>
                    <input class="form-control" name="Fname" type="text">
                  </div>
                  <div class="form-group">
                    <label for="">Middle Name *</label>
                    <input class="form-control" name="Mname" type="text">
                  </div>
                  <div class="form-group">
                    <label for="">Last Name *</label>
                    <input class="form-control" name="Lname" type="text">
                  </div>
                  <div class="form-group">
                    <label for="">Contact No *</label>
                    <input class="form-control" name="ContactNo" type="number">
                  </div>

                  <div class="form-group">
                    <label for="">Registration Date *</label>
                    <input class="form-control" name="Registration" type="date">
                  </div>
                  <div class="form-group">
                    <label for="">Total *</label>
                    <input class="form-control" name="Total" type="text">
                  </div>

                  <div class="form-group">
                    <label for="">Total Paid *</label>
                    <input class="form-control" name="Paid" type="text">
                  </div>
<div class="mt-3 mb-3">
                  <select class="form-control" name="status" id="status">
				     
				      	<option value="1">Active</option>
				      	<option value="2">In Active</option>
				      
				      </select>
              </div>


                  <div class="form-group">
                    <label for="">Bill *</label>
                    <textarea class="form-control" name="bill" rows="6" cols="45" wrap="virtual"></textarea>
                  </div>

                  <div class="card-footer">

                    <button type="submit" class="btn btn-primary btn-lg" name="kudar"><i
                        class="bi bi-printer">Save</i></button>

                  </div>


                </form>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </main>

  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>