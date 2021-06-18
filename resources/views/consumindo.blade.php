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

    <center>
        <div class="row">
            <div class="col-8 col-md-12 col-sm-12">
                <h1>Dados da cidade {{$novoData['city']}} - {{$novoData['state']}}</h1>
                <div class="row">

                    <div class="item">
                        <a href="/"><button type="back" class="bnt">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAs0lEQVRIS+WU0Q2DMAwFjw3YhI7QjsAkrNBuxAZ0BNiEEZAlqKwohJiYjwq+ozs/27ji4q+6mM99BDXQAR9rS3NaJPABeKyCt0VyJNDwCXgCs5egGC6F7CVwge8J3OAxgSs8FGi4ZY6xt7/W6xmI4As0pXQ923DIWjICL+tahsXFtshVklrTrV1FSVJ/skuSnFNRlORIIDPTSVqgt2xZjmCTyKEzwVO3yFJk8m1ugtPC/xcsChkmGdr4XvMAAAAASUVORK5CYII=" />
                            </button> </a>
                    </div>

                    <div class="col-4 col-md-4 col-sm-12">
                        <div class="box box-hover">
                            <div class="count count-confirmed">
                                <div class="count-icon">
                                    <i class="bx bxs-virus"></i>
                                </div>
                                <div class="count-info">
                                    <h5 id="confirmed-total"> {{ $novoData['last_available_confirmed'] }} </h5>

                                    <span>Confirmados</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-sm-12">
                        <div class="box box-hover">
                            <div class="count count-death">
                                <div class="count-icon">
                                    <i class="bx bxs-sad"></i>
                                </div>
                                <div class="count-info">
                                    <h5 id="death-total">{{ $novoData['last_available_deaths'] }}</h5>

                                    <span>Mortos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h2>Período de pandemia no Brasil</h2>
                            </div>
                            <div class="box-body">
                                <canvas class="bar-chart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-sm-12">
                        <div class="box">
                            <div class="box-header">
                                <h3>O que é covid-19</h3>
                            </div>
                            <div class="box-body">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/WpmTtNSM86g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-sm-12">
                        <div class="box">
                            <div class="box-header">
                                <h3>Como se proteger do covid-19</h3>
                            </div>
                            <div class="box-body">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/yZymLHHStZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>



                </div>

            </div>


            <div class="col-4 col-md-12 col-sm-12">

                <div class="box">
                    <div class="box-header">
                        <h3>últimos 30 dias</h3>
                    </div>
                    <div class="box-body">
                        <canvas class="line-chart"></canvas>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <h3>Total de recuperados no Brasil </h3>
                    </div>
                    <div class=" col-md-4 col-sm-12">
                        <div class="box box-hover">
                            <div class="count count-recovered">
                                <div class="count-icon">
                                    <i class="bx bxs-smile"></i>
                                </div>
                                <div class="count-info">
                                    <h5 id="recovered-total">{{$recoveredBrazilData}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3>top países infectados</h3>
                    </div>
                    <div class="box-body">
                        @include('paisesInfectado')
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>

    </center>

    <!--graficos-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js" integrity="sha512-Xi9hntzKnjRajIIkbxU5XFCnY4fXApOTc/uf4TkJRE/kv5k9jAaK+CWLHJnpcGdWJsxNColUdRESQQPL+dSR9A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!---js-->
    <script src="{{asset('js/load_cidades.js')}}"></script>
    <script src="{{asset('js/newCasesGraph.js')}}"></script>
    <script src="{{asset('js/lastThirtyDaysGraph.js')}}"></script>
</body>

</html>