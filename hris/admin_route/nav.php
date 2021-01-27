<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Human Resource Integrated System</title>

    <!-- Core CSS - Include with every page -->
		    <link rel="shortcut icon" href="viclogo.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">


    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#46b8da;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="personal_info.php" style="color:white;"><strong>Human Resource Integrated System</strong></a>
            </div>
            <!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right" style="font-size:18px;color:#777777;color:white;">
<strong>Hi Admin</strong>
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <i class="fa fa-user fa-fw" style="color:white;"></i>   <i class="fa fa-caret-down"style="color:white;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					
					<?php 
					$id=$_SESSION['user_id'];
					$fetch=$mysqli->query("select * from personal_information where employee_id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['employee_id']=$show['employee_id'];
					
					?>
                        <li><a href="user_personal_information.php?id="<?php echo $id; ?>>

						 <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-user fa-fw"></i> </button>
						User Profile</a>
                        </li>
                       
                        </li>
                        <li class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#logout">
						 <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-sign-out fa-fw"></i></button>
						 Logout</a>
                  
         
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				
		
                <!-- /.dropdown -->
             
                <!-- /.dropdown -->

                <!-- /.dropdown -->
             
                <!-- /.dropdown -->
            </ul>
			