  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="<?php echo base_url();?>admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/users')?>"><i class="fa fa-fw fa-user"></i> Users </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/customers')?>"><i class="fa fa-fw fa-cubes"></i> Customers </a>
            </li>
            <li>
                <a href="<?php echo site_url('admin/portfolio_management')?>"><i class="fa fa-fw fa-pencil-square-o"></i> Portfolio </a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_SESSION['title']; ?> <small><?php echo $_SESSION['subtitle']; ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Admin Content Section -->
        <div class="row">
            <div class="col-lg-12" style="min-height:500px">
              <div>
          		    <?php echo $output; ?>
              </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
