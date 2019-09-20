@extends('admin.layout.master')
@section('content')
    <h3>Danh Mục</h3>
    <table class="table-striped" border=1px style="width: 50%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Display_order</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->order_display}}</td>
                <td><a class="glyphicon glyphicon-heart" name="delete">Delete</a></td>
                <td><a class="glyphicon glyphicon-edit" name="edit">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection