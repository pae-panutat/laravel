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

                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $errors)
                        <li>{{ $errors }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif

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
                        <td><a href="{{ action('UserController@edit', $row['id']) }}" class="btn btn-warning">แก้ไข</a></td>
                        <td>
                            <form method="post" class="delete_form" action="{{ action('UserController@destroy', $row['id']) }}"> {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">ลบ</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script>
        $( document ).ready(function() {
            $('.delete_form').on('submit', function(){
                if(confirm('delete?')){
                    return true;
                } else {
                    return false;
                }
            })            
        });
    </script>
@stop