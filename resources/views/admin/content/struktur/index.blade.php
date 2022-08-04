@extends('admin.layout.app')

@section('title')
  ADMIN - DisBudPar
@endsection

@section('topbar-title')
    Konten - Struktur
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
                        <h2 class="m-0 font-weight-bold sub-judul">List Struktur</h2>
                      </div>
                      <div class="col-6 text-end">
                        <a href="{{ route('admin.struktur.add') }}" class="btn btn-secondary">
                          <i class="fa fa-plus mr-1"></i> Tambah
                        </a>
                        {{-- <a href="{{ route('admin.konten.cetak') }}?cetak=Struktur" class="btn btn-secondary bg-success">
                          <i class="fa fa-print mr-1"></i> Cetak
                        </a> --}}
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="listArtikel" class="table" style="width:100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Tanggal Dibuat</th>
                          <th>Judul Artikel</th>
                          <th>Penulis</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $bangunan as $f )
                        <tr>
                          <td>#</td>
                          <td>{{ $f->created_at->isoFormat('DD/MM/YYYY'); }}</td>
                          <td>{{ $f->nama }}</td>
                          <td>{{ $f->user_id != null ? $f->user->nama : 'Admin Cagar Budaya' }}</td>
                          <td>
                            <span class="badge rounded-pill py-1 px-3 {{ $f->status == 'publikasi' ? 'bg-success' : 'bg-secondary' }}">{{ $f->status == 'publikasi' ? 'Aktif' : 'Draft' }}</span>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i>
                              </a>
                              <!--Menu-->
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('struktur_detail', $f->slug) }}">View Artikel</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.struktur.edit', $f->id) }}">Edit</a></li>
                                <li><a class="dropdown-item btn-hapus" href="javascript:void(0)" data-id="{{ $f->id }}">Hapus</a></li>
                                <li><a class="dropdown-item btn-vqr" href="javascript:void(0)" data-id="{{ $f->id }}">View QR</a></li>
                              </ul>
                            </div>
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

@section('modal')
     <div class="modal" tabindex="-1" id="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Qr Code</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex justify-content-center">
            ...
          </div>
          <div class="modal-footer">
            <a href="" class="btn btn-secondary">Cetak</a>
          </div>
        </div>
      </div>
    </div>
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
          window.location.href = `/admin/parasanganta/struktur/delete/${id}`
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    });

    $(document).on('click', '.btn-vqr', function(e) {
      let id = $(this).attr("data-id");
      $($.ajax({
        url: `/admin/parasanganta/struktur/qr/${id}`,
        success: function (response) {
          $('#modal .modal-body').html(atob(response.qrCode));
          $('#modal .modal-footer').find('a').attr('href', `/admin/parasanganta/konten/cetak/${response.slug}?cetak=struktur`);
          $('#modal').modal('show');
        }
      }));
    });

    $('.btn-close').click(function(e) {
      $('#modal').modal('hide');
    });
    </script>
@endsection
