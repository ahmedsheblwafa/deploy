@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-video-camera"></i> Message</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('message.index')}}">Message</a></li>
                    </ol>
                </div>
        </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                           

                            <div id="hide-table">
                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1">#</th>
                                            <th class="col-sm-3">Message Title</th>
                                            <th class="col-sm-1">Time</th>
                                            <th class="col-sm-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactMessage as $msg)
                                        <tr>
                                            <td data-title="#">{{$msg->id}}</td>
                                            <td data-title="name">{{$msg->subject}}</td>
                                            <td data-title="grade">{{$msg->create_at}}</td>

                                            <td data-title="Action">
                                                <a href="{{route('message.show',$msg)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fa fa-check-square-o"></i></a>
                                                <form action='{{route("message.destroy",$msg)}}' method="Post" style="display:inline-block">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-danger btn-xs mrg"><i class="fa fa-trash-o"> </i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection