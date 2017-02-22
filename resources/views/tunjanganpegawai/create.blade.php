@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">Tambah Data Tunjangan Pegawai</div>
        <div class="panel-body">
            <form method="POST" action="{{url('tunjanganpegawai')}}">
                {{csrf_field()}}
                    
                             <div class="control-group">
                        <label class="control-label">Tunjangan Pegawai</label>
                        <div class="controls">
                            <select class="form-control" name="kode_tunjangan">
                            <option>Pilih</option>
                                @foreach ($tunjangan as $data)
                                <option value="{{ $data->id }}">{{ $data->tunjangan->kode_tunjangan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Nama Pegawai</label>
                        <div class="controls">
                            <select class="form-control" name="id_user">
                            <option>Pilih</option>
                                @foreach ($pegawai as $data)
                                <option value="{{ $data->id }}">{{ $data->pegawai->User->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="submit" value="Tambah">
                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
