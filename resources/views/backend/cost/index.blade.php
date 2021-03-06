@extends('backend.master.master')
@section('title','Bảng báo giá')
@section('cost')
class="active"
@endsection
@section('content')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Bảng báo giá</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bảng báo giá</h1>
			</div>
		</div>
		@if (session('thongbao'))
			<div class="alert bg-success" role="alert">
				<svg class="glyph stroked checkmark">
					<use xlink:href="#stroked-checkmark"></use>
				</svg>{{ session('thongbao') }}<a href="{{ route('cost.index') }}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			</div>
		@endif
		<!--/.row-->
		<div class="row">
		@foreach ($costs as $cost)
	        <div style="text-align: center; margin-bottom: 50px;">
	        	<h3>Nội dung báo giá</h3>
	        	<p>{{ $cost->detail}}</p>
	        	<div style="margin-left: auto; margin-right: auto; margin-top: 40px;">
	        		<img src="public/backend/img/{{$cost->img}}">
	        	</div>
	        	<div>
                    <a href="{{ route('cost.edit', $cost->id) }}" class="btn btn-default form-control" onclick="$(this).closest('form').submit();"><i class="fa fa-pencil"></i> Cập nhật</a>
	        </div>
    	@endforeach
        </div>
			<!--end main-->
@endsection
