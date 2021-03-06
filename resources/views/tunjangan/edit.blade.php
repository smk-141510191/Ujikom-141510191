@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Tunjangan</div>

                <div class="panel-body">
                    {!! Form::model($tunjangan,['method' => 'PATCH','route'=>['tunjangan.update',$tunjangan->id]]) !!}
                <div class="form-group">
                    {!! Form::label('Kode Tunjangan ', 'Kode Tunjangan ') !!}
                    {!! Form::text('kode_tunjangan',null,['class'=>'form-control']) !!}
                </div>
                 <div class="form-group">
                    {!! Form::label('Id jabatan', 'Id jabatan') !!}
                    {!! Form::text('id_jabatan',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Id golongan', 'Id golongan') !!}
                    {!! Form::text('id_golongan',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Status, 'Status') !!}
                    {!! Form::text('Status',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Jumlah Anak', 'Jumlah Anak') !!}
                    {!! Form::text('jumlah_anak',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                    {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
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