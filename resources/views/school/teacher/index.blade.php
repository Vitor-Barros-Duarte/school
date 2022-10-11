@extends('adminlte::page') @section('title', 'Teacher')
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
<form id="formReg" action="{{route('teacher.index')}}" method="POST">
    @csrf
    @method("POST")
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>disciplina</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($teacher as $teacher)
           <tr>
              <td>{{ $teacher->id }}</td>
              <td>{{ $teacher->name_teacher }}</td>
              <td>{{ $teacher->name_discipline }}</td>
              <td>{{ $teacher->name_team }}</td>
              <td>{{ $teacher->cpf }}</td>
              <td>
                <th class='d-flex'>
                    <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-success me-mb-3"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{route('teacher.destroy', $teacher->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger me-md-3'><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        <ul class="nav nav-pills">
            <li class="">
                <a href="{{route('teacher.create')}}" val="1" class="btn btn-success">Cadastrar
                    <i class="fas fa-plus"></i>
                </a>
            </li>
     </tbody>
    </table>
@stop
@section('js')
@stop
