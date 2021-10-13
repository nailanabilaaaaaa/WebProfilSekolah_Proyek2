@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Galeri</h1>
            <span>SD NEGERI BARENG 1 MALANG</span>
          </div>
        </div>
      </div>
    </div>

    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Dokumentasi <em>Halaman Sekolah</em></h2>
              <span>SD NEGERI BARENG 1 MALANG</span>
            </div>
          </div>
          @foreach ($galeri as $data)
          <div class="col-md-4">
            <div class="team-item">
            <img src="{{asset('storage/' . $data->image1)}}" alt="">
              <div class="down-content">
                <h4>{{ $data->content1 }}</h4>
                <span>SD NEGERI BARENG 1 MALANG</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Dokumentasi <em>Kegiatan Outing Class</em></h2>
              <span>SD NEGERI BARENG 1 MALANG</span>
            </div>
          </div>
          @foreach ($galeri as $data)
          <div class="col-md-4">
            <div class="team-item">
            <img src="{{asset('storage/' . $data->image2)}}" alt="">
              <div class="down-content">
                <h4>{{ $data->content2 }}</h4>
                <span>SD NEGERI BARENG 1 MALANG</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Dokumentasi <em>Kegiatan Sekolah</em></h2>
              <span>SD NEGERI BARENG 1 MALANG</span>
            </div>
          </div>
          @foreach ($galeri as $data)
          <div class="col-md-4">
            <div class="team-item">
            <img src="{{asset('storage/' . $data->image3)}}" alt="">
              <div class="down-content">
                <h4>{{ $data->content3 }}</h4>
                <span>SD NEGERI BARENG 1 MALANG</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <br></br><br></br><br></br>

@endsection
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>