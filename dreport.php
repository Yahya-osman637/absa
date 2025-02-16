<?php require_once("include/conn.php"); ?>



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
  <title>Zaki Dental Clinic</title>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">ZAKI DENTAL CLINIC</a>
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
            <a href="report.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-newspaper"></i></span>
              <span>Report</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-gear"></i></span>
              <span>Setting</span>
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
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="glyphicon glyphicon-check"></i> Order Report
            </div>
            <!-- /panel-heading -->
            <div class="panel-body">

              <form class="form-horizontal" action="get.php" method="post" id="getOrderReportForm">
                <div class="form-group">
                  <label for="startDate" class="col-sm-2 control-label">Start Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Start Date" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="endDate" class="col-sm-2 control-label">End Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="endDate" name="endDate" placeholder="End Date" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" id="generateReportBtn"> <i
                        class="glyphicon glyphicon-ok-sign"></i> Generate Report</button>
                  </div>
                </div>
              </form>

            </div>
            <!-- /panel-body -->
          </div>
        </div>
        <!-- /col-dm-12 -->
      </div>
      <!-- /row -->

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