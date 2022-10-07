@extends('adminlte::page') @section('title', 'Team')
@section('css')
	<style>
	.form-control{
		text-transform:uppercase
	}
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/EasyAutocomplete-1.3.5/easy-autocomplete.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
@stop
@section('content')
<form id="formReg" action="{{route('discipline.index')}}" method="POST">
    @csrf
    @method("POST")
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Turma</th>
            <th>curso</th>
            <th>Professor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($team as $team)
           <tr>
              <td>{{ $team->id }}</td>
              <td>{{ $team->name_team }}</td>
              <td>{{ $team->name_course }}</td>
              <td>{{ $team->name_teacher }}</td>
              <td>{{ $team->name_student }}</td>
              <td>
                <td>
                    <th class='d-flex'>
                    <a href="{{route('team.edit', $team->id)}}" class="btn btn-success me-mb-3"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{route('team.destroy', $team->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger me-md-3'><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
              </td>
           </tr>
        @endforeach
        <ul class="nav nav-pills">
            <li class="">
                <a href="{{route('team.create')}}" val="1" class="btn btn-success">Cadastrar
                    <i class="fas fa-plus"></i>
                </a>
            </li>
     </tbody>
    </table>
@stop
@section('js')
@stop
