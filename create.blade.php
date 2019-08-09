@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADD NEW PRODUK</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('produk.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control{{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{ old('nama_barang') }}" required autofocus>

                                @if ($errors->has('nama_barang'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ukuran" class="col-md-4 col-form-label text-md-right">Ukuran</label>

                            <div class="col-md-6">
                                <input id="ukuran" type="text" class="form-control{{ $errors->has('ukuran') ? ' is-invalid' : '' }}" name="ukuran" value="{{ old('ukuran') }}" required>

                                @if ($errors->has('ukuran'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ukuran') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="warna" class="col-md-4 col-form-label text-md-right">Warna</label>
                             <div class="col-md-6">
                                <input id="warna" type="text" class="form-control{{ $errors->has('warna') ? ' is-invalid' : '' }}" name="warna" required>

                                @if ($errors->has('warna'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('warna') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Stock</label>
                             <div class="col-md-6">
                                <input id="stock" type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" required>

                                @if ($errors->has('stock'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>
                             <div class="col-md-6">
                                <input id="harga" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" required>

                                @if ($errors->has('harga'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ADD') }}
                                </button>
                                <a href="{{ route('produk.index') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection