<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

<div id="content-wrapper">

    <div class="container-fluid">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Admin</li>
        </ol>
        <div class="card-header">Edit Your Profile</div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" value="<?php echo $edit_admin["HCP_name"]; ?>" id="inputEmail3" placeholder="First Name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="email" value="<?php echo $hcp["HCP_email"]; ?>" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Confirm Password">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Update My Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>


</div>

</div>
</div>
<?php include("d-footer.php"); ?> 