@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Tunjangan Pegawai</div>

                <div class="panel-body">
                    {!! Form::model($tunjanganpegawai,['method' => 'PATCH','route'=>['tunjanganpegawi.update',$tunjanganpegawai->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
                    {!! Form::text('kode_tunjangan',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
                    {!! Form::text('id_user',null,['class'=>'form-control']) !!}
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