<?php require_once("include/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<script src="jquery-3.6.4.min.js"></script>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="files/css/bootstrap.min.css">
  <title>Invoice</title>
  <style>
    input[type=text] {
      width: 6=100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid red;

    }
  </style>
</head>

<body onafterprint="service.php" onload="Printpage();">

  <?php


  if (isset($_POST['kudar'])) {
    $Name = $_POST['Name'];
    $Type = $_POST['Type'];
    $Amount = $_POST['Amount'];
    $Reason = $_POST['Reason'];
    $Date = $_POST['Date'];


    $sql = "INSERT INTO tblpayment(Name, Type, Amount, Reason, Date)
    VALUES('$Name','$Type','$Amount','$Reason', '$Date')";

    $query = mysqli_query($con, $sql);
    if ($query) {


    } else {
      echo "cilad aya jirta";
    }

  }


  ?>

  <!-- onload="print()" -->
  <div border="0" width="100%;" height="95%;"
    style="border:8px solid black;border-top-style:8px solid black;border-bottom-style:8  px solid black;">

    <table border="0" width="100%;"
      style="border:8px solid black;border-top-style:8px solid black;border-bottom-style:8  px solid black;">
      <thead>
        <tr>


        <tr>

          <td>
            <h1 class="text-center mb-5 mt-3">
              <strong>abdisalam MEDICAL CENTER</strong>

            </h1>
            <h3 class="mb-5 ml-3">
              xidhida siliga, Galinta, Buuxinta, Maydhida, Dhuuxkadilida, Toosinta, Cadaynta, Raajada Daawaynta
              Ciridka
              & Qurxinta Ilkaha, Samaynta Dabarka
              <u>Borama Branch: Tel:0633441216/4839514</u>
            </h3>



        </tr>

      </thead>
    </table>

    <table border="0" width="100%;"
      style="border:8px solid black;border-top-style:8px solid black;border-bottom-style:8  px solid black;">

      <tbody class="ml-3">
        <div style="border:4px solid black;border-bottom-style:4  px solid black;">
          <h6 class="ml-3"> <label for="">Date:
              <?php echo date_format(date_create(date('Y-m-d')), 'm/d/Y'); ?>
            </label>

            <center>
              <labceel for="" class="ml-5 h1 float-center">Receipt Voucher</label>
            </center>
          </h6>
        </div>
        <tr>
          <h2 class="ml-3"> <label for="">Received From:</label> <input type="text"
              value="<?php echo $_POST['Name'] ?>">
          </h2>



        </tr>
        <tr>
          <h2 class="ml-3"> <label for="">By:</label> <input type="text" value="<?php echo $_POST['Type'] ?>">
          </h2>



        </tr>
        <tr>
          <h2 class="ml-3"> <label for="">Lacag Dhan [Amount]:</label> <input type="text"
              value="<?php echo $_POST['Amount'] ?>">
          </h2>



        </tr>
        <tr>
          <h2 class="ml-3"> <label for="">Sababta Qabashada:</label> <input type="text"
              value="<?php echo $_POST['Reason'] ?>">
          </h2>



        </tr>
        <tr>
          <h4 class="ml-3"> <label for="">Cashier Sign:</label> <input type="text">
            <label for="">Buyer Sign:</label> <input type="text">
          </h4>

          <h2 class="ml-3">
          </h2>



        </tr>
        <tr>
          <h2 class="ml-3 mt-5"> <label for="">Fiiro Gaara : Macmiil Xisaabtaada Lasoco Adigoo Raaliya</label>
          </h2>



        </tr>
      </tbody>



    </table>

  </div>

  <script src="files/js/jquery-1.12.4.min.js"></script>
  <script src="files/js/popper.min.js"></script>
  <script src="files/js/bootstrap.min.js"></script>
</body>
<script>
  function Printpage(){
    window.print("service.php");
  }
  window.addEventlistener('DOMContentLoaded',(event)=> {
  Printpage()
  setTimeout(function(){window.close()},750)
  });
</script>

</html>