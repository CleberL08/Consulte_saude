<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Apuraçao do COVID-19
    </title>
    <link rel="shortcut icon" href="{{asset('img/icon.covid.png')}}" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
</head>

<body class="loading">
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="/" class="logo">
                    C<i class="bx bxs-virus-block bx-tada"></i>VID APURAÇÃO
                </a>
            </div>
        </div>
    </div>