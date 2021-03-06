@extends('app')

@section('title')
  Barang
@endsection

@section('content')
  <div class="well well-sm">
    <ul class="nav nav-pills nav-justified">
      <li class="active">{!!link_to('barang','List')!!}</li>
      <li>{!!link_to('barang/create','Tambah')!!}</li>
      <li>{!!link_to('barang/export','Export')!!}</li>
      <li>{!!link_to('barang/import','Import')!!}</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Barang</div>
        @if(sizeof($data))
          <table class="table table-bordered table-striped">
            <tr>
              <th class="text-center">Kode</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Tipe</th>
              <th class="text-center">Harga 1</th>
              <th class="text-center">Harga 2</th>
              <th class="text-center">Aksi</th>
            </tr>
            @foreach($data as $row)
              <tr class="text-center">
                <td>{{$row['id']}}</td>
                <td>{{$row['nama']}}</td>
                <td>{{$row['tipebarang']}}</td>
                <td>{{$row['harga_jual1']}}</td>
                <td>{{$row['harga_jual2']}}</td>
                <td class="text-center">
                  {!!link_to('barang/show/'.$row['id'], 'show', ['class' => 'btn btn-default btn-sm'])!!}
                  {!!link_to('barang/edit/'.$row['id'], 'edit', ['class' => 'btn btn-primary btn-sm'])!!}
                  {!!link_to('barang/destroy/'.$row['id'], 'hapus', ['class' => 'btn btn-danger btn-sm'])!!}
                </td>
              </tr>
            @endforeach
          </table>
        @else
          <div class="panel-body">
            Data barang kosong.
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection