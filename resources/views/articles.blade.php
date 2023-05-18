<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
           body {
            font-family: Times New Roman;
              }

</style>
</head>

<body>

    @yield('content')

    <!-- Topbar Start -->
    <div class="col-lg-6 d-none d-lg-block">

    </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>

        <div class="row align-items-center bg-dark py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <h1 class="text-light"> Articles</h1>
                </a>
            </div>
            </div>
            <div class="articles row justify-content-center">
                @foreach ( $articles as $article)
                   <div class="col-md-6">
                     <div class="card my-3">
                     <h5 class="card-image">{{ $article->image}}</h5>
                     <h5 class="card-titre">{{ $article->titre}}</h5>
                     <h5 class="card-prix">{{ $article->prix}}</h5>
                     <h5 class="card-subtitle">{{ $article->subtitle}}</h5>
                   </div>
                   </div>
                   @endforeach
                   <div class="d-flex justify-content-center mt-5">
                    {{$articles->links('vendor.pagination.custom')}}
                    </div>
                  </div>


            </div>

        </div>

    <!-- Topbar End -->












</body>

</html>

