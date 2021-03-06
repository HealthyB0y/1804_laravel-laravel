@extends('layout.admin')

@section('title', 'List post')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Category Tables
<small>advanced tables</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Tables</a></li>
<li class="active">Posts tables</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Hover Data Table</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
</tr>
</thead>
<tbody>
@foreach($categories as $category)
<tr>
<td>{{$post->id}}</td>
<td>{{$post->name}}</td>
</tr>
@endforeach
</table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection