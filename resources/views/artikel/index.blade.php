@extends('layouts.master')
@section('content')

<section class="content-header">
      <div class="container-fluid">
        @include('alert')
        
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="mr-auto card">
                      <a href="/artikel/create" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-plus-square" aria-hidden="true"></i>Add Post</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <td>No</td>
                    <td>Judul</td>
                    <td>Isi</td>
                    <td>Slug</td>
                    <td>Tanggal Dibuat</td>
                    <td>Aksi</td>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_artikel as $index => $data)
                    <tr>
                      <td>{{ $index +1 }}</td>
                      <td>{{ $data->judul }} </td>
                      <td>{{ $data->isi}}</td>
                      <td>{{ $data->slug}}</td>
                      <td>{{ $data->created_at->format('d M Y')}}</td>
                      <td>
                        <a href="{{ route('artikel.show', $data->id) }}"  class="btn btn-info btn-sm"><i class="nav-icon fas fa-eye" aria-hidden="true"></i></a>
                        <a href="{{route('artikel.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit" aria-hidden="true"></i></a>
                        <a href="{{route('artikel', $data->id)}}" class="btn btn-danger btn-sm delete" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="nav-icon fas fa-trash" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@stop
@section('footer')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>
@stop
