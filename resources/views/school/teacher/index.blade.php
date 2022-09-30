@extends('adminlte::page') @section('title', 'Stock')
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
           <th>Nome</th>
           <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @livewire('search-course')
    @foreach ($Teachers as $teacher)
    <tr>
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->teacher_name}}</td>
        <td>{{$teacher->course}}</td>
        <td>{{$teacher->discipline}}</td>
        <td>{{$teacher->team}}</td>

        <td>
            <th class='d-flex'>
            <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{route('teacher.destroy', $teacher->id)}}" method='POST'>
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
