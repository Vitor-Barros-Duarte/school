@extends('adminlte::page') @section('title', 'Student')
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
<form id="formReg" action="{{route('student.index')}}" method="POST">
    @csrf
    @method("POST")
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
           <th>Nome</th>
           <th>Aluno</th>
           <th>Curso</th>
           <th>Data de nascimento</th>
           <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($student as $student)
           <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->name_student }}</td>
              <td>{{ $student->name_course }}</td>
              <td>{{ $student->name_discipline }}</td>
              <td>{{ $student->name_team }}</td>
              <td>{{ $student->cpf }}</td>
              <td>{{ $student->birth_date }}</td>
              <td>
                <th class='d-flex'>
                    <a href="{{route('student.edit', $student->id)}}" class="btn btn-success me-mb-3"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{route('student.destroy', $student->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger me-md-3'><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        <ul class="nav nav-pills">
            <li class="">
                <a href="{{route('student.create')}}" val="1" class="btn btn-success">Cadastrar
                    <i class="fas fa-plus"></i>
                </a>
            </li>
     </tbody>
    </table>
@stop
@section('js')
@stop
