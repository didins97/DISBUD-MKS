@extends('admin.layout.app')

@section('title')
  ADMIN - DisBudPar
@endsection

@section('topbar-title')
    Edit - Konten Labu
@endsection

@section('content')
      <form method="post" action="{{ route('admin.konten_labu.update', $konten->id) }}" enctype="multipart/form-data">
        @csrf
        <!-- Begin Page Content -->
        <div class="container-fluid" id="contentWrapper">
            <!-- Page Heading -->

            <div class="row">
              <div class="col-lg-12 mb-3">
                <div class="card shadow mb-4">
                  @if (count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                      {{ $errors->first() }}
                    </div>
                  @endif
                  <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Edit Konten Labu</h2>
                  </div>
                  <div class="card-body">
                      <div class="mb-3">
                        <label for="judulArtikelBahasa" class="form-label">Nama</label>
                        <input required value="{{$konten->judul }}" type="text" name="judul" class="form-control" id="judulArtikelBahasa" placeholder="masukkan judul konten labu">
                      </div>
                      <div class="mb-3">
                        <label for="isiArtikelBahasa" class="form-label">Konten</label>
                        <textarea required class="form-control editor" name="isi" id="editor" rows="8">{{$konten->isi}}</textarea>
                      </div>
                    <div class="mb-3">
                        <label for="metaDesID" class="form-label">Meta Description</label>
                        <textarea name="meta" class="form-control" id="metaDesID" rows="2" maxlength="160" placeholder="masukkan meta description">{{ $konten->meta }}</textarea>
                        <little>maks 160 karakter</little>
                      </div>
                      <div class="mb-3">
                        <label for="keywordsID" class="form-label">Keywords</label>
                        <input name="keywords" value="{{ $konten->keywords }}" id="keywordsID" type="text" class="form-control tagin">
                        <little>gunakan tombol "," (koma) untuk memisahkan keyword</little>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mb-3">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Thumbnail</h2>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <img class="preview mb-3 text-center" src="{{ asset('storage/assets/foto/thumbnail/' .$konten->thumbnail) }}" />
                      </div>
                    </div>
                    <div class="mb-4">
                      <input name="thumbnail" class="form-control" id="uploadThumbnail" type="file" data-preview=".preview" accept="image/png, image/jpeg">
                    </div>
                    <div class="mb-3">
                      <h5>Panduan unggah gambar</h5>
                      <ol>
                        <li>Resolusi gambar yang di unggah, <b>1280 x 720</b></li>
                        <li>Ukuran gambar tidak lebih dari <b>1 Mb</b></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-12 mb-3">
                <div class="card shadow mb-4" id="containerSliderFoto">
                  <div class="card-header py-3">
                    <div class="row">
                      <div class="col-6">
                        <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Slider</h2>
                      </div>
                      <div class="col-6 text-end">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalPanduan">
                          <i class="fa fa-book"></i> Panduan
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body row" id="fotoSliderBody">
                    @php
                    for( $i = 0; $i < count(unserialize($konten->galleries)); $i++ ) : @endphp
                    @if( $i != 0 )
                      <div class="col-md-12 wrapper-foto-slider" data-id="{{ $i + 1 }}">
                        <div class="row">
                          <div class="col-sm-4">
                            <img class="sliderPreview" src="{{ asset('storage/assets/foto/galleries/' . unserialize($konten->galleries)[$i] ) }}" width="100%">
                          </div>
                          <div class="col-sm-7">
                            <div class="row">
                              <div class="col-12 mb-2">
                                <input value="{{ asset('storage/assets/foto/galleries/' . unserialize($konten->galleries)[$i]) }}" class="form-control" name="galleries_foto[]" id="uploadThumbnail" type="file" data-preview=".sliderPreview" accept="image/png, image/jpeg">
                              </div>
                              <div class="col-12 mb-2">
                                <textarea name="caption_galleries_foto[]" required maxlength="100" class="form-control" id="captionFoto" rows="2" placeholder="masukkan caption disini">{{ unserialize($konten->caption_galleries)[$i] }}</textarea>
                                <little><sup>*</sup> maksimsal 100 karakter</little>
                              </div>
                              {{-- <div class="col-12 mb-2">
                                <textarea name="caption_slider_foto_english[]" maxlength="100" class="form-control" id="captionFotoEn" rows="2" placeholder="insert caption here">{{ is_null($konten->caption_slider_foto_english) ? '' : unserialize($konten->caption_slider_foto_english)[$i] }}</textarea>
                                <little><sup>*</sup>english caption, max 100 character</little>
                              </div> --}}
                            </div>
                          </div>
                          <div class="col-sm-1">
                            <button type="button" class="btn btn-danger btn-hapus-foto" {{ $i == 0 ? 'disabled' : '' }} data-id="{{ $i+1 }}">
                              <i class="fa fa-trash-alt"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    @else
                    <div class="col-md-12 wrapper-foto-slider">
                      <div class="row">
                        <div class="col-sm-4">
                          <img class="sliderPreview" src="{{ asset('storage/assets/foto/galleries/' . unserialize($konten->galleries)[$i] ) }}" width="100%">
                        </div>
                        <div class="col-sm-7">
                          <div class="row">
                            <div class="col-12 mb-2">
                              <input class="form-control" name="galleries_foto[]" id="uploadThumbnail" type="file" data-preview=".sliderPreview" accept="image/png, image/jpeg">
                            </div>
                            <div class="col-12 mb-2">
                              <textarea name="caption_galleries_foto[]" required maxlength="100" class="form-control" id="captionFoto" rows="2" placeholder="masukkan caption disini">{{ unserialize($konten->caption_galleries)[$i] }}</textarea>
                              <little><sup>*</sup> maksimsal 100 karakter</little>
                            </div>
                            {{-- <div class="col-12 mb-2">
                              <textarea name="caption_galleries_english[]" maxlength="100" class="form-control" id="captionFotoEn" rows="2" placeholder="insert caption here">{{ is_null($konten->caption_slider_foto_english) ? '' : unserialize($konten->caption_slider_foto_english)[$i] }}</textarea>
                              <little><sup>*</sup>english caption, max 100 character</little>
                            </div> --}}
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <button type="button" class="btn btn-danger btn-hapus-foto" {{ $i == 0 ? 'disabled' : '' }} data-id="{{ $i+1 }}">
                            <i class="fa fa-trash-alt"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    @endif
                    @php
                        endfor;
                    @endphp
                  </div>
                  <div class="card-footer text-center">
                    <button type="button" class="btn btn-primary" id="tambahFoto">
                      <i class="fa fa-plus"></i> Tambah Foto
                    </button>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 mb-3">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Tag Konten Labu</h2>
                  </div>
                  <div class="card-body">
                      <div class="mb-3">
                        <label for="isiArtikelEnglish" class="form-label">Kategori WBTB</label>
                        <div class="px-3 row">
                          <div class="col-lg-4">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="is_wbtb" id="is_wbtb1" value="1" {{ $konten->is_wbtb ? 'checked' : '' }}>
                              <label class="form-check-label" for="is_wbtb1">
                                Konten WBTB
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="is_wbtb" id="is_wbtb2" value="0" {{ !$konten->is_wbtb ? 'checked' : '' }}>
                              <label class="form-check-label" for="is_wbtb2">
                                Bukan Konten WBTB
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="isiArtikelEnglish" class="form-label">Kategori OPK</label>
                         <div class="px-3 row">
                            <div class="col-lg-4">
                                @php $ids = $konten->kategori_opk->pluck('id'); @endphp
                                @foreach( $kategori_opk as $k )
                                <div class="form-check">
                                    @php
                                    $checked = '';
                                    foreach( $ids as $id ) {
                                        if( $id == $k->id ) {
                                        $checked = 'checked';
                                        }
                                    }
                                    @endphp
                                    <input class="form-check-input" {{ $checked }} name="kategori_opk[]" type="checkbox" value="{{ $k->id }}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $k->isi }}
                                    </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="isiArtikelEnglish" class="form-label">Pengaturan</label>
                        <div class="px-3 row">
                          <div class="col-lg-4">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="slider_utama" value="slider_utama" id="peng-slider">
                              <label class="form-check-label" for="peng-slider">
                                Tampilkan di Slider Utama
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

             </div>
             <div id="fotoSlider" class="col-lg-12 mb-3" style="display: none;">
              <div class="card shadow mb-4">
               <div class="card-header py-3">
                 <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Foto Slider</h2>
               </div>
               <div class="card-body ">
                 <div class="row">
                   <div class="col-lg-12 text-center">
                     <img class="foto-slider preview mb-3 text-center" src="{{ asset('assets/admin/img/noimage.jpg') }}" />
                   </div>
                 </div>
                 <div class="mb-4">
                   <input class="form-control" name="slider" id="uploadSlider" type="file" data-preview=".foto-slider" accept="image/png, image/jpeg" >
                 </div>
                  <div class="mb-3">
                    <h5>Panduan unggah gambar</h5>
                    <ol>
                      <li>Resolusi gambar yang di unggah, <b>1280 x 720</b></li>
                      <li>Ukuran gambar tidak lebih dari <b>1 Mb</b></li>
                    </ol>
                  </div>
               </div>
             </div>
           </div>
           <div id="kontributor" class="col-lg-12 mb-3" style="display: none;">
             <div class="card shadow mb-4">
               <div class="card-header py-3">
                 <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Kontributor</h2>
               </div>
               <div class="card-body ">
                 <div class="mb-3">
                   <label for="jenisKontributor" class="form-label">Jenis Kontributor</label>
                     <select name="contributor_type" class="form-select mb-4" aria-label="select kontributor">
                       <option value="" selected>Jenis Kontributor</option>
                       <option value="pamong budaya">Kontributor Pamong Budaya</option>
                       <option value="umum ">Kontributor Umum</option>
                     </select>
                 </div>
                 <div class="mb-3">
                   <label for="namaKontributor" class="form-label">Nama Kontributor</label>
                   <select id="namaKontributor" name="id_kontributor" class="form-select select2-style" aria-label="Default select example">
                     <option value="" selected>Pilih Kontributor</option>
                     {{-- @foreach( $kontributor as $k )
                       <option value="{{ $k->id }}">{{ $k->nama }}</option>
                     @endforeach --}}
                   </select>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-12 mb-3">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-gray-800 sub-judul">Tanggal Konten</h2>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class='col-lg-6'>
                    <label for="tanggalPublish" class="form-label">Tanggal Publish</label>
                    <input required name="publish_date" value="{{ explode(" ", $konten->published_at)[0] }}" type="date" class="form-control" id="tanggalPublish">
                  </div>
                  <div class='col-lg-6'>
                    <label for="waktuPublish" class="form-label">Waktu Publish</label>
                    <input required name="publish_time" value="{{ substr(explode(" ", $konten->published_at)[1], 0,5) }}" type="time" class="form-control" id="waktuPublish">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mb-5 text-center">
            <button name="draft" value="draft" class="btn btn-lg btn-secondary mr-3">
              Save as Draft
            </button>
            <button name="publish" value="publish" class="btn btn-lg btn-success">
              Publish
            </button>
          </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </form>
        <!-- Panduan Modal -->
        <div class="modal fade" id="modalPanduan" tabindex="-1" aria-labelledby="modalPanduanLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalPanduanLabel">Panduan Pengunggahan Gambar Slider</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ol>
                  <li>Resolusi gambar yang di unggah, <b>1280 x 720</b></li>
                  <li>Ukuran gambar tidak lebih dari <b>1 Mb</b></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('js')
<script>
  var i = 1;
    var x = 1;
    $("#tambahFoto").click(function() {
      i++;
      if (x < 10) {
        x++;
        document.querySelector('#fotoSliderBody').insertAdjacentHTML(
          'beforeend',
          `<div class="col-md-12 wrapper-foto-slider" data-id="` + i + `">
              <div class="row">
                <div class="col-sm-4">
                  <img src="{{ asset('assets/admin/img/noimage.jpg') }}" width="100%" class="sliderPreview` + i + `" name="preview-slider` + i + `">
                </div>
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-12 mb-2">
                      <input required class="form-control" name="galleries_foto[]" id="uploadThumbnail" type="file" data-preview=".sliderPreview` + i + `" accept="image/png, image/jpeg">
                    </div>
                    <div class="col-12 mb-2">
                      <textarea name="caption_galleries_foto[]"  required maxlength="100" class="form-control" id="captionFoto" rows="2" placeholder="masukkan caption disini" name="captionFoto` + i + `"></textarea>
                      <little><sup>*</sup> maksimsal 100 karakter</little>
                    </div>

                  </div>
                </div>
                <div class="col-sm-1">
                  <button class="btn btn-danger btn-hapus-foto" data-id="` + i + `">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </div>
              </div>
            </div>`
        )
      } else {
        alert("Sudah melebihi batas")
      }
      console.log(x);


    });

    $('#fotoSliderBody').on('click', '.btn-hapus-foto', function(e) {
      x--;
      console.log(x);
      let id = $(this).data('id');
      // alert(id);
      $('.wrapper-foto-slider[data-id="' + id + '"]').remove();
    });
    </script>
    <script>
      $(function() {
        $("input[data-preview]").change(function() {
          var input = $(this);
          var oFReader = new FileReader();
          oFReader.readAsDataURL(this.files[0]);
          oFReader.onload = function(oFREvent) {
            $(input.data('preview')).attr('src', oFREvent.target.result);
          };
        });
      })
    </script>

    <script>
      $(document).ready(function() {
        $("#peng-kontributor").click(function() {
          $("#kontributor").toggle();
          $("#namaKontributor").select2();
        });
        $("#peng-slider").click(function() {
          $("#fotoSlider").toggle();

        });

      });
    </script>
@endsection
