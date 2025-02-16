
      <table id="mytable" class="display nowrap dataTable dtr-inline " style="width: 100%;"
        aria-describedby="example_info">
        <thead>
          <tr>
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

          <tr>
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
              <a class="btn btn-small btn-danger" href="Delete.php?id=<?php echo $row['PatientID']; ?>">Delete
              </a>
              <a class="btn btn-small btn-success" href="print.php?id=<?php echo $row['PatientID']; ?>">Print</a>


            </td>

          </tr>
        <?php } //END OF LOOP    ?>


      </table>
