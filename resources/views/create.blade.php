@extends('master')
@section('title','จัดการฐานข้อมูล')
@section('content')
<br>
<div class="container">
    <div class="col-md-12">
        <h3>เพิ่มข้อมูลผู้ใช้ระบบ</h3>
        <form method="post" action="{{url('user')}}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="ชื่อ" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="lname" placeholder="นามสกุล" required>
        </div>
        <button type="submit" class="btn btn-primary">บันทึก</button>
        </form>
    </div>
</div>
@endsection