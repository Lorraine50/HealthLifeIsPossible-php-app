<?php include("header.php"); ?>
<?php include ("sidebar.php"); ?>

    <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"<span style="color:red">New Medication Stock</span></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                  <div class="mr-5" <span style="color:red">New Doctors</spn></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                  <div class="mr-5"span style="color:red">123 New Bookings></span></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                  <div class="mr-5" span style="color:red"> Appointments</span></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Finance analysis-->
       
         <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
           Health Life Is Possible Financial Reports</div>
          <div class="card-body">
              <h3> Daily Income: <span style="color:greenyellow"> R 4500.00</span></h3>
              <h3> Weekly Income: <span style="color:greenyellow"> R 34800.00</span></h3>
              <h3> Monthly Income: <span style="color:greenyellow"> R 156000.00</span></h3>
          </div>
          <div class="card-footer small text-muted">Updated Now</div>
        </div>
        
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
           Patients Comments</div>
          <div class="card-body">
              <h3> Kelly Tasha Kunaka</h3>
              <p>I was very ill and one of my relatives referred me to Health Life Is Possible Clinic.<br>
                  I was treat within minutes of arriving there. I received a warm welcome from the administration team to the doctors,
          </div>
          <div class="card-footer small text-muted">Updated Now</div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            People Who Visted The Website</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>IP Address</th>
                    <th>Browser</th>
                  </tr>
                </thead>
                <!---<tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot-->
                <tbody>
                  <tr>
                    <td>27/06/2019</td>
                    <td>07:00</td>
                    <td>127.0.0.1</td>
                    <td>Internet Explore</td>
                   
                  </tr>
                
                </tbody>
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






  