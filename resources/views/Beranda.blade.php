@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>SELAMAT DATANG DI WEBSITE SEKOLAH</h6>
                  <h4>SD NEGERI 1 BARENG MALANG</h4>
                  <p>PENDIDIKAN YANG BERKARAKTER DAN BERINTEGRITAS</p>
                  <a href="Beranda" class="filled-button">Read More</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>SELAMAT DATANG DI WEBSITE SEKOLAH</h6>
                  <h4>SD NEGERI 1 BARENG MALANG</h4>
                  <p>PENDIDIKAN YANG BERKARAKTER DAN BERINTEGRITAS</p>
                  <a href="Beranda" class="filled-button">Read More</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>SELAMAT DATANG DI WEBSITE SEKOLAH</h6>
                  <h4>SD NEGERI 1 BARENG MALANG</h4>
                  <p>PENDIDIKAN YANG BERKARAKTER DAN BERINTEGRITAS</p>
                  <a href="Beranda" class="filled-button">Read More</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
          </div>
          <div class="col-md-4">
            <a href="ContactUs" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>WEB <em>SEKOLAH</em></h2>
              <span>SD NEGERI 1 BARENG MALANG</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/Gambar2.jpg')}}" alt="">
              <div class="down-content">
                <h4>Profil</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="Profil" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/kegiatan9.jpg')}}" alt="">
              <div class="down-content">
                <h4>Gallery</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="Gallery" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/kegiatan2.jpg')}}" alt="">
              <div class="down-content">
                <h4>Program Kegiatan</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="Program" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/Gambar1.jpg')}}" alt="">
              <div class="down-content">
                <h4>Data</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="Data" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="left-content">
              <span>SD NEGERI 1 BARENG MALANG</span>
                <h2>KATA PENGANTAR <em>KEPALA SEKOLAH</em></h2>
                <p>Puji syukur kami panjatkan kehadirat Allah SWT yang telah melimpahkan rahmat, taufik dan hidayah-Nya sehingga kami dapat menyelesaikan PROFIL SD NEGERI BARENG 01 TAHUN 2021/2022 ini dengan baik, meskipun secara sederhana dan masih banyak kekurangan.
                    Terselesainya Profil Sekolah ini adalah atas dasar bimbingan dan petunjuk dari berbagai pihak, untuk itu kami menyampaikan terimakasih kepada Pengawas  SD Gugus V Kecamatan Klojen Kota Malang, Seluruh Dewan Guru dan Karyawan SDN Bareng 1, Komite SDN Bareng 1, dan semua pihak yang tidak bisa kami sebutkan satu persatu.
                    Atas segala bantuan, bimbingan dan petunjuknya semoga Allah SWT memberikan balasan yang lebih baik dan diharapkan Profil ini dapat memberikan informasi kepada semua pihak yang memerlukan.
                </p>
                <p> Drs. H. ADI SUSILO, M. Pd</p>
              </div>
            </div>
              <div class="col-md-4">
                <div class="left-image">
                  <img src="{{asset('images/kepsek.jpg')}}" alt="">
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
                  <div class="left-image">
                    <img src="{{asset('images/sekolah4.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Who we are</span>
                    <h2>Get to know about <em>our School</em></h2>
                    <p>SDN Bareng 1 Malang berlokasi di Jl. Kelud No.10 A, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65116,Sekolah kami memiliki
                        peserta didik 283 anak. Guru berjumlah 13 orang dan tenaga didik 3 orang.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Berita <em>Terbaru</em></h2>
              <span>Berita terbaru dari dunia pendidikan</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Kemendikbudristek Dukung Strategi Pengendalian Covid-19 yang Lebih Aktif</h4>
                  <span></span>
                  <p>Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) siap berkolaborasi
                      dengan Kementerian Kesehatan (Kemenkes) untuk penerapan strategi pengendalian Covid-19 yang lebih aktif.</p>
                  <img src="https://cloud.jpnn.com/photo/galeri/watermark/2020/08/27/IMG_20200827_135439.jpg" alt="">
                  <a href="https://www.kemdikbud.go.id/main/blog/2021/09/kemendikbudristek-dukung-strategi-pengendalian-covid19-yang-lebih-aktif" class="filled-button">Read More</a>
                </div>
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Pendidikan Pancasila Penting Jadi Pelajaran Wajib dari SD Hingga PT</h4>
                  <span></span>
                  <p>Bamsoet menilai pendidikan Pancasila penting dimasukkan sebagai mata pelajaran wajib bagi siswa sekolah dasar hingga perguruan tinggi.</p>
                  <img src="https://cloud.jpnn.com/photo/galeri/watermark/2021/08/18/IMG_20210818_113912.jpg" alt="">
                  <a href="https://www.jpnn.com/news/pendidikan-pancasila-penting-jadi-pelajaran-wajib-dari-sd-hingga-pt" class="filled-button">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Contact <em>Us</em></h2>
              <span>SD NEGERI 1 BARENG MALANG</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">

              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="1" alt="1">
              </div>

              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="2" alt="2">
              </div>

              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="3" alt="3">
              </div>

              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="4" alt="4">
              </div>

              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="5" alt="5">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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