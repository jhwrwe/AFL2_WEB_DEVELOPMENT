
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


    <tr>

        <td>{{ $project['name'] }}</td>
    <td><a href ="/teachers_info/CV/{{$project['id']}}">see CV<a></td>


    </tr>

    </table>

@endsection
