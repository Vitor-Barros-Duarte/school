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
<form action="{{route('student.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name_student">Nome completo</label>
        <input type="text"  required="required" name="name_student" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <label for="sex">Sexo</label>
              <select name="sex"  required="required" class="form-control">
              <option value="I">Não especificado</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
          </select>
            </div>
            <div class="form-group">
                <label for="name_course">Curso</label> <select id="name_course" name="name_course" class="form-control"></select>
            </div>
          <div class="col-md-6">
            <div class="form-group">
            <label for="birth_date">Data de nascimento</label>
            <input type="date" name="birth_date" class="form-control" placeholder="Data de Nascimento" aria-describedby="basic-addon1" required="required" maxlength="10" name="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"  />
            </div>

          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="tel" id="cpf" required="required" name="CPF" class="form-control" placeholder="CPF" aria-describedby="basic-addon1" />
            </div>

            <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="tel" id="phone" required="required" name="phone" class="form-control" placeholder="Telefone" aria-describedby="basic-addon1" />
            </div>

            <div class="col-md-6">
            <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP" aria-describedby="basic-addon1">
            </div>

            <div class="form-group">
            <label for="address">Endereço</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="Ex. Rua Brasil 999" aria-describedby="basic-addon1">
            </div>

            <div class="form-group">
            <label for="district">Bairro</label>
            <input type="text" id="district"name="district" class="form-control" placeholder="Bairro" aria-describedby="basic-addon1">
            </div>

            <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="Cidade" aria-describedby="basic-addon1">
            </div>

            <div class="form-group">
            <label for="state">Estado</label>
            <select name="state" id="uf" class="form-control">
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ" selected="selected">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
          </select>
            </div>
            <div class="col-md-4 pull-right">
                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
            </div>
        </div>
    </div>
</form>
@stop
@section('js')
@stop
