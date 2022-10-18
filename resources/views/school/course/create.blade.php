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
<form action="{{route('course.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class='form-group row'>
        <div class="col-md-12">
          <label for="name_course">Curso</label>
          <input type="text" class="form-control" id="name_course" name='name_course' placeholder="Curso">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="disciplines">disciplina</label>
            <select id="disciplines" name="disciplines[]" class="form-control js-example-basic-multiple" multiple style="width:100%">
            @foreach($disciplines as $discipline)
            <option value="{{$discipline->id}}">{{ $discipline->name_discipline }}</option>
            @endforeach</select>
        </div>
        <div class="col-md-6">
            <label for="load_hours">Carga_horária</label>
            <input type="time" class="form-control" id="load_hours" name='load_hours' placeholder="Carga_horária">
        </div>
        </form>
        <div class="col-md-4 pull-right">
          <button type="submit" class="btn btn-primary mb-3">Salvar</button>
        </div>
    </div>
  </form>
@stop
@section('js')
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    });
</script>
@stop
