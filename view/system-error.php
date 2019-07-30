<?php include("header.php"); ?>
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">HealthLifeIsPossible.. <img src="images/smile.png" width="60" height="60" alt="Health Life Is Possible" style="border-radius: 10px;"/>
      <!--<small> - welcome to hospitality and quality health service.</small>-->
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="?action=index">Home</a>
        </li>
        <li class="breadcrumb-item active">Error</li>
    </ol>

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">


            <h3><?php if(isset($message)){ echo $message; }else { echo ""; } ?></h3>

        </div>
        
        

    </div>
    
    
</div>
    <!-- /.container -->
    <?php include("footer.php"); ?>
