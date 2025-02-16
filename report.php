<?php
require_once("include/conn.php");
?>





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

  <style type="text/css">
    .row {
      margin-bottom: 5px;
    }

    @media print {

      .no-print,
      .no-print * {
        display: none !important;
      }
    }
  </style>

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
        <form action="" method="POST">
          <section class="content-header  no-print">
            <div class="col-md-3"> </div>
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-header"></div>
                <div class="panel-body ">
                  <div class="row">
                    <div class="col-sm-12 search1">
                      <label class="col-sm-3">Date From:</label>
                      <div class="col-sm-9">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input required autocomplete="off" type="text"
                            value="<?php echo isset($_POST['date_from']) ? $_POST['date_from'] : DATE('m/d/Y'); ?>"
                            name="date_from" class="form-control pull-right date_picker" id="datemask2"
                            placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 search1">
                      <label class="col-sm-3">Date To:</label>
                      <div class="col-sm-9">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input required autocomplete="off" type="text"
                            value="<?php echo isset($_POST['date_to']) ? $_POST['date_to'] : DATE('m/d/Y'); ?>"
                            name="date_to" class="form-control pull-right date_picker" id="datemask2"
                            placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 search1">
                      <label class="col-sm-3"></label>
                      <div class="col-sm-9">
                        <input type="submit" name="submit" class="btn btn-success">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-3"> </div>
          </section>
        </form>

        <div class="clear"></div>
        <section class="content col-sm-12">

          <p style="text-align: center;font-size: 15px"><br>
            SERVICE Report <br />
            As of
            <?php echo date('m/d/Y'); ?>


            <?php
            // $date_taken = isset($_POST['date_taken']) ? date_format(date_create($_POST['date_taken']),"Y-m-d") : "";
            //  $course  = isset($_POST['Course']) ? $_POST['Course'] : "";
            //  $semester = isset($_POST['Semester']) ? $_POST['Semester'] : ""; 
            ?>

          <p style="font-size:15px;text-align: center;">
            Inclusive Dates:
            <?php echo isset($_POST['date_from']) ? "From : " . $_POST['date_from'] : "Month-Day-Year" ?> |
            <?php echo isset($_POST['date_to']) ? " To : " . $_POST['date_to'] : "Month-Day-Year" ?>
          </p>
          </p>

          <div class=" no-print">
            <center><button type="button" class="btn btn-info pull-center" button onclick="myFunction()">Print
                Report</button></center>
          </div>
          <table class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">

            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Total Amount</th>


                <!-- <th>Status</th> 
              <th>Remarks</th>  -->
              </tr>


            </thead>
            <tbody id="loaddashboard" style="width:320px; height:10px; overflow:auto;">
              <?php
              $datefrom = isset($_POST['date_from']) ? date_format(date_create($_POST['date_from']), 'Y-m-d') : "";
              $dateto = isset($_POST['date_to']) ? date_format(date_create($_POST['date_to']), 'Y-m-d') : "";

              $bal = 0;
              $totalAmount = 0;


              $sql = "SELECT * FROM tblpayment  WHERE  DATE(`Date`) >= '" . $datefrom . "' AND DATE(`Date`) <= '" . $dateto . "' GROUP BY No";
              $query = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($query)) {

                ?>

                </thead>
              <tbody>
                <tr>
                  <td>
                    <?php echo $row['No']; ?>
                  </td>
                  <td>
                    <?php echo $row['Name']; ?>
                  </td>
                  <td>
                    <?php echo $row['Amount']; ?>
                  </td>

                  <td>
                    <?php echo $totalAmount += $row['Amount']; ?>
                  </td>

                </tr>

              </tbody>
              <tfoot>

              </tfoot>
            <?php } //END OF LOOP    ?>
          </table>



        </section>
      </div>
    </div>
  </main>
  <script>
    function myFunction() {
      window.print();

    } 
  </script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>

<!-- =============================================== -->