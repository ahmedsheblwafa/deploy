@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-video-camera"></i> Magazine</h3>
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('magazine.index')}}">Magazine</a></li>
                        <li class="active">Add Post</li>
                    </ol>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action='{{route("magazine.store")}}'>
                               @csrf
                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Post Title 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="title" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                                <div class='form-group'> <label for="title" class="col-sm-2 control-label">
                                        Post Body 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="title" name="body" value="">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>



                             

                                <div class='form-group'>
                                    <label for="photo" class="col-sm-2 control-label">
                                        Photo </label>
                                    <div class="col-sm-6">
                                        <div class="input-group image-preview">
                                            <img src="">
                                            <input type="text" class="form-control image-preview-filename">
                                            <span class="input-group-btn">

                                                <div class="btn btn-success image-preview-input">
                                                    <span class="fa fa-repeat"></span>
                                                    <span class="image-preview-input-title">
                                                        File Browse</span>
                                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="picpath" />
                                                </div>
                                            </span>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="Add Post">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection