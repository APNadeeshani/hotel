@extends('backend.hoteladmin.main')

@section('content')
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#" class="brkmn" id="0" name="cusmass_home.php">Hotel Admin</a></li>
  <li class="active">Welcome</li>
</ul>
<!--START PAGE-->
<div class="page-content-wrap">
<div class="col-md-12">
<div class="panel panel-default">
<form class="form-horizontal" name="frmcu" id="frmcu" action="{{url('/destination/save')}}" method="POST">
{{ csrf_field() }}  
<div class="panel-heading">
  <div class="panel-title-box">
    <h3>&nbsp;</h3>
  </div>
  <div class="pull-right">
  </div>
</div>
<div class="panel-body">

    <div class="row" style="padding-top:5px;">
    <h3 class="text-title">Welcome to hotel express</h3>
    <div class="col-md-6">

    </div>
    <div class="col-md-6">

    </div>

  </div>
</div>
</form>
@stop
