@extends('partials.siswa.navbar')
@section('title', 'Dashboard')
@section('container')

NISN : {{$siswa->id}}
Nama : {{$siswa->nama}}
    
{{-- @endforeach --}}

@stop