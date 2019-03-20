<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student</title>

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
                <a class="navbar-brand" href="home.html">Student</a>
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
                            <a href="home.html">Dash Board</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                       

                        <li>
                            <a href="event.php">Event</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="lacture.php"> Lecture</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="staff.php"> Staff</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="course.php">Course</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="results.php"> Results</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="fess.php">Fees</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="login.html"> Logout</a>

                            
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
                        <h1 class="page-header">Event</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        <div>
    <script src="../fullcalendar-3.10.0/lib/jquery.min.js"></script>
    <script src="../fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="../fullcalendar-3.10.0/fullcalendar.min.js"></script>
    <link href="../fullcalendar-3.10.0/fullcalendar.min.css" rel="stylesheet">
<script>

        $(document).ready(function() {
      
            $('#divcalendar').fullCalendar({
                timezone:'UTC',
                defaultDate: '2019-03-12',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                    eventRender: function (event, element) {
                        var eventDate = event.start;
                        var calendarDate = $('#divcalendar').fullCalendar('getDate');
                            if (eventDate.get('month') !== calendarDate.get('month')) {
                            return false;
                            }
                    },
            events: function (start, end, timezone,callback) {

                $.ajax({
                type: "POST",
                url: 'eventreturn.php',
                cache: false,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                  var event = [];
                  $(data).each(function () {
                      event.push({
                          title: this.heading,
                          start: this.dateone,
                          end: this.datetwo
                      });
                  });
                  console.log(event);
                  callback(event);
              },
              error: function (jqXHR, textStatus, errorThrown) {
                  /* alert('There was an error'); */
              }
          });
      }
      //events: [
      //  {
      //    title: 'All Day Event',
      //    start: '2018-03-01'
      //  },
      //  {
      //    title: 'Long Event',
      //    start: '2018-03-07',
      //    end: '2018-03-10'
      //  },
      //  {
      //    id: 999,
      //    title: 'Repeating Event',
      //    start: '2018-03-09T16:00:00'
      //  },
      //  {
      //    id: 999,
      //    title: 'Repeating Event',
      //    start: '2018-03-16T16:00:00'
      //  },
      //  {
      //    title: 'Conference',
      //    start: '2018-03-11',
      //    end: '2018-03-13'
      //  },
      //  {
      //    title: 'Meeting',
      //    start: '2018-03-12T10:30:00',
      //    end: '2018-03-12T12:30:00'
      //  },
      //  {
      //    title: 'Lunch',
      //    start: '2018-03-12T12:00:00'
      //  },
      //  {
      //    title: 'Meeting',
      //    start: '2018-03-12T14:30:00'
      //  },
      //  {
      //    title: 'Happy Hour',
      //    start: '2018-03-12T17:30:00'
      //  },
      //  {
      //    title: 'Dinner',
      //    start: '2018-03-12T20:00:00'
      //  },
      //  {
      //    title: 'Birthday Party',
      //    start: '2018-03-13T07:00:00'
      //  },
      //  {
      //    title: 'Click for Google',
      //    url: 'http://google.com/',
      //    start: '2018-03-28'
      //  }
      //]
      });
      //$('.fc-other-month').html('');
  });
</script>



    <div id="divcalendar" class="col-sm-11" >
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

    <!-- jQuery -->
   <!--  <script src="../vendor/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
