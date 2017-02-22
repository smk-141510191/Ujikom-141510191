@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Lembur Pegawai</div>

                <div class="panel-body">
                    {!! Form::model($lemburpegawai,['method' => 'PATCH','route'=>['lemburpegawai.update',$lemburpegawai->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Kode Lembur', 'Kode Lembur') !!}
                    {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
                    {!! Form::text('id_pegawai',null,['class'=>'form-control']) !!}
                <div class="form-group">
                    {!! Form::label('Jumlah Jam', 'Jumlah Jam') !!}
                    {!! Form::text('jumlah_jam',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection