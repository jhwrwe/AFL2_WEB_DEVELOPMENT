
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
    <td>{{ $apply->id_apply }}</td>

        @foreach ($teacher as $teach )


        @if($teach['id'] == $apply->id_teacher_apply )
              <td>{{ $teach['name'] }}</td>
        @endif
     @endforeach
     @foreach ($schools as $Sch )


     @if($Sch['id'] == $apply->id_school_apply )
           <td>{{ $Sch['name'] }}</td>
     @endif
  @endforeach
    <td>{{ $apply->status }}</td>
</tr>
@endforeach
</table>
@endsection
