
@extends('layouts.template')
@section('layout_content')


  <h2>All our project</h2>
  <table class ="table table-striped">
    <tr>
        <th> NO </th>
        <th> name of university </th>
        <th> course </th>
        <th> criteria </th>
</tr>
 @foreach($projects as $pro)

<tr>
    <td>{{$loop-> index+1}}</td>
    <td><a href ="/Schools_info/{{$pro['id']}}">{{$pro['name']}}<a></td>
    <td>{{$pro['course']}}</td>
    <td>{{$pro['criteria']}}</td>

</tr>
 @endforeach
</table>
@endsection
