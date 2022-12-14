@extends('dashboard')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Proyek</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Proyek</a>
                    </li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weightbold">Nama Proyek</label>
                                    <input type="text" class="form-control @error('nama_proyek') is-invalid @enderror" name="nama_proyek" value="{{ old('nama_proyek') }}" placeholder="Masukkan Nama Proyek">
                                    @error('nama_proyek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">    
                                    <label class="font-weightbold">Departemen</label>
                                        <select class="form-control @error('id_departemen') is-invalid @enderror" name="id_departemen" value="{{ old('id_departemen') }}">
                                            @foreach ($departemen as $item)             
                                            <option value=""disabled selected style="display: none;">Pilih Departemen</option>    
                                                <option value="{{old('nama_departemen', $item->id)}}">{{old('nama_departemen', $item->nama_departemen)}}</option>
                                                @endforeach
                                        </select>
                                        @error('id_departemen')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror 
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="font-weightbold">Waktu Mulai</label>
                                    <input type="date" class="form-control datetimepicker @error('waktu_mulai') is-invalid @enderror" name="waktu_mulai" value="{{ old('waktu_mulai') }}">
                                    @error('waktu_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>@enderror
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weightbold">Waktu Selesai</label>
                                    <input type="date" class="form-control datetimepicker @error('waktu_selesai') is-invalid @enderror" name="waktu_selesai" value="{{ old('waktu_selesai') }}">
                                    @error('waktu_selesai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">    
                                    <label class="font-weightbold">Status</label>
                                        <select class="form-control @error('status') is-invalid @enderror" name="status">
                                            <option disabled selected style="display:none;">Pilih status</option>
                                            <option value=1>Berjalan</option>
                                            <option value=0>Selesai</option>
                                    </select>      
                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror 
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection