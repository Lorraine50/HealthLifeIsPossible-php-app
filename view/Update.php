<?php include ("header.php"); ?>

<div class="container main-container">

    <div class="row mb-4">
        <div class="col-lg-8">
            <h3 class="mt-2 text-danger">Update Your Profile </h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1"> Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
               
          
                <button type="submit" class="btn btn-primary">Save Profile</button>
            </form>

    </div>

</div>
    
    
    
    
    
    
    

<?php include("footer.php"); ?>



