
@extends('layouts.template')
@section('layout_content')


  <h2>All our apply</h2>
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
@foreach($applies as $apply)

<tr>
    <p>Applied at Schools:
        @foreach($apply->schools as $school)
            {{ $school->name }},
        @endforeach
    </p>
    <p>Applied with Teachers:
        @foreach($apply->teachers as $teacher)
            {{ $teacher->name }},
        @endforeach
    </p>
    <!-- Display other relevant fields -->

</tr>
@endforeach
</table>
@endsection
