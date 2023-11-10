
@extends('layouts.template')
@section('layout_content')


  <h2>All our project</h2>
  <table class ="table table-striped">
    <tr>
        <th> NO </th>
        <th> name </th>
        <th> Title </th>
        <th> hobbys </th>
        <th> age </th>
        <th> email </th>
        <th> gender</th>
        <th> nationality </th>
</tr>
@foreach($projects as $pro)

<tr>
    <td>{{$loop-> index+1}}</td>
    <td><a href ="/project/{{$pro['id']}}">{{$pro['name']}}<a></td>
    <td>{{$pro['majors']}}</td>
    <td>{{$pro['Hobbys']}}</td>
    <td>{{$pro['age']}}</td>
    <td>{{$pro['email']}}</td>
    <td>{{$pro['gender']}}</td>
    <td>{{$pro['nationality']}}</td>


</tr>
@endforeach
</table>
@endsection
