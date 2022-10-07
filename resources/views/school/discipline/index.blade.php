@extends('adminlte::page') @section('title', 'Discipline')
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
           <th>nome</th>
           <th>course</th>
           <th>Professor</th>
           <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($discipline as $discipline)
            <tr>
              <td>{{ $discipline->id }}</td>
              <td>{{ $discipline->name_discipline }}</td>
              <td>{{ $discipline->load_hours }}</td>
              <td>
              </td>
              <th class='d-flex'>
                <a href="{{route('discipline.edit', $discipline->id)}}" class="btn btn-success me-mb-3"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{route('discipline.destroy', $discipline->id)}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button class='btn btn-danger me-md-3'><i class="fas fa-trash-alt"></i></button>
                </form>
                </td>
            </tr>
        @endforeach
        <ul class="nav nav-pills">
            <li class="">
                <a href="{{route('discipline.create')}}" val="1" class="btn btn-success">Cadastrar
                    <i class="fas fa-plus"></i>
                </a>
            </li>
     </tbody>
    </table>
@stop
@section('js')
@stop
