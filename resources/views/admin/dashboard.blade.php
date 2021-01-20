@extends('layouts.admin')
@section('content')

<section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-12" id="resetDummyData">



                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box ">
                                        <a class="small-box-footer bg-orange-dark" href=" ">
                                            <div class="icon bg-orange-dark" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <div class="inner ">
                                                <h3 class="text-white">
                                                    45 </h3 class="text-white">
                                                <p class="text-white">
                                                    {{ auth()->user()->name }} </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box ">
                                        <a class="small-box-footer bg-teal-light" href="">
                                            <div class="icon bg-teal-light" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="inner ">
                                                <h3 class="text-white">
                                                    9 </h3 class="text-white">
                                                <p class="text-white">
                                                    Parents </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box ">
                                        <a class="small-box-footer bg-pink-light" href="">
                                            <div class="icon bg-pink-light" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </div>
                                            <div class="inner ">
                                                <h3 class="text-white">
                                                    5 </h3 class="text-white">
                                                <p class="text-white">
                                                    Teacher </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box ">
                                        <a class="small-box-footer bg-purple-light" href="">
                                            <div class="icon bg-purple-light" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fas fa-book"></i>
                                            </div>
                                            <div class="inner ">
                                                <h3 class="text-white">
                                                    25 </h3 class="text-white">
                                                <p class="text-white">
                                                    Subject </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-body" style="padding: 0px;">
                                            <div id="visitor"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <section class="panel">
                                        <div class="profile-db-head bg-maroon-light">
                                            <a href="">
                                                <img src="https://demo.inilabs.net/school/v4.7/uploads/images/default.png" alt="" /> </a>

                                            <h1>Admin</h1>
                                            <p>Admin</p>

                                        </div>
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-user-edit text-maroon-light"></i>
                                                    </td>
                                                    <td>Username</td>
                                                    <td>admin</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-envelope text-maroon-light"></i>
                                                    </td>
                                                    <td>Email</td>
                                                    <td>admin@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-phone text-maroon-light"></i>
                                                    </td>
                                                    <td>Phone</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class=" fa fa-globe text-maroon-light"></i>
                                                    </td>
                                                    <td>Address</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                                <div class="col-sm-8">
                                    <div class="box">
                                        <div class="box-body" style="padding: 0px;">
                                            <div id="attendanceGraph"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <!-- THE CALENDAR -->
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->

                            <script type="application/javascript">
                                $(function() {
                                    LoadClassWiseAttendance();

                                    function LoadClassWiseAttendance() {

                                        $('#top_right_graph_title').html("Class Attendence Lang");
                                        $("#top_right_graph_back_btn").hide();
                                        $('#attendanceGraph').highcharts({
                                            chart: {
                                                type: 'column',
                                                height: 320
                                            },
                                            title: {
                                                text: "Students Today's Attendance"
                                            },
                                            subtitle: {
                                                text: 'Click the columns to view this month student attendance'
                                            },
                                            xAxis: {
                                                categories: [
                                                    'One', 'Two', 'Three', 'Four', 'Five', 'Graduate'
                                                ],
                                                title: {
                                                    text: 'Class',
                                                    align: 'low'
                                                }
                                            },
                                            yAxis: {
                                                min: 0,
                                                title: {
                                                    text: 'Attendance',
                                                    align: 'high'
                                                },
                                                labels: {
                                                    overflow: 'justify'
                                                }
                                            },
                                            tooltip: {
                                                pointFormat: '{series.name}: <b>{point.y}</b>'
                                            },
                                            plotOptions: {
                                                bar: {
                                                    dataLabels: {
                                                        enabled: true
                                                    }
                                                },
                                                series: {
                                                    cursor: 'pointer',
                                                    point: {
                                                        events: {
                                                            click: function(e) {
                                                                LoadDayWiseAttendance(this.type, this.classID, this.dayWiseAttendance);
                                                            }
                                                        }
                                                    }
                                                }
                                            },
                                            legend: {
                                                layout: 'vertical',
                                                align: 'left',
                                                verticalAlign: 'top',
                                                x: 5,
                                                y: -10,
                                                floating: true,
                                                borderWidth: 1,
                                                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                shadow: true
                                            },
                                            credits: {
                                                enabled: false
                                            },
                                            series: [{
                                                name: 'Present',
                                                data: [{
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, ],
                                                color: 'rgb(128,213,244)'
                                            }, {
                                                name: 'Absent',
                                                data: [{
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, {
                                                    y: 0
                                                }, ],
                                                color: 'rgb(225,83,135)'
                                            }]
                                        });
                                    }

                                    function LoadDayWiseAttendance(type, classID, dayWiseAttendance) {
                                        $("#top_right_graph_back_btn").show();
                                        $("#top_right_graph_back_btn").unbind("click");
                                        $("#top_right_graph_back_btn").on("click", function() {
                                            LoadClassWiseAttendance();
                                        });
                                        var categories = [];
                                        var series = [];
                                        var attendance = [];
                                        var color = '#000';
                                        var attendanceTitle = '';
                                        if (type == 'P') {
                                            color = 'rgb(128,213,244)';
                                            attendanceTitle = 'Present';
                                        } else {
                                            color = 'rgb(225,83,135)';
                                            attendanceTitle = 'Absent';
                                        }

                                        $.ajax({
                                            type: 'POST',
                                            url: "https://demo.inilabs.net/school/v4.7/dashboard/getDayWiseAttendance",
                                            data: {
                                                "dayWiseAttendance": dayWiseAttendance,
                                                'type': type
                                            },
                                            dataType: "html",
                                            success: function(data) {
                                                data = $.parseJSON(data);
                                                // console.log(data);
                                                $.each(data, function(i, value) {
                                                    // console.log(i);
                                                    categories.push('Day ' + i);
                                                    attendance.push(value);
                                                });
                                                $('#attendanceGraph').highcharts({
                                                    chart: {
                                                        type: 'column',
                                                        height: 320
                                                    },
                                                    title: {
                                                        text: 'Students This Month Day wise Attendance'
                                                    },
                                                    subtitle: {
                                                        text: ''
                                                    },
                                                    xAxis: {
                                                        categories: categories,
                                                        title: {
                                                            text: null
                                                        }
                                                    },
                                                    yAxis: {
                                                        min: 0,
                                                        title: {
                                                            text: 'Attendance',
                                                            align: 'high'
                                                        },
                                                        labels: {
                                                            overflow: 'justify'
                                                        }
                                                    },
                                                    tooltip: {
                                                        pointFormat: '{series.name}: <b>{point.y}</b>'
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            dataLabels: {
                                                                enabled: true
                                                            }
                                                        },
                                                        series: {
                                                            cursor: 'pointer',
                                                            point: {
                                                                events: {
                                                                    click: function(e) {
                                                                        // LoadGraphPerSchool(day,this.zone);
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    },
                                                    legend: {
                                                        layout: 'vertical',
                                                        align: 'left',
                                                        verticalAlign: 'top',
                                                        x: 5,
                                                        y: -10,
                                                        floating: true,
                                                        borderWidth: 1,
                                                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                        shadow: true
                                                    },
                                                    credits: {
                                                        enabled: false
                                                    },
                                                    exporting: {
                                                        buttons: {
                                                            customButton: {
                                                                text: "<< Back",
                                                                x: -40,
                                                                onclick: function() {
                                                                    LoadClassWiseAttendance();
                                                                }
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: attendanceTitle,
                                                        data: attendance,
                                                        color: color
                                                    }]
                                                });
                                            }
                                        });
                                    }

                                    $.extend(Highcharts.Renderer.prototype.symbols, {
                                        anX: function(a, b, c, d) {
                                            return ["M", a, b, "L", a + c, b + d, "M", a + c, b, "L", a, b + d]
                                        },
                                        triangle: function(a, b, c, d) {
                                            return ["M", a, b, "L", a + c, b + c, a + c / 2, d, "Z"]
                                        },
                                        exportIcon: function(a, b, c, d) {
                                            return y(["M", a, b + c, "L", a + c, b + d, a + c, b + d * 0.8, a, b + d * 0.8, "Z", "M", a + c * 0.5, b + d * 0.8, "L", a + c * 0.8, b + d * 0.4, a + c * 0.4, b + d * 0.4, a + c * 0.4, b, a + c * 0.6, b, a + c * 0.6, b + d * 0.4, a + c * 0.2, b + d * 0.4, "Z"])
                                        }
                                    });

                                });
                            </script>
                            <script type="application/javascript">
                                $(function() {
                                    LoadEarningMonthly();

                                    function LoadEarningMonthly() {

                                        $('#earning_top_right_graph_title').html("Accounts Summary");
                                        $("#earning_top_right_graph_back_btn").hide();
                                        $('#earningGraph').highcharts({
                                            chart: {
                                                type: 'areaspline'
                                            },
                                            title: {
                                                text: '2021 Accounts Summary'
                                            },
                                            subtitle: {
                                                text: 'Click month income or expense column to view day wise account summary'
                                            },
                                            xAxis: {
                                                categories: [
                                                    'January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December'
                                                ],
                                                title: {
                                                    text: 'Month',
                                                    align: 'low'
                                                }
                                            },
                                            yAxis: {
                                                min: 0,
                                                title: {
                                                    text: 'Amount',
                                                    align: 'high'
                                                },
                                                labels: {
                                                    overflow: 'justify'
                                                }
                                            },
                                            tooltip: {
                                                pointFormat: '{series.name}: <b>{point.y}</b>'
                                            },
                                            plotOptions: {
                                                bar: {
                                                    dataLabels: {
                                                        enabled: true
                                                    }
                                                },
                                                series: {
                                                    cursor: 'pointer',
                                                    point: {
                                                        events: {
                                                            click: function(e) {
                                                                LoadDayWiseExpenseOrIncome(this.type, this.monthID, this.monthName, this.dayWiseData);
                                                            }
                                                        }
                                                    }
                                                }
                                            },
                                            legend: {
                                                layout: 'vertical',
                                                align: 'left',
                                                verticalAlign: 'top',
                                                x: 5,
                                                y: -10,
                                                floating: true,
                                                borderWidth: 1,
                                                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                shadow: true
                                            },
                                            credits: {
                                                enabled: false
                                            },
                                            series: [{
                                                name: 'Income',
                                                data: [{
                                                    y: 0,
                                                    monthID: '01',
                                                    monthName: 'January',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '02',
                                                    monthName: 'February',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '03',
                                                    monthName: 'March',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '04',
                                                    monthName: 'April',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '05',
                                                    monthName: 'May',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '06',
                                                    monthName: 'June',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '07',
                                                    monthName: 'July ',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '08',
                                                    monthName: 'August',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 62001000,
                                                    monthID: '09',
                                                    monthName: 'September',
                                                    'dayWiseData': '{"20":62001000}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '10',
                                                    monthName: 'October',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '11',
                                                    monthName: 'November',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, {
                                                    y: 0,
                                                    monthID: '12',
                                                    monthName: 'December',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'income'
                                                }, ],
                                                color: 'rgb(87,200,241)'
                                            }, {
                                                name: 'Expense',
                                                data: [{
                                                    y: 0,
                                                    monthID: '1',
                                                    monthName: 'January',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '2',
                                                    monthName: 'February',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '3',
                                                    monthName: 'March',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '4',
                                                    monthName: 'April',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '5',
                                                    monthName: 'May',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '6',
                                                    monthName: 'June',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '7',
                                                    monthName: 'July ',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '8',
                                                    monthName: 'August',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 4091000,
                                                    monthID: '9',
                                                    monthName: 'September',
                                                    'dayWiseData': '{"20":4091000}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '10',
                                                    monthName: 'October',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '11',
                                                    monthName: 'November',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, {
                                                    y: 0,
                                                    monthID: '12',
                                                    monthName: 'December',
                                                    'dayWiseData': '{"01":0}',
                                                    'type': 'expense'
                                                }, ],
                                                color: 'rgb(216,27,96)'
                                            }]
                                        });
                                    }

                                    function LoadDayWiseExpenseOrIncome(type, monthID, monthName, dayWiseData) {
                                        $('#earning_top_right_graph_title').html(monthName + " month " + type);
                                        $("#earning_top_right_graph_back_btn").show();
                                        $("#earning_top_right_graph_back_btn").unbind("click");
                                        $("#earning_top_right_graph_back_btn").on("click", function() {
                                            LoadEarningMonthly();
                                        });
                                        var categories = [];
                                        var series = [];
                                        var chartDayWiseData = [];
                                        var color = '#000';
                                        var tooltipTitle = '';

                                        if (type == 'income') {
                                            color = 'rgb(87,200,241)';
                                            tooltipTitle = 'Income';
                                        } else {
                                            color = 'rgb(216,27,96)';
                                            tooltipTitle = 'Expense';
                                        }

                                        $.ajax({
                                            type: 'POST',
                                            url: "https://demo.inilabs.net/school/v4.7/dashboard/dayWiseExpenseOrIncome",
                                            data: {
                                                "dayWiseData": dayWiseData,
                                                'type': type,
                                                'monthID': monthID,
                                                'monthName': monthName
                                            },
                                            dataType: "html",
                                            success: function(data) {
                                                data = $.parseJSON(data);
                                                $.each(data, function(i, value) {
                                                    categories.push('Day ' + i);
                                                    chartDayWiseData.push(value);
                                                });
                                                $('#earningGraph').highcharts({
                                                    chart: {
                                                        type: 'areaspline',
                                                        events: {
                                                            drillup: function(e) {
                                                                alert('drill Up');
                                                                console.log(this);
                                                                console.log(this.options.series[0].name);
                                                                console.log(this.options.series[0].data[0].name);
                                                            }
                                                        }
                                                    },
                                                    title: {
                                                        text: monthName + " month " + type
                                                    },
                                                    subtitle: {
                                                        text: ''
                                                    },
                                                    xAxis: {
                                                        categories: categories,
                                                        title: {
                                                            text: null
                                                        }
                                                    },
                                                    yAxis: {
                                                        min: 0,
                                                        title: {
                                                            text: 'Amount',
                                                            align: 'high'
                                                        },
                                                        labels: {
                                                            overflow: 'justify'
                                                        }
                                                    },
                                                    tooltip: {
                                                        pointFormat: '{series.name}: <b>{point.y}</b>'
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            dataLabels: {
                                                                enabled: true
                                                            }
                                                        },
                                                        series: {
                                                            cursor: 'pointer',
                                                            point: {
                                                                events: {
                                                                    click: function(e) {}
                                                                }
                                                            }
                                                        }
                                                    },
                                                    legend: {
                                                        layout: 'vertical',
                                                        align: 'left',
                                                        verticalAlign: 'top',
                                                        x: 0,
                                                        y: 0,
                                                        floating: true,
                                                        borderWidth: 1,
                                                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                        shadow: true
                                                    },
                                                    credits: {
                                                        enabled: false
                                                    },
                                                    exporting: {
                                                        buttons: {
                                                            customButton: {
                                                                x: -40,
                                                                onclick: function() {
                                                                    LoadEarningMonthly();
                                                                },
                                                                text: "<< Back",
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: tooltipTitle,
                                                        data: chartDayWiseData,
                                                        color: color
                                                    }]
                                                });
                                            }
                                        });
                                    }

                                });
                            </script>
                            <script type="application/javascript">
                                $(function() {
                                    $('#calendar').fullCalendar({
                                        theme: true,
                                        customButtons: {
                                            reload: {
                                                text: 'Reload',
                                                click: function() {}
                                            }
                                        },
                                        header: {
                                            left: 'prev,next today',
                                            center: 'title',
                                            right: 'month,agendaWeek,agendaDay,listMonth'
                                        },
                                        navLinks: true,
                                        editable: false,
                                        eventLimit: true,
                                        events: [{
                                            title: 'HACKATHON',
                                            start: '2020-10-29T00:00:00',
                                            end: '2020-10-29T23:00:00',
                                            url: 'https://demo.inilabs.net/school/v4.7/event/view/1',
                                            color: '#5C6BC0'
                                        }, {
                                            title: 'Football Tournament',
                                            start: '2020-09-17T00:00:00',
                                            end: '2020-10-15T23:00:00',
                                            url: 'https://demo.inilabs.net/school/v4.7/event/view/3',
                                            color: '#5C6BC0'
                                        }, {
                                            title: 'International Mother Language Day',
                                            start: '2020-02-20T00:00:00',
                                            end: '2020-03-22T23:00:00',
                                            url: 'https://demo.inilabs.net/school/v4.7/event/view/2',
                                            color: '#5C6BC0'
                                        }, {
                                            title: 'Eid-ul-Fitr',
                                            start: '2020-07-14',
                                            end: '2020-07-29',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/1',
                                            color: '#C24984'
                                        }, {
                                            title: 'Durga Puza 2020',
                                            start: '2020-08-16',
                                            end: '2020-08-20',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/2',
                                            color: '#C24984'
                                        }, {
                                            title: 'Victory Day',
                                            start: '2020-12-16',
                                            end: '2020-12-17',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/3',
                                            color: '#C24984'
                                        }, {
                                            title: 'Christmas Day',
                                            start: '2020-12-25',
                                            end: '2020-12-25',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/4',
                                            color: '#C24984'
                                        }, ]
                                    });
                                });
                            </script>
                            <script type="application/javascript">
                                $(function() {
                                    LoadVisitor();

                                    function LoadVisitor() {
                                        $('#visitor').highcharts({
                                            chart: {
                                                type: 'line',
                                                height: 240
                                            },
                                            title: {
                                                text: 'Site Stats'
                                            },
                                            subtitle: {
                                                text: ''
                                            },
                                            xAxis: {
                                                categories: [
                                                    '13 Jan'
                                                ],
                                                title: {
                                                    text: 'Date',
                                                    align: 'low'
                                                }
                                            },
                                            yAxis: {
                                                min: 0,
                                                title: {
                                                    text: 'Visitors',
                                                    align: 'high'
                                                },
                                                labels: {
                                                    overflow: 'justify'
                                                }
                                            },
                                            tooltip: {
                                                pointFormat: '{series.name}: <b>{point.y}</b>'
                                            },
                                            plotOptions: {
                                                bar: {
                                                    dataLabels: {
                                                        enabled: true
                                                    }
                                                },
                                                series: {
                                                    cursor: 'pointer',
                                                    point: {
                                                        events: {
                                                            click: function(e) {

                                                            }
                                                        }
                                                    }
                                                }
                                            },
                                            legend: {
                                                layout: 'vertical',
                                                align: 'left',
                                                verticalAlign: 'top',
                                                x: 5,
                                                y: -10,
                                                floating: true,
                                                borderWidth: 1,
                                                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                shadow: true
                                            },
                                            credits: {
                                                enabled: false
                                            },
                                            series: [{
                                                name: 'Visitors',
                                                data: [{
                                                    y: 3
                                                }, ],
                                                color: 'rgb(225,83,135)'
                                            }]
                                        });
                                    }

                                });
                            </script>
                        </div>
                    </div>
            </section>
@endsection