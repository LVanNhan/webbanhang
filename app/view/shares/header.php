<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Bán Hàng</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body{
            background: #f5f7fb;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar{
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card{
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .table{
            background: white;
        }

        .btn{
            border-radius: 10px;
        }

        .page-title{
            font-weight: bold;
            color: #333;
        }

        .product-image{
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold"
           href="/webbanhang">
            <i class="fa-solid fa-store"></i>
            WEB BÁN HÀNG
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link"
                       href="/webbanhang/Product">
                        <i class="fa-solid fa-box"></i>
                        Sản phẩm
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="/webbanhang/Category">
                        <i class="fa-solid fa-list"></i>
                        Danh mục
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<div class="container mt-4">