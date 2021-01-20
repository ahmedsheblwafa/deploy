extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-pencil"></i> Exam</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li class="active">Exam</li>
                    </ol>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <h5 class="page-header">
                                <a href="add-exam">
                                    <i class="fa fa-plus"></i>
                                    Add a exam </a>
                            </h5>

                            <div id="hide-table">
                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1">#</th>
                                            <th class="col-lg-3">Exam Name</th>
                                            <th class="col-lg-2">Date</th>
                                            <th class="col-lg-2">Note</th>
                                            <th class="col-lg-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title="#">
                                                1 </td>
                                            <td data-title="Exam Name">
                                                First Semester </td>
                                            <td data-title="Date">
                                                01 Apr 2020 </td>
                                            <td data-title="Note">
                                            </td>
                                            <td data-title="Action">
                                                <a href="edit-exam" class='btn btn-warning btn-xs mrg' data-placement='top' data-toggle='tooltip' data-original-title='Edit'><i class='fa fa-edit'></i></a>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>


                        </div> <!-- col-sm-12 -->
                    </div><!-- row -->
                </div><!-- Body -->
            </div><!-- /.box -->

        </div>
    </div>
</section>
@endsection