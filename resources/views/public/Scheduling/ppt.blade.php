@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pptx2html.css')}}">
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <h2>Power Point</h2>
            <p>This is the description page to explain the importance of  safety training and essential training.</p>
        </div>
        </div>
    </div>
    </div>
    <nav>
    <div class="container">
        <ol>
        <li><a href="index.html">Home</a></li>
        <li>Scheduling</li>
        <li>Power Point</li>
        </ol>
    </div>
    </nav>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">
            Presentation
        </h3>
        <button id="full-screen-btn" class="btn btn-success pull-right create" style="margin-left: 10px;">Full Screen</button>
        <button id="to-reveal-btn" class="btn btn-success pull-right create">Show</button>
        <button id="uploadBtn1" class="fileUpload btn btn-success pull-right import" style="margin-right:10px;"><i class="glyphicon glyphicon-upload"></i> PPt2<input type="file" class="upload" accept="application/vnd.openxmlformats-officedocument.presentationml.presentation"/></button>
        <button id="uploadBtn" class="fileUpload btn btn-success pull-right import" style="margin-right:10px;"><i class="glyphicon glyphicon-upload"></i> PPt1<input type="file" class="upload" accept="application/vnd.openxmlformats-officedocument.presentationml.presentation"/></button>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6"  >
                <img id="pptx-thumb" class="img-thumbnail" src="" alt="" style="float:right">
            </div>
            <div class="col-md-6" >
                <img id="pptx-thumb1" class="img-thumbnail" src="" alt="">
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <div class="progress">
                <div id="load-progress" class="progress-bar progress-bar-striped" style="transition: none;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    0%
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="result_block" class="hidden">
                    <h3>Slides:</h3>
                    <div id="result"></div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="reveal col-lg-12">
                    <div id="target" class="slides" style="position:relative;important!">
                    
                    </div>
                    <div class="row" style="margin-top:300px;"> 
                        <div id="buts" class="col-md-3 col-md-offset-10 row" style="display:none;">
                            <button  class="controls navigate-left col-md-6" aria-label="previous slide" ><i class="glyphicon glyphicon-minus"></i> Preview</button>
                            <button  class="controls navigate-right col-md-6" aria-label="next slide"><i class="glyphicon glyphicon-plus"></i> Next</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>

<style>
section {
	width: 100%;
	height: 640px;
	position: relative;
	text-align: center;
	overflow: hidden;
}

section div.block {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
}

section div.content {
	display: flex;
	flex-direction: column;
	/*
	justify-content: center;
	align-items: flex-end;
	*/
}

section div.v-up {
	justify-content: flex-start;
}
section div.v-mid {
	justify-content: center;
}
section div.v-down {
	justify-content: flex-end;
}

section div.h-left {
	align-items: flex-start;
	text-align: left;
}
section div.h-mid {
	align-items: center;
	text-align: center;
}
section div.h-right {
	align-items: flex-end;
	text-align: right;
}

section div.up-left {
	justify-content: flex-start;
	align-items: flex-start;
	text-align: left;
}
section div.up-center {
	justify-content: flex-start;
	align-items: center;
}
section div.up-right {
	justify-content: flex-start;
	align-items: flex-end;
}
section div.center-left {
	justify-content: center;
	align-items: flex-start;
	text-align: left;
}
section div.center-center {
	justify-content: center;
	align-items: center;
}
section div.center-right {
	justify-content: center;
	align-items: flex-end;
}
section div.down-left {
	justify-content: flex-end;
	align-items: flex-start;
	text-align: left;
}
section div.down-center {
	justify-content: flex-end;
	align-items: center;
}
section div.down-right {
	justify-content: flex-end;
	align-items: flex-end;
}

section span.text-block {
	/* display: inline-block; */
}

li.slide {
	margin: 10px 0px;
	font-size: 18px;
}

div.footer {
	text-align: center;
}

section table {
	position: absolute;
}

section table, section th, section td {
	border: 1px solid black;
}

section svg.drawing {
	position: absolute;
	overflow: visible;
}

section img {
	all: initial;
}
</style>
@endsection