@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
<h4>CREATE</h4>

{!! Form::open(['route'=>'home.store'])  !!}
	{!! Form::text('tahun', null, ['placeholder' => 'Masukkan Tahun']) !!}
    {!! Form::text('angkot', null, ['placeholder' => 'Masukkan Data Angkot']) !!}
    {!! Form::text('bus', null, ['placeholder' => 'Masukkan Data Bis']) !!}
	{!! Form::text('truk', null, ['placeholder' => 'Masukkan Data Truk']) !!}
    {!! Form::text('spdamtr', null, ['placeholder' => 'Masukkan Data Sepeda Motor']) !!}
	{!! Form::submit('Simpan') !!}
{!! Form::close() !!}
@endsection
</div></div></div></div></div>