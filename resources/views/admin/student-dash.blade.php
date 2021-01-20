@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa icon-student"></i> </h3>


                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li class="active"></li>
                    </ol>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <h5 class="page-header">
                                <a href="{{route('user.create')}}">
                                    <i class="fa fa-plus"></i>
                                    Add a student </a>

                                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12 pull-right drop-marg">
                                    <select name="classesID" id='classesID' class='form-control select2'>
                                        <option value="0">Select Class</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Graduate</option>
                                    </select>
                                </div>
                            </h5>


                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Students</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="all" class="tab-pane active">
                                        <div id="hide-table">
                                            <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th class="col-sm-2">#</th>
                                                        <th class="col-sm-2">Photo</th>
                                                        <th class="col-sm-2">Name</th>
                                                        <th class="col-sm-2">Email</th>
                                                        <th class="col-sm-2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($student as $st)
                                                <tr>
                                                        <td data-title="#">{{ $st->id }}</td>

                                                        <td data-title="Photo">
                                                            <img src= {{$st->profile_photo_path}} width="35px" height="35px" class="img-rounded" alt="" />
                                                        </td>
                                                        <td data-title="Name">{{$st->name}}</td>
                                                        <td data-title="Email">{{$st->email}}</td>

                                                        <td data-title="Action">
                                                            <a href="{{route('user.show',$st)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fa fa-check-square-o"></i></a>
                                                            <a href="{{route('user.edit',$st)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                          
                                                           
                                                             <form action='{{route("user.destroy",$st)}}' method="Post" style="display:inline-block">
                                                                @csrf
                                                                  @method("delete")
                                                                   <button type="submit" class="btn btn-danger btn-xs mrg" ><i class="fa fa-trash-o"> </i></button>
                                                                                  </form>
                                                                </td>
                                                </tr>
                                                @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- nav-tabs-custom -->
                        </div> <!-- col-sm-12 -->
                    </div><!-- row -->
                </div><!-- Body -->
            </div><!-- /.box -->

            <script type="text/javascript">
                $(".select2").select2();

                $('#classesID').change(function() {
                    var classesID = $(this).val();
                    if (classesID == 0) {
                        $('#hide-table').hide();
                        $('.nav-tabs-custom').hide();
                    } else {
                        $.ajax({
                            type: 'POST',
                            url: "https://demo.inilabs.net/school/v4.7/student/student_list",
                            data: "id=" + classesID,
                            dataType: "html",
                            success: function(data) {
                                window.location.href = data;
                            }
                        });
                    }
                });


                var status = '';
                var id = 0;
                $('.onoffswitch-small-checkbox').click(function() {
                    if ($(this).prop('checked')) {
                        status = 'chacked';
                        id = $(this).parent().attr("id");
                    } else {
                        status = 'unchacked';
                        id = $(this).parent().attr("id");
                    }

                    if ((status != '' || status != null) && (id != '')) {
                        $.ajax({
                            type: 'POST',
                            url: "https://demo.inilabs.net/school/v4.7/student/active",
                            data: "id=" + id + "&status=" + status,
                            dataType: "html",
                            success: function(data) {
                                if (data == 'Success') {
                                    toastr["success"]("Success")
                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": false,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "500",
                                        "hideDuration": "500",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                } else {
                                    toastr["error"]("Error")
                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": false,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "500",
                                        "hideDuration": "500",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                }
                            }
                        });
                    }
                });
            </script>


        </div>
    </div>
</section>
@endsection