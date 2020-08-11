@extends('layouts.main')

@section('content')
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#" class="brkmn" id="0" name="cusmass_home.php">Food Menu</a></li>
  <li class="active">Menu Create</li>
</ul>
<!--START PAGE-->
<div class="page-content-wrap">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
  <div class="panel-title-box">
    <h3>&nbsp;MENU REGISTRATION</h3>
  </div>
  <div class="pull-right">
    <button class="btn btn-success panel-refresh" id="savfm"><span class="fa fa-floppy-o">&nbsp;</span>Save</button>
    <a  href="{{url('/menu')}}" class="btn btn-danger" id="clofm"><span class="fa fa-times">&nbsp;</span>Close</a>
  </div>
</div>
<div class="panel-body">
<form class="form-horizontal" name="frmcu" id="frmcu" action="" method="POST">
    <div class="row" style="padding-top:5px;">
    <h3 class="text-title">Menu Information</h3>
    <div class="col-md-6">
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Menu Name</label>
        <div class="col-md-8 col-xs-12">
        	<input type="text" class="form-control" name="cuna" id="cuna" value="" autocomplete="off" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Image</label>
        <div class="col-md-6 col-xs-12">
        	<input type="file" class="form-control" name="cemd" id="cemd" value="" autocomplete="off"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label text-left">Menu Category</label>
        <div class="col-md-4">
            <select class="form-control select" id="cgty" name="cgty">
                <option value="" selected>SelectMenu Category</option>
                <option value="1">Debit</option>
                <option value="2">Credit</option>
            </select>
        </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Remark</label>
        <div class="col-md-8 col-xs-12">
          <textarea class="form-control" name="remk" id="remk" rows="4"></textarea>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table">
          <thead>
          <tr><td><b>Item Name</b></td>
          <td><b>Description</b>
          <td><b>Amount</b></td>
          <td></td>
          </tr>
          <tr>
              <td><input type="text" class="form-control" id="invsno"></td>
              <td><input type="text" class="form-control" id="dscrp"></td>

              <td><input type="text" class="form-control" id="amount"></td>
              <td>
              <button type="button" class="btn btn-danger btn-sm" id="sttlplus">
                  <i class="fa fa-plus"></i>
              </button>
              </td>
          </tr>
          </thead>
          <tbody id="stlmdata">
          </tbody>
      </table>
    </div>

  </div>
</form>
</div>

@stop
