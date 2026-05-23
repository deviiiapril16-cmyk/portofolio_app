<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        html{
            scroll-behavior:smooth;
        }

        body{
            background: linear-gradient(
                135deg,
                #FCE7F3 0%,
                #FBCFE8 35%,
                #FDF2F8 70%,
                #FFF1F2 100%
            );
            min-height:100vh;
            color:#444;
        }

        section{
            scroll-margin-top:80px;
            padding-top:100px;
            padding-bottom:100px;
        }

        .navbar{
            background:rgba(255,255,255,0.85) !important;
            backdrop-filter:blur(10px);
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-brand{
            color:#EC4899 !important;
            font-weight:700;
            font-size:1.5rem;
        }

        .nav-link{
            font-weight:500;
            color:#555 !important;
            transition:0.3s;
        }

        .nav-link:hover{
            color:#EC4899 !important;
        }

        .card{
            border:none;
            border-radius:20px;
            transition:0.3s;
            background:rgba(255,255,255,0.85);
            backdrop-filter:blur(10px);
        }

        .card:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 30px rgba(236,72,153,0.15);
        }

        .btn{
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }

        .form-control{
            border-radius:12px;
            border:1px solid #f3c4d8;
        }

        .form-control:focus{
            border-color:#EC4899;
            box-shadow:0 0 0 0.15rem rgba(236,72,153,0.15);
        }

        h1,h2,h3,h4,h5{
            color:#333;
            font-weight:700;
        }

        footer{
            background:transparent;
        }

    </style>

</head>
<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>