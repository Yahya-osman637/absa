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
          <h4>Dashboard</h4>
        </div>
      </div>

      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];

      }
      if (isset($_POST['kudar'])) {
        $Name = $_POST['Name'];
        $Type = $_POST['Type'];
        $Amount = $_POST['Amount'];
        $Reason = $_POST['Reason'];
        $Date = $_POST['Date'];


        $sql = "UPDATE tblpayment SET Name='$Name', Type='$Type',Amount='$Amount',Reason='$Reason',Date='$Date'  WHERE No ='$id'";


        $query = mysqli_query($con, $sql);
        $num_rows = mysqli_affected_rows($con);
        if ($num_rows > 0) {

        } else {
          echo "cilad aya jirta";
        }

      }
      ?>

      <div class="container-fluid">
        <?php
        $sql = "SELECT * FROM tblpayment WHERE No='$id'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);

        ?>
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span>Registration Form</span>
              </div>
              <div class="card-body">
                <form method='post' action='UpdateInvoice.php' autocomplete='off'>
                  <div class='row'>
                    <div class='col-md-4'>
                      <h5 class='text-success'>Invoice Details</h5>
                      <div class='form-group'>
                        <label>Invoice No</label>
                        <input type='text' name='invoice_no' class='form-control' value="<?php echo $row['No'] ?>"
                          disabled>
                      </div>
                      <div class='form-group'>
                        <label>Invoice Date</label>
                        <input type='date' name='Date' id='date' required class='form-control'
                          value="<?php echo $row['Date'] ?>">
                      </div>
                    </div>
                    <div class='col-md-8'>
                      <h5 class='text-success'>Customer Details</h5>
                      <div class='form-group'>
                        <label>Name</label>
                        <input type='text' name='Name' required class='form-control' value="<?php echo $row['Name'] ?>">
                      </div>
                      <div class='form-group'>
                        <label>BY</label>
                        <input type='text' name='Type' required class='form-control' value="<?php echo $row['Type'] ?>">
                      </div>

                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-md-8'>
                      <h5 class='text-success'>Amount Details</h5>
                      <div class='form-group'>
                        <label>Amount</label>
                        <input type='text' name='Amount' required class='form-control'
                          value="<?php echo $row['Amount'] ?>">
                      </div>
                      <div class='form-group'>
                        <label>Reason</label>
                        <input type='text' name='Reason' required class='form-control'
                          value="<?php echo $row['Reason'] ?>">
                      </div>


                      <input type='submit' name='kudar' value='Print' class='btn btn-lg btn-success float-right mt-3'>
                    </div>
                  </div>
                </form>

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