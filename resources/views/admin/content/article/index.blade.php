@extends('admin.layout.app')

@section('title')
  ADMIN - DisBudPar
@endsection

@section('topbar-title')
    Konten - Artikel
@endsection

@section('content')
          <!-- Begin Page Content -->
          <div class="container-fluid" id="contentWrapper">
            <!-- Page Heading -->
            <div class="row">
              <div class="col-lg-12 mb-3">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <div class="row">
                      <div class="col-6">
                        <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">List Artikel</h2>
                      </div>
                      <div class="col-6 text-end">
                        <a href="{{ route('admin.article.add') }}" class="btn btn-secondary">
                          <i class="fa fa-plus mr-1"></i> Tambah
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="listArtikel" class="table" style="width:100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Tanggal Dibuat</th>
                          <th>Tanggal Dipublish</th>
                          <th>Judul Artikel</th>
                          <th>Penulis</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $artikels as $a )
                          <tr>
                            <td>#</td>
                            <td>{{ $a->created_at->isoFormat('DD/MM/YYYY'); }}</td>
                            <td>{{ \Carbon\Carbon::parse($a->published_at)->isoFormat('DD/MM/YYYY') }}</td>
                            <td>{{ $a->judul_indo }}</td>
                            <td>{{ $a->penulis != 'admin' ? $a->kontributor_relasi->nama : 'admin' }}</td>
                            <td>
                              <span class="badge rounded-pill py-1 px-3 {{ $a->status == 'publikasi' ? 'bg-success' : 'bg-secondary' }}">{{ $a->status == 'publikasi' ? 'Aktif' : 'Draft' }}</span>
                            </td>
                            <td>
                              <a class="dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i>
                              </a>
                              <!--Menu-->
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('article_detail', $a->slug) }}">View</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.article.edit', $a->id) }}">Edit</a></li>
                                <li><a class="dropdown-item btn-hapus" href="javascript:void(0)" data-id="{{ $a->id }}">Hapus</a></li>
                              </ul>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        
@endsection

@section('js')
  <script>
    $(document).on('click', '.btn-hapus', function(e) {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          let id = $(this).attr("data-id");
          window.location.href = `/admin/konten/artikel/delete/${id}`
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    });
    </script>
@endsection
