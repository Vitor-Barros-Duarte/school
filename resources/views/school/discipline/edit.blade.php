@extends('adminlte::page') @section('title', 'Disciplina')
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
@if(session()->has('errors'))
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    <button type="button" class="closed" data-dismiss="alert" aria-label="Closed"><span aria-hidden="true">&times;</span></button>
    @if(is_string($errors))
        <p>{{$errors}}</p>
    @else
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
</div>
@endif
@endif
<form action="{{route('discipline.update', $discipline->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class='row'>
        <div class="col-md-12">
          <label for="discipline">Discipline</label>
          <input type="text" class="form-control" id="disciplinei" name='discipline' placeholder="Disciplina" value="{{$discipline->discipline}}">
        </div>
        <div class="col-md-4 pull-right">
          <button type="submit" class="btn btn-primary mb-3">Salvar</button>
        </div>
    </div>
  </form>

@stop
@section('js')
@stop
