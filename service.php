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
      <div class='container pt-5'>
        <h1 class='text-center text-primary'>Service Print Invoice</h1>
        <hr>



        <form method='post' action='printinvoice.php' autocomplete='off'>
          <div class='row'>
            <div class='col-md-4'>
              <h5 class='text-success'>Invoice Details</h5>
              <div class='form-group'>
                <label>Invoice No</label>
                <input type='text' name='invoice_no' class='form-control' disabled>
              </div>
              <div class='form-group'>
                <label>Invoice Date</label>
                <input type="date" class="form-control input-sm date_picker date_inv" name="Date"
                  placeholder="mm/dd/yyyy" autocomplete="off" required />
              </div>
            </div>
            <div class='col-md-8'>
              <h5 class='text-success'>Customer Details</h5>
              <div class='form-group'>
                <label>Name</label>
                <input type='text' name='Name' required class='form-control'>
              </div>
              <div class='form-group'>
                <label>BY</label>
                <input type='text' name='Type' required class='form-control'>
              </div>

            </div>
          </div>
          <div class='row'>
            <div class='col-md-8'>
              <h5 class='text-success'>Amount Details</h5>
              <div class='form-group'>
                <label>Amount</label>
                <input type='text' name='Amount' required class='form-control'>
              </div>
              <div class='form-group'>
                <label>Reason</label>
                <input type='text' name='Reason' required class='form-control'>
              </div>


              <input type='submit' name='kudar' id="createOrderBtn" value='Print'
                class='btn btn-success btn-lg float-right mt-4'>

            </div>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script>
    // f(orderDate && clientName && clientContact && paid && discount && paymentType && paymentStatus) {
    // 		if(validateProduct == true && validateQuantity == true) {
    // create order button
    // $("#createOrderBtn").button('loading');

    $.ajax({
      // url : form.attr('action'),
      // type: form.attr('method'),
      data: form.serialize(),
      dataType: 'json',
      success: function (response) {
        console.log(response);
        // reset button
        $("#createOrderBtn").button('reset');

        $(".text-danger").remove();
        $('.form-group').removeClass('has-error').removeClass('has-success');

        if (response.success == true) {

          // create order button
          $(".success-messages").html('<div class="alert alert-success">' +
            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
            ' <br /> <br /> <a type="button" onclick="printOrder(' + response.order_id + ')" class="btn btn-primary"> <i class="glyphicon glyphicon-print"></i> Print </a>' +
            '<a href="printinvoice.php?o=add" class="btn btn-default" style="margin-left:10px;"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Order </a>' +

            '</div>');

          $("html, body, div.panel, div.pane-body").animate({ scrollTop: '0px' }, 100);

          // disabled te modal footer button
          $(".submitButtonFooter").addClass('div-hide');
          // remove the product row
          $(".removeProductRowBtn").addClass('div-hide');

        } else {
          alert(response.messages);
        }
      } // /response
    }); // /ajax
       // if array validate is true

  </script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>