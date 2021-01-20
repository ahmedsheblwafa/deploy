<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Dashboard</title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="SHORTCUT ICON" href="https://demo.inilabs.net/school/v4.7/uploads/images/site.png" />

    <link rel="stylesheet" href="https://demo.inilabs.net/school/v4.7/assets/pace/pace.css">

    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/inilabs/jquery.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/slimScroll/jquery.slimscroll.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/toastr/toastr.min.js"></script>


    <link href="https://demo.inilabs.net/school/v4.7/assets/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/fonts/font-awesome.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/fonts/icomoon.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/fonts/ini-icon.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/datatables/dataTables.bootstrap.css" rel="stylesheet">

    <link id="headStyleCSSLink" href="https://demo.inilabs.net/school/v4.7/assets/inilabs/themes/whiteblue/style.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/inilabs/hidetable.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/inilabs/inilabs.css" rel="stylesheet">

    <link id="headInilabsCSSLink" href="https://demo.inilabs.net/school/v4.7/assets/inilabs/themes/whiteblue/inilabs.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/inilabs/responsive.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/toastr/toastr.min.css" rel="stylesheet">

    <link href="https://demo.inilabs.net/school/v4.7/assets/inilabs/mailandmedia.css" rel="stylesheet">

    <link rel="stylesheet" href="https://demo.inilabs.net/school/v4.7/assets/datatables/buttons.dataTables.min.css">

    <link rel="stylesheet" href="https://demo.inilabs.net/school/v4.7/assets/inilabs/combined.css">
    <link rel="stylesheet" href="https://demo.inilabs.net/school/v4.7/assets/ajaxloder/ajaxloder.css">

    <link rel="stylesheet" href="https://demo.inilabs.net/school/v4.7/assets/fullcalendar/lib/cupertino/jquery-ui.min.css">
    <link rel="stylesheet" href="https://demo.inilabs.net/school/v4.7/assets/fullcalendar/fullcalendar.css">
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/highcharts/highcharts-more.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/highcharts/data.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/highcharts/drilldown.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/highcharts/exporting.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/fullcalendar/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/fullcalendar/fullcalendar.min.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
</head>

<body class="skin-blue fuelux">
    <div class="se-pre-con"></div>
    <div id="loading">
        <img src="https://demo.inilabs.net/school/v4.7/assets/ajaxloder/loader.gif" width="150" height="150" />
    </div>
    <header class="header" style="position:fixed">
        <a href="" class="logo">
            My online School </a>
        <nav class="navbar navbar-static-top" role="navigation">


            <div class="navbar-right">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://demo.inilabs.net/school/v4.7/uploads/images/default.png" class="user-logo" alt="" />
                            <span>
                                Admin <i class="caret"></i>
                            </span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="user-body">
                                <div class="col-xs-6 text-center">
                                    <a href="dashbord.html">
                                        <div><i class="fa fa-briefcase"></i></div>
                                        Profile
                                    </a>
                                </div>
                                <div class="col-xs-6 text-center">
                                    <a href="">
                                        <div><i class="fa fa-lock"></i></div>
                                        Password
                                    </a>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="text-center">
                                    <a href="{{ url('/logout') }}">
                                        <div><i class="fa fa-power-off"></i></div>
                                        Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas" style="position: fixed;">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://demo.inilabs.net/school/v4.7/uploads/images/default.png" class="user-logo">
                    </div>

                    <div class="pull-left info">
                        <a href="">
                            <i class="fa fa-hand-o-right color-green"></i>
                            Admin </a>
                    </div>
                </div>

                <ul class="sidebar-menu">
                    <li class=""><a href="{{url('admin/dash')}}"><i class="fa fa-laptop"></i><span>Dashboard</span> </a></li>
                    <li class=""><a href="{{url('admin/student')}}">
                            <i class="fas fa-user-graduate"></i><span> Student</span> </a></li>
                    <li class=""><a href="{{url('admin/parent')}}">
                            <i class="fas fa-male" style="font-size: large;"></i><span> Parents</span> </a></li>
                    <li class=""><a href="{{url('admin/teacher')}}">
                            <i class="fas fa-chalkboard-teacher"></i><span> Teacher</span> </a></li>
                    <li class=""><a href="{{url('admin/user')}}"><i class="fa fa-users"></i><span>User</span> </a></li>
                    <li class=""><a href="{{route('course.index')}}">
                            <i class="fas fa-laptop-house"></i><span> Courses</span> </a></li>


                    <li class="treeview "><a href="">
                            <i class="fas fa-file-word"></i><span> Tasks</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class=""><a href="exam">
                                    <i class="fas fa-pen-square"></i><span> Add Task</span> </a></li>
                            <li class=""><a href="schedule">
                                    <i class="fas fa-star-half-alt"></i><span> Students Grades</span> </a></li>

                        </ul>
                    </li>


                    <li class=""><a href="{{route('magazine.index')}}">
                            <i class="far fa-calendar-alt"></i><span> Magazine</span> </a></li>
                    <li class=""><a href="{{route('message.index')}}">
                            <i class="far fa-calendar-alt"></i><span> Messages</span> </a></li>







                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side" style="margin-top: 3%;">
            @yield ('content')
        </aside>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">

            </div>
            <strong>Copyright &copy; </strong>
        </footer>
    </div>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/inilabs/style.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/tools/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/tools/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/tools/jszip.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/tools/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/tools/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/tools/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="https://demo.inilabs.net/school/v4.7/assets/inilabs/inilabs.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $("#loading").show();
            }).ajaxStop(function() {
                $("#loading").hide();
            });
        });

        // $(document).ready(function() {
        //     $('#example3, #example1, #example2').DataTable({
        //         dom: 'Bfrtip',
        //         buttons: [
        //             'copyHtml5',
        //             'excelHtml5',
        //             'csvHtml5',
        //             'pdfHtml5'
        //         ],
        //         search: false
        //     });
        // });
    </script>

    <!-- <script type="text/javascript">
        $(function() {
            $("#withoutBtn").dataTable();
        });
    </script> -->



    <!-- <script type="text/javascript">
        $("ul.sidebar-menu li").each(function() {
            if ($(this).attr('class') === 'active') {
                $(this).parents('li').addClass('active');
            }
        });

        $(document).ready(function() {
            setTimeout(function() {
                $.ajax({
                    type: 'GET',
                    dataType: "html",
                    async: false,
                    url: "https://demo.inilabs.net/school/v4.7/alert/alert",
                    success: function(data) {
                        $(".my-push-message-list").html(data);
                        var alertNumber = 0;
                        $('.my-push-message-list li').each(function() {
                            alertNumber++;
                        });
                        if (alertNumber > 0) {
                            $('.my-push-message-ul').removeAttr('style');
                            $('.my-push-message-a').append('<span class="label label-danger"><lable class="alert-image">' + alertNumber + '</lable> </span>');
                            $('.my-push-message-number').html('You have ' + alertNumber + ' notifications');
                        } else {
                            $('.my-push-message-ul').remove();
                        }
                    }
                });
            }, 5000);
        });
    </script> -->
</body>

</html>