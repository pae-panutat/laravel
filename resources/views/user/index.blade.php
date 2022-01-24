@extends('user.master')
@section('title','Welcome Homepage')
@section('content')
    <style>  
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Kanit:wght@300&display=swap');
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    
    <div class="container">
        <div class"row">
            <div class="col-md-12">
                <br><br>
                <div align="right"><a href="{{ route('user.create') }}" class="btn btn-success">เพิ่มข้อมูล</a></div><br>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>วันเริ่มต้น</th>
                        <th>แก้ไขล่าสุด</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>

                    @foreach($users as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['fname'] }}</td>
                        <td>{{ $row['lname'] }}</td>
                        <td>{{ $row['created_at'] }}</td>
                        <td>{{ $row['updated_at'] }}</td>
                        <td><a href="" class="btn btn-warning">แก้ไข</a></td>
                        <td><a href="" class="btn btn-danger">ลบ</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        
    </div>
   
@stop