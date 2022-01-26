@extends('user.master')
@section('title','จัดการฐานข้อมูล')
@section('content')
<style>  
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Kanit:wght@300&display=swap');
    body, h1, h2, h3, h4, h5, h6 {
        font-family: 'Kanit', sans-serif;
    }
</style>
<br>
<div class="container">
    <div class="col-md-12">
        <h3>แก้ไขข้อมูลผู้ใช้ระบบ</h3>
        
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <!--  @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif -->

        <form method="post" class="edit_form" action="{{ action('UserController@update', $id) }}"> <!-- user กำหนดจาก Route -->
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="ชื่อ" value="{{ $user->fname }}" required>
        </div>
        <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="นามสกุล" value="{{ $user->lname }}" required>
        </div>
        <button type="submit" class="btn btn-warning">แก้ไข</button> 
        <a href="{{ url('user') }}" class="btn btn-danger">ย้อนกลับ</a>
        <input type="hidden" name="_method" value="PATCH" />

        </form>
    </div>
</div>
<script>
        $( document ).ready(function() {
            $('.edit_form').on('submit', function(){
                if(confirm('edit?')){
                    return true;
                } else {
                    return false;
                }
            })            
        });
    </script>
@endsection