@extends('layouts.main')

<style>
    .kotak{
        float: left;
        margin-right: 50px;
    }
    .clear{
        clear: both;
    }
</style>

@section('container')
{{-- <center> --}}
<h3 class="mt-3 mb-3">Owner</h3>
@foreach ($tims as $tim)
@if ($tim->job_title === 'Owner')
    <div class="card" style="width: 13rem;">
        <img src="img/{{ $tim->img }}" class="card-img-top" alt="Esha Sajaka">
        <div class="card-body">
        <h5 class="card-title">{{ $tim->name }}</h5>
    </div>
</div>
@endif
@endforeach

<h3 class="mb-3 mt-5">Trainer</h3>
@foreach ($tims as $tim)
@if ($tim->job_title === 'Trainer')
    <div class="card kotak" style="width: 13rem;">
        <img src="img/{{ $tim->img }}" class="card-img-top" alt="{{ $tim->name }}">
        <div class="card-body">
        <h5 class="card-title">{{ $tim->name }}</h5>
    </div>
</div>
@endif
@endforeach
<div class="clear"><br></div>
{{-- </center> --}}
@endsection