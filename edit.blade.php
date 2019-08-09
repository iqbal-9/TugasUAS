@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Produk</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('produk.update',$produk['id']) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nama_barang" value="{{$produk['nama_barang']}}" type="text" class="form-control{{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{ old('nama_barang') }}" required autofocus>

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
                                <input id="ukuran" value="{{$produk['ukuran']}}" type="text" class="form-control{{ $errors->has('ukuran') ? ' is-invalid' : '' }}" name="ukuran" value="{{ old('ukuran') }}" required autofocus>

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
                                <input id="warna" value="{{$produk['warna']}}" type="text" class="form-control{{ $errors->has('warna') ? ' is-invalid' : '' }}" name="warna" value="{{ old('warna') }}" required autofocus>

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
                                <input id="stock" value="{{$produk['stock']}}" type="text" class="form-control{{ $errors->has('st') ? ' is-invalid' : '' }}" name="stock" value="{{ old('stock') }}" required autofocus>

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
                                <input id="harga" value="{{$produk['harga']}}" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') }}" required autofocus>

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
                                    {{ __('Edit') }}
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