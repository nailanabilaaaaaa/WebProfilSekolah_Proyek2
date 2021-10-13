@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Profil</h1>
            <span>SD NEGERI BARENG 1 MALANG</span>
          </div>
        </div>
      </div>
    </div>

    @foreach ($profil as $data)
    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-13">
                  <div class="col-md-13 align-self-center">
                  <div class="right-content">
                    <h2>Profil <em>Sekolah</em></h2>
                    <p>{{ $data->profil_sekolah }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>MOTTO <em>SEKOLAH</em></h2>
              <span>{{ $data->motto_sekolah }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>VISI<em></em></h2>
                    <p>{{ $data->visi_sekolah }}</p><br></br>
                    <h2><em>MISI</em></h2>
                    <p>{{ $data->misi_sekolah }}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="left-image">
                      <img src="{{asset('images/sekolah1.jpg')}}" alt="">
                    </div>
                    <br>
                    <div class="left-image">
                      <img src="{{asset('images/sekolah2.jpg')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <br></br>
                  <div class="left-image">
                    <img src="{{asset('images/sekolah4.jpg')}}" alt="">
                  </div>
                  <br></br>
                  <div class="left-image">
                    <img src="{{asset('images/sekolah5.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>TUJUAN <em>SEKOLAH</em></h2>
                    <p>{{ $data->tujuan_sekolah }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <br></br><br></br>

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