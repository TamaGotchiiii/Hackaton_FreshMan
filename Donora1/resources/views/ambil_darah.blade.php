<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donora</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('donora/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('donora/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('donora/css/custom.css')}}">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
 <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Jalan Palang Merah Indonesia no.1 Samarinda Kalimantan Timur</span>
              <span><i class="icon-phone2"></i>(0541) 732261</span>
              <span><i class="icon-mail"></i>donora_pmi@gmail.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="{{url('/')}}">Home</a></li>
             <li class="active" ><a href="{{url('/pengambilandarah')}}">Pengambilan Darah</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
         
                 <div class="text">
                  <h3>Golongan Darah {{ $golongandarah->jenis_darah }} </h3>
                  <h4><p>Stok : {{$golongandarah->stok}}</p></h4>
                  
                </div>

                <div class="col-md-8 col-md-push-2  probootstrap-animate" id="probootstrap-content">
                  <h2>Form Pengambilan Darah</h2>
                  <p>Untuk Mengambil darah anda di minta untuk mengisi data dibawah ini</p>
                  {!! Form::open(['url' => 'darah/simpan', 'class'=>'form-horizontal']) !!}

                    <div class="form-group">
                      <br>  
                        <label class="col-sm-2 control-label" id="nama">Nama Pemesan</label>
                          <div class="col-sm-10">
                          {!! Form::text('nama_pemesan',null,['class'=>'form-control', 'id'=>'nama_pemesan','placeholder'=>"Masukkan Nama Pemesan"]) !!}
                        <br>
                          </div>
                  </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label" id="nik_pemesan">No. KTP Pemesan</label>
                        <div class="col-sm-10">
                        {!! Form::text('nik_pemesan',null,['class'=>'form-control', 'id'=>'nik_pemesan', 'placeholder'=>"Masukkan No. KTP"]) !!}
                        <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" id="no_tlp_pemesan">No. Telepon</label>
                        <div class="col-sm-10">
                        {!! Form::text('no_tlp_pemesan',null,['class'=>'form-control', 'id'=>'no_tlp_pemesan', 'placeholder'=>"Masukkan No. Telepon"]) !!}
                        <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" id="nama_pasien">Nama Pasien</label>
                        <div class="col-sm-10">
                        {!! Form::text('nama_pasien',null,['class'=>'form-control', 'id'=>'nama_pasien', 'placeholder'=>"Masukkan Nama Pasien"]) !!}
                        <br>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label" id="RumahSakit">Rumah Sakit</label>
                    <div class="col-sm-10">
                    <select name="id_rumahsakit" class="form-control">
                        <option disabled selected>Silahkan Pilih</option>
                        <?php 
                        $a = \App\rumahsakit::get(); 
                         ?>
                        @foreach($a as $rs) 
                          <option value="{{ $rs->id }}"> {{ $rs->nama }}</option>
                        @endforeach
                    </select>
                  </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label" id="nama_pasien">Golongan Darah</label>
                    <div class="col-sm-10">
                    <?php 
                    $b = \App\JenisDarah::find($id);
                     ?>
                    <select name="id_golongan" class="form-control">
                          <option value="{{ $b->id }}"> {{ $b->jenis_darah }}</option>
                    </select>
                  </div>
                  </div>



                  <div class="form-group">
                    <label class="col-sm-2 control-label" id="lampiran">Lampiran</label>
                    <div class="col-sm-5">
                        {!! Form::text('lampiran',null,['class'=>'form-control', 'id'=>'lampiran', 'placeholder'=>"Masukkan lampiran"]) !!} 
                        <br>
                    </div>
                    <input type="button" class="btn btn-primary" name="upload" value="Upload">
                  </div>


                    
                    <div style="width:100%; text-align: right;">
                      <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                      <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
                    </div>

                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
     
       <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>DONORA</h3>
                <p>Donora merupakan website yang membantu orang orang ketika membutuhkan pendonor darah yang di monitori oleh Palang Merah Indonesia Langsung (Resmi).</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Pengambilan Darah</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Jalan Palang Merah Indonesia no.1 Samarinda Kalimantan Timur</span></li>
                  <li><i class="icon-mail"></i><span>donora_pmi@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>(0541) 732261</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2017 <a href="https://www.instagram.com/fannyaqmarina/">Freshman.co</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://www.instagram.com/fannyaqmarina/">Freshman.com</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>


    </div>
    <!-- END wrapper -->
    

   <script src="{{asset('donora/js/scripts.min.js')}}"></script>
    <script src="{{asset('donora/js/main.min.js')}}"></script>
    <script src="{{asset('donora/js/custom.js')}}"></script>


  </body>
</html>