@extends('layouts.main')

<style>
    .kotak {
        position: relative;
        width: 33.3%;
        height: 250px;
        float: left;
        padding: 5px;
    },
    .kotak img:hover{
        opacity: 0.5;
    }
    .clear{
        clear: both;
    }
</style>

@section('container')
<h3 class="mt-3 mb-3">Mobil Manual</h3>

@foreach ($kendaraan as $k)
    @if ($k->transmisi === 'Manual')
    <div class="kotak">
        <img src="img/{{ $k->img }}" alt="{{ $k->tipe }} {{ $k->merek }}" style="width: 100%; height: 90%; object-fit:cover">
        <p style="text-align : center; margin-top: 5px">{{ $k->tipe }} {{ $k->merek }}</p>
    </div>
    @endif
@endforeach

<div class="clear"></div>

<h3 class="mt-3 mb-3">Mobil Matic</h3>

@foreach ($kendaraan as $k)
    @if ($k->transmisi === 'Automatic')
    <div class="kotak">
        <img src="img/{{ $k->img }}" alt="{{ $k->tipe }} {{ $k->merek }}" style="width: 100%; height: 90%; object-fit:cover">
        <p style="text-align : center; margin-top: 5px">{{ $k->tipe }} {{ $k->merek }}</p>
    </div>
    @endif
@endforeach

@endsection