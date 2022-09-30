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
@section('content_header')
@stop
@section('content')
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
           <th>Nome</th>
           <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($Discipline as $discipline)
    <tr>
        <td>{{$discipline->id}}</td>
        <td>{{$discipline->discipline}}</td>
        <td>
            <th class='d-flex'>
            <a href="{{route('discipline.edit', $discipline->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{route('discipline.destroy', $discipline->id)}}" method='POST'>
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
