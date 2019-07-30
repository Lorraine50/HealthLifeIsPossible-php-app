<?php include("header.php"); ?>
<?php include ("sidebar.php"); ?>

    <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Clients</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Health Life Is Possible Clients</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Client_id</th>
                    <th>Client_Name</th>
                    <th>Client_Tel_w</th>
                    <th>Client_Tel_h</th>
                    <th>Client_Cell</th>
                    <th>Client_password</th>
                    <th>Client_Ref</th>
                    <th>Client_Age</th>
                    <th>Client_Email</th>
                    <th>Client_Address</th>
                    
                  </tr>
              
      
                  <tr>
                    <td>345678902345</td>
                    <td>Lorraine Kunaka</td>
                    <td>0314567890</td>
                    <td>0314567832</td>
                    <td>0725546739</td>
                    <td>23#tr@378</td>
                    <td>Word of Mouth</td>
                    <td>46</td>
                    <td>lorrainekunaka@gmail.com</td>
                    <td>123 Faith Road Westville 4078</td>                 
                  </tr>
                  
                  <tr>
                    <td>6745678902345</td>
                    <td>Sandile Mohlana </td>
                    <td>031567890</td>
                    <td>0314567832</td>
                    <td>0813456789</2td>
                    <td>ty87%$ui</td>
                    <td>Internet</td>
                    <td>59</td>
                    <td>sandile@hotmail.com</td>
                    <td>34 Place Pinetown 4081</td>                 
                  </tr>
                  <tr>
                    <td>81457643890890</td>
                    <td>Stella Smith </td>
                    <td>0314563789</td>
                    <td>0314567785</td>
                    <td>0913456789</2td>
                    <td>sfg/9809</td>
                    <td>Myself</td>
                    <td>31</td>
                    <td>ssmith@hotmail.com</td>
                    <td>134 Field Street Wesville 4081</td>                 
                  </tr>
                                
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php include("d-footer.php"); ?>
   
    </div>    <!-- /.content-wrapper -->

  <?php include("footer.php"); ?>






  
