<?php
include "session2.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    




</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                       
                        <li>
                            <a href="home.html"><i class="fa fa-bar-chart-o fa-fw"></i>Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="product.php">Product</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Bills<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sells.html">Sales-Bills</a>
                                </li>
                                <li>
                                    <a href="purches.html">Purches-Bill</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"> Logout</a>

                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product-Add</h1>
                    </div>
                </div>
                    <!-- /.col-lg-12 -->
                     

                      <form method="POST" action="product-veryfication.php">
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product-Name</label>
                                            <input type="name" name="pro-name" class="col-sm-9 form-control" id="inputEmail4" placeholder="Product-Name">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product-Company</label>
                                            <input type="name" name="pro-company" class="col-sm-9 form-control" id="inputEmail4" placeholder="Product-Company">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category</label>
                                            <input type="name" name="category" class="col-sm-9 form-control" id="inputEmail4" placeholder="Category">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Price-Per-Unit</label>
                                            <input type="name" name="price" class="col-sm-9 form-control" id="inputEmail4" placeholder="Price-Per-Unit">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Weight</label>
                                            <input type="name" name="weight" class="col-sm-9 form-control" id="inputEmail4" placeholder="Weight">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Expirydate</label>
                                            <input type="name" name="ex-date" class="col-sm-9 form-control" id="inputEmail4" placeholder="Expirydate">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Color</label>
                                            <input type="name" name="color" class="col-sm-9 form-control" id="inputEmail4" placeholder="Color">
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Spectification</label>
                                            <input type="text" name="spec" class="col-sm-9 form-control" id="inputEmail4" placeholder="Spectification">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product-Image</label>
                                        <input type="file" name="image" placeholder="Product-Image">
                                    </div>
                                    <button type="submit" id="productsave" class="offset-2 btn btn-primary">Save</button>
                                    </form>


 




                    
                
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>



   