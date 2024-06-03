
@extends('layout.template')

@section('content')

<link rel="stylesheet" href="{{asset ('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">

<link rel="stylesheet" href="{{asset ('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{asset ('adminlte/plugins/ekko-lightbox/ekko-lightbox.css') }}">

<link rel="stylesheet" href="{{asset ('adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
</li>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card card-primary">
<div class="card-header">
<h4 class="card-title">Galeri RW 01 Kesatrian Dalam</h4>
</div>
<div class="card-body">
<div>

</div>
<div>
<div class="filter-container p-0 row">
<div class="filtr-item col-sm-2" data-category="1" data-sort="Fasilitas sample">
<a href="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" data-toggle="lightbox" data-title="sample 1 - Fasilitas">
<img src="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" class="img-fluid mb-2" alt="Fasilitas sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="Fasilitas sample">
<a href="{{ asset('adminlte/dist/img/poskaming.jpg') }}" data-toggle="lightbox" data-title="Fasilitas - black">
<img src="{{ asset('adminlte/dist/img/poskaming.jpg') }}" class="img-fluid mb-2" alt="Fasilitas sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
<a href="{{ asset('adminlte/dist/img/lomba.jpg') }}" data-toggle="lightbox" data-title="sample 3 - red">
<img src="{{ asset('adminlte/dist/img/lomba.jpg') }}" class="img-fluid mb-2" alt="red sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
<a href="{{ asset('adminlte/dist/img/jalansehat.jpg') }}" data-toggle="lightbox" data-title="sample 4 - red">
<img src="{{ asset('adminlte/dist/img/jalansehat.jpg') }}" class="img-fluid mb-2" alt="red sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
<a href="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" data-toggle="lightbox" data-title="sample 5 - black">
<img src="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" class="img-fluid mb-2" alt="black sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
<a href="{{ asset('adminlte/dist/img/lapanganVoli.jpg') }}" data-toggle="lightbox" data-title="sample 6 - white">
<img src="{{ asset('adminlte/dist/img/lapanganVoli.jpg') }}" class="img-fluid mb-2" alt="white sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
<a href="{{ asset('adminlte/dist/img/jalanKesatrian.png') }}" data-toggle="lightbox" data-title="sample 7 - white">
<img src="{{ asset('adminlte/dist/img/jalanKesatrian.png') }}" class="img-fluid mb-2" alt="white sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
<a href="{{ asset('adminlte/dist/img/bansos.jpeg') }}" data-toggle="lightbox" data-title="sample 8 - black">
<img src="{{ asset('adminlte/dist/img/bansos.jpeg') }}" class="img-fluid mb-2" alt="black sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="3, 4" data-sort="white sample">
<a href="{{ asset('adminlte/dist/img/bapakrw.jpg') }}" data-toggle="lightbox" data-title="sample 9 - white">
<img src="{{ asset('adminlte/dist/img/bapakrw.jpg') }}" class="img-fluid mb-2" alt="white sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
<a href="{{ asset('adminlte/dist/img/acara.jpg') }}" data-toggle="lightbox" data-title="sample 10 - white">
<img src="{{ asset('adminlte/dist/img/acara.jpg') }}" class="img-fluid mb-2" alt="white sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
<a href="{{ asset('adminlte/dist/img/lomba.jpg') }}" data-toggle="lightbox" data-title="sample 11 - white">
<img src="{{ asset('adminlte/dist/img/lomba.jpg') }}" class="img-fluid mb-2" alt="white sample" />
</a>
</div>
<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
<a href="{{ asset('adminlte/dist/img/lomba.jpg') }}" data-toggle="lightbox" data-title="sample 12 - black">
<img src="{{ asset('adminlte/dist/img/lomba.jpg') }}" class="img-fluid mb-2" alt="black sample" />
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>



<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="../plugins/jquery/jquery.min.js"></script>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script src="../dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>

<script src="../dist/js/demo.js"></script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
@endsection
