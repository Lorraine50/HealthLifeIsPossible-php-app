<?php include("header.php"); ?>
<?php include ("sidebar.php"); ?>

    <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Bookings</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
             Appointments</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Appoint_id</th>
                    <th>Appoint_date</th>
                    <th>Appoint_time</th>
                    <th>Client_id</th>
                    <th>HCP_id</th>
                    <th>Consult_id</th>
                     <th>Status</th>
                  </tr>
                  
      
                  <tr>
                    <td>1</td>
                    <td>12/07/2019</td>
                    <td>13:00</td>
                    <td>34567890237890</td>
                    <td>12</td>
                    <td>9</td>
                    <td>Completed</td>
                    
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>23/07/2019</td>
                    <td>11:00</td>
                    <td>5656789567421</td>
                    <td>9</td>
                    <td>7</td>
                    <td>Completed</td>
                    
                  </tr>
                   <tr>
                    <td>6</td>
                    <td>07/08/2019</td>
                    <td>09:00</td>
                    <td>73567890237856></td>
                    <td>6</td>
                    <td>1</td>
                    <td>Pending</td>
                    
                  </tr>
                   <tr>
                    <td>4</td>
                    <td>10/10/2019</td>
                    <td>08:00</td>
                    <td>34567890237890</td>
                    <td>3</td>
                    <td>4</td>
                    <td>Completed</td>
                    
                  </tr>
                  
                 
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php include("d-footer.php"); ?>

    </div>
    <!-- /.content-wrapper -->

  <?php include("footer.php"); ?>





