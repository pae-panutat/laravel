@extends('user.master')
@section('title','Welcome Homepage')
@section('content')
    <style>  
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Kanit:wght@300&display=swap');
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    
    <h1>Index</h1>
    <a href="{{ route('user.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
@stop