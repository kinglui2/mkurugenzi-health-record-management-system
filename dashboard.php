<?php include('header.php'); ?>
<?php include('session.php'); ?>

    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">STATISTICS</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_students = mysqli_query($conn,"select * from students  ")or die(mysqli_error());
								$count_students = mysqli_num_rows($query_students);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_students; ?>"><?php echo $count_students; ?></div>
                                    <div class="chart-bottom-heading"><strong>PATIENTS</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error());
								$count_class = mysqli_num_rows($query_class);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>Level</strong>

                                    </div>
                                </div>
								<?php 
																
								$query_nursery = mysqli_query($conn," select * from students, class where students.class = class.class_name AND class.category ='Nursery'")or die(mysqli_error());
								
								$count_nursery = mysqli_num_rows($query_nursery);
								
								?>
								
                             
								
								<?php 
								$query_primary = mysqli_query($conn," select * from students, class where students.class = class.class_name AND class.category ='Primary'")or die(mysqli_error());
								$count_primary = mysqli_num_rows($query_primary);
								?>
								
                                
								
								
										<?php 
								$query_secondary = mysqli_query($conn," select * from students, class where students.class = class.class_name AND class.category ='Secondary'")or die(mysqli_error());
								$count_secondary = mysqli_num_rows($query_secondary);
								?>
								
                                
								
								
										<?php 
								$query_admin = mysqli_query($conn," select * from users where status='administrator' ")or die(mysqli_error());
								$count_admin = mysqli_num_rows($query_admin);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_admin ?>"><?php echo $count_admin ?></div>
                                    <div class="chart-bottom-heading"><strong>ADMIN USERS</strong>

                                    </div>
                                </div>
								
										<?php 
								$query_normal = mysqli_query($conn," select * from users where status='normal'")or die(mysqli_error());
								$count_normal = mysqli_num_rows($query_normal);
								?>
								
                                
								
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
		 
        </div>
	<?php include('script.php'); ?>
    </body>
</html>