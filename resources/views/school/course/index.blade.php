@extends('adminlte::page') @section('title', 'Course')
@section('css')
	<style>
	.form-control{
		text-transform:uppercase
	}
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/EasyAutocomplete-1.3.5/easy-autocomplete.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
@stop
@section('Discipline')
@section('content')
<form id="formReg" action="{{route('course.index')}}" method="POST">
    @csrf
    @method("POST")
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Carga_horária</th>
            <th>disciplina</th>
            <th>Turma</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($course as $course)
           <tr>
              <td>{{ $course->id }}</td>
              <td>{{ $course->name_course }}</td>
              <td>{{ $course->load_hours }}</td>
              <td>{{ $course->Discipline }}</td>
              <td>
                <th class='d-flex'>
                    <a href="{{route('course.edit', $course->id)}}" class="btn btn-success me-mb-3"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{route('course.destroy', $course->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger me-md-3'><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            <ul class="nav nav-pills">
                <li class="">
                    <a href="{{route('course.create')}}" val="1" class="btn btn-success">Cadastrar
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
            </div>
        </div>
     </tbody>
</table>
@stop
@section('js')
@stop
