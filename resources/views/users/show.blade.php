@extends('layouts.app')
@section('title',$user->name.'的个人中心')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="card">
            <img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" class="card-img-top" alt="{{ $user->name }}">
            <div class="card-body">
                <h5><strong>个人简介</strong></h5>
                <p>{{ $user->introduction }}</p>
                <hr>
                <h5><strong>注册于</strong></h5>
                <p>{{ $user->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-0">{{ $user->name }} <small>{{ $user->email }}</small></h1>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                here are somethings
            </div>
        </div>
    </div>
</div>
@stop