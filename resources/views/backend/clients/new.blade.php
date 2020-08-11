@extends('backend.layout.main')

@section('content')
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#" class="brkmn" id="0" name="cusmass_home.php">Destination</a></li>
  <li class="active">Destination Create</li>
</ul>
<!--START PAGE-->
<div class="page-content-wrap">
<div class="col-md-12">
<div class="panel panel-default">
<form class="form-horizontal" name="frmcu" id="frmcu" action="{{url('/client/save')}}" method="POST">
{{ csrf_field() }}  
<div class="panel-heading">
  <div class="panel-title-box">
    <h3>&nbsp;CLIENTS CREATE</h3>
  </div>
  <div class="pull-right">
    <button type="submit" class="btn btn-success" id="savfm"><span class="fa fa-floppy-o">&nbsp;</span>Save</button>
    <a  href="{{url('/clients')}}" class="btn btn-danger" id="clofm"><span class="fa fa-times">&nbsp;</span>Close</a>
  </div>
</div>
<div class="panel-body">

    <div class="row" style="padding-top:5px;">
    <h3 class="text-title">Clients Information</h3>
    <div class="col-md-6">
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Client Name</label>
        <div class="col-md-8 col-xs-12">
        	<input type="text" class="form-control" name="dena" id="dena" value="" autocomplete="off" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Image</label>
        <div class="col-md-6 col-xs-12">
        	<input type="file" class="form-control" name="cemd" id="cemd" value="" autocomplete="off"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Description</label>
        <div class="col-md-8 col-xs-12">
          <textarea class="form-control" name="dest" id="dest" rows="4"></textarea>
        </div>
      </div>
    </div>
    <div class="col-md-6">

    </div>

  </div>
</div>
</form>
@stop
