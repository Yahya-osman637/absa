<table id="mytable" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;"
     aria-describedby="example_info">


     <thead>
          <tr>
               <th>Patient ID</th>
               <th>First Name</th>
               <th>Middle Name</th>
               <th>Last Name</th>
               <!-- <th>Middle Name</th>
                        <th>Last Name</th> -->
               <th>Contact No</th>
               <th colspan="3">Options</th>


          </tr>
          <?php
          $sql = "SELECT * FROM tblpatients";
          $query = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($query)) {

               ?>
          </thead>
          <tbody>
               <tr>
                    <td>
                         <?php echo $row['PatientID']; ?>
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
                    <td>
                         <a class="btn btn-small btn-primary"
                              href="update.php?id=<?php echo $row['PatientID']; ?>">Update</a>
                         <a class="btn btn-small btn-danger" href="Delete.php?id=<?php echo $row['PatientID']; ?>">Delete
                         </a>
                         <a class="btn btn-small btn-success" href="print.php?id=<?php echo $row['PatientID']; ?>">Print</a>


                    </td>
               </tr>
          <?php } //END OF LOOP    ?>
</table>