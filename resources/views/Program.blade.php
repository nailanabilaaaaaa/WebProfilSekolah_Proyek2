@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Progam</h1>
            <span>SD NEGERI BARENG 1 MALANG</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>PROGRAM UNGGULAN <em>SDN BARENG 1 MALANG</em></h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="down-content">
                <h4>Kegiatan Setiap Hari</h4>
                <span>SD NEGERI BARENG 1 MALANG</span>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
			              <thead>
                      <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                      </tr>
                    </thead>
                    @foreach ($program as $value)
                    <tbody>
                      <tr>
                      <td>{{ $value->no1}}</td>
                      <td>{{ $value->kegiatan1}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="down-content">
                <h4>Kegiatan Satu Minggu Sekali</h4>
                <span>SD NEGERI BARENG 1 MALANG</span>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
			              <thead>
                      <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                      </tr>
                    </thead>@foreach ($program as $value)
                    <tbody>
                      <tr>
                      <td>{{ $value->no2}}</td>
                      <td>{{ $value->kegiatan2}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
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
                <div class="col-md-12">
                  <div class="right-content">
                    <h2>KEGIATAN <em>LAINNYA</em></h2>
					            <div class="table-responsive">
		                    <table class="table table-bordered table-striped table-hover">
			                    <thead>
                          </thead>
                          @foreach ($program as $value)
                    <tbody>
                      <tr>
                      <td>{{ $value->no3}}</td>
                      <td>{{ $value->lainnya}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
