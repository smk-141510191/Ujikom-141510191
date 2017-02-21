@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan</div>
        <div class="panel-body">
        <a class="btn btn-success" href="{{url('tunjanganpegawai/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <div class="panel-body">
                    <table class="table"d border="2">
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Nip Pegawai</th></center>
                                <th><center>uang Tunjangan</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach($tunjanganpegawai as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td><center>{{$data->pegawai->nip}}</td></center>
                            <td><center>{{$data->tunjangan->besaran_uang}}</td></center>
                             <td><center>
                                <a href="{{route('tunjanganpegawai.edit',$data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                            <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('tunjanganpegawai.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                        </tbody>
                        @endforeach
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
