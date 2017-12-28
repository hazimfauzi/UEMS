<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-home fa-fw"></i>Home</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                	<?php include('admin_panel.php'); ?>
                    <!----------------------------- Popular Event ------------------------------------------------------->
                    <?php include('most_popular_event.php'); ?>
                    <!----------------------------- popular Event End --------------------------------------------------->
                    
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
</body>

</html>    