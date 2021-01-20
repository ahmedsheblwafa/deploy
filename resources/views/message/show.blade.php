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
                        <li class="active">View Message</li>
                    </ol>
                </div>
                <div class="col-sm-3" style="margin-top: 3%;">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                       
                            <ul class="list-group list-group-unbordered">
                                <h3 class="profile-username text-center">Message Number:</h3>
                                <li class="list-group-item " style="background-color: #FFF;text-align:center">
                               <h4> {{$contactMessage->id}}</h4>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 3%;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Message Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row">
                                        <table >
                                        <tr>
                                        <th style="padding: 20px;">Message Title :</th>
                                        <td style="padding: 20px;">{{$contactMessage->subject}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Email :</th>
                                        <td style="padding: 20px;">{{$contactMessage->email}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Phone Number :</th>
                                        <td style="padding: 20px;">{{$contactMessage->phone}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Message :</th>
                                        <td style="padding: 20px;">{{$contactMessage->message}}</td>
                                        </tr>
                                        <tr>
                                        <th style="padding: 20px;">Time :</th>
                                        <td style="padding: 20px;">{{$contactMessage->created_at}}</td>
                                        </tr>
                                        
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>              
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection