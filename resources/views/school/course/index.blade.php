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
@section('content')
<form id="formReg" action="{{route('course.index')}}" method="POST">
    @csrf
    @method("POST")
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
           <th>Nome</th>
           <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @livewire('search-users')
        @foreach ($Courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->course}}</td>
            <td>{{$course->discipline}}</td>
            <td>{{$course->turma}}</td>
            <td>
                <th class='d-flex'>
                <a href="{{route('course.edit', $course->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{route('course.destroy', $course->id)}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button class='btn btn-danger'><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@stop
@section('js')
@stop
