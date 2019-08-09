@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Produk</div>
                <div><a href="{{ route('produk.create')}}" class="btn btn-danger">Tambah Produk</a></div>
                

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Ukuran</th>
                            <th>Warna</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->ukuran}}</td>
                            <td>{{$item->warna}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->harga}}</td>
                            <td>
                                 <a href="{{ route('produk.edit',$item->id)}}" class="btn btn-danger btn-sm">Edit</a>
                                 <form method="POST" action="{{route('produk.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                 <button type="submit" class="btn btn-info btn-sm">Delete</button>
                            </td>
                       
                        </tr>
                        <?php  $no++?>
                        
                        @endforeach

                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




