@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <h2>Driving Test Lot</h2>
            <p>If the candidate passes the driving test, they will return to the trailer to await further instruction.</p>
        </div>
        </div>
    </div>
    </div>
    <nav>
    <div class="container">
        <ol>
        <li><a href="{{route('aspect.home')}}">Home</a></li>
        <li>Candidates</li>
        <li>Driving Test Lot</li>
        </ol>
    </div>
    </nav>
</div>

<section>
    <div class="col-lg-12" style="text-align:center;">
        <a class="btn btn-danger" href="{{route('hiring.docusign')}}">Pass</a>
    </div>
</section>
    
@endsection