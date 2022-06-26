
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          
          <title>Cetak</title>
        </head>
        <body>
          <div class="container-fluid" id="contentWrapper">
            <!-- Page Heading -->
            <div class="row">
              <div class="col-lg-12 mb-3">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <div class="row">
                      <div class="col-6">
                        <h2 class="m-0 font-weight-bold sub-judul">List {{$req}}</h2>
                      </div>
                     
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="listArtikel" class="table" style="width:100%" border="1px" >
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Gambar</th>
                          <th>Qr Code</th>
                          <th>Nama</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach( $cetak as $f )
                          @if($f->getTable()=='bangunans' && $req == 'Bangunan')

                        <tr>
                          <td>{{$no++}}</td>
                          <td>
                            <img style="width: 200px;" src="{{ asset('storage/assets/foto/thumbnail/' . $f->thumbnail) }}" alt="">
                          </td>
                          <td>{{QrCode::size(100)->generate( route('bangunan_detail', $f->slug) );}}</td>

                          <td>{{ $f->nama }}</td>
                          
                    
                        </tr>
                        @elseif($f->getTable()=='bendas' && $req == 'Benda')
                        <tr>
                            <td>{{$no++}}</td>
                          <td>                            <img style="width: 200px;" src="{{ asset('storage/assets/foto/thumbnail/' . $f->thumbnail) }}" alt="">
                          </td>

                            <td>{{QrCode::size(100)->generate( route('benda_detail', $f->slug) );}}</td>
                            <td>{{ $f->nama }}</td>
                         </tr>
                         @elseif($f->getTable()=='kawasans' && $req == 'Kawasan')
                         <tr>
                             <td>{{$no++}}</td>
                          <td>                            <img style="width: 200px;" src="{{ asset('storage/assets/foto/thumbnail/' . $f->thumbnail) }}" alt="">
                          </td>

                             <td>{{QrCode::size(100)->generate( route('kawasan_detail', $f->slug) );}}</td>
                             <td>{{ $f->nama }}</td>
                          </tr>
                          @elseif($f->getTable()=='situses' && $req == 'Situs')
                          <tr>
                              <td>{{$no++}}</td>
                          <td>                            <img style="width: 200px;" src="{{ asset('storage/assets/foto/thumbnail/' . $f->thumbnail) }}" alt="">
                          </td>

                              <td>{{QrCode::size(100)->generate( route('situs_detail', $f->slug) );}}</td>
                              <td>{{ $f->nama }}</td>
                           </tr>
                           @elseif($f->getTable()=='kegiatan1s' && $req == 'Kegiatan1')
                           <tr>
                               <td>{{$no++}}</td>
                          <td>                            <img style="width: 200px;" src="{{ asset('storage/assets/foto/thumbnail/' . $f->thumbnail) }}" alt="">
                          </td>

                               <td>{{QrCode::size(100)->generate( route('kegiatan1_detail', $f->slug) );}}</td>
                               <td>{{ $f->nama }}</td>
                            </tr>
                            @elseif($f->getTable()=='strukturs' && $req == 'Struktur')
                            <tr>
                                <td>{{$no++}}</td>
                          <td>                            <img style="width: 200px;" src="{{ asset('storage/assets/foto/thumbnail/' . $f->thumbnail) }}" alt="">
                          </td>

                                <td>{{QrCode::size(100)->generate( route('struktur_detail', $f->slug) );}}</td>
                                <td>{{ $f->nama }}</td>
                             </tr>
                             @endif
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            window.print();
        </script>
        </body>
        </html>
        
        
        
        
        
        
        
       
      
