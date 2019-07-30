<<?php include("header.php"); ?>


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
                
                <table class="table">
                    <tr>
                        <th>Med_ Name</th>
                        <th>Med_ quantity</th>
                        <th>Med_ Price</th>
                        <th>Number in Stock</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($meds as $Med) { ?>
                        <tr>
                            <td><?php echo $supp["Med_name"]; ?></td>
                        
                            <td><?php echo $supp["Med_quantity"]; ?></td>
                            <td>R<?php echo $supp["Med_price"]; ?></td>
                            <td><?php echo $supp["num_in_stock"]; ?></td>
                            <td><button type="submit" id="sell" class="btn btn-primary">Sell</button></td>
                        </tr>
                    <?php } ?>
                        
                </table>
                
            </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include("d-footer.php"); ?> 


