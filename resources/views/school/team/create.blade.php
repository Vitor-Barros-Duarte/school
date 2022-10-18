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
<form action="{{route('team.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class='form-row col-lg-6'>
        <div class="col-lg-8 mt-4">
          <label for="name_Team">Turma</label>
          <input type="text" class="form-control" id="name_team" name='name_team' placeholder="Nome da Tuma">
        </div>
    </div>
    <div class="form-group">
        <label for="courses">Curso</label>
        <select id="courses" name="courses[]" class="form-control js-example-basic-multiple" multiple style="width:100%">
            @foreach($courses as $key=> $course)
            <option value="{{$key}}">{{ $course->name_course }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="teachers">Professores</label>
        <select id="teachers" name="teachers[]" class="form-control js-example-basic-multiple" multiple style="width:100%">
        @foreach($teachers as $teacher)
        <option value="{{$teacher->id}}">{{ $teacher->name_teacher }}</option>
        @endforeach</select>
    </div>
    <div class="col-md-6">
        <label for="students">Alunos</label>
        <select id="students" name="students[]" class="form-control js-example-basic-multiple" multiple style="width:100%">
        @foreach($students as $student)
        <option value="{{$student->id}}">{{ $student->name_student }}</option>
        @endforeach</select>
    </div>
    <div class="form-group">
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
