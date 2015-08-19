@extends('app')

@section('title') Role @endsection

@section('content')
  <div class="modal fade" id="tambahModal" role="dialog" aria-hidden="true">
    <form action="{{url('user/role/tambah')}}" method="post" class="form" id="form-tambah">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="tambahModalLabel">Tambah Role</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Unique Name</label>
              <input class="form-control" name="name">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input class="form-control" name="description">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success">Create</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-6 col-sm-offset-2">
            <select id="role" name="role" class="form-control">
              @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#tambahModal">
            Tambah</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="panel panel-default role-panel">
        <table class="table">
          <tr>
            <th>Role Name</th>
            <td id="role-name"></td>
          </tr>
          <tr>
            <th>Description</th>
            <td id="role-desc"></td>
          </tr>
          <tr>
            <th>Ability</th>
            <td id="role-perm"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
@endsection