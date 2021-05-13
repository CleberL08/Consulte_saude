<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Apuraçao do COVID-19
    </title>
    <link rel="shortcut icon" href="./estilo/imagem/icon.covid.png" type="image/png">
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
                <a href="" class="logo">
                    C<i class="bx bxs-virus-block bx-tada"></i>VID APURAÇAO
                </a>
                <div class="darkmode-switch" id="darkmode-switch">
                    <span>
                        <i class="bx bxs-moon"></i>
                        <i class="bx bxs-sun"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <form action="" method="post" action="">

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-6 col-sm-12">
                        <select class="box searcher" name="estadosPick" id="estadosPick">
                            <div class="country-select" id="country-select">
                                <div class="country-select-toggle" id="country-select-toggle">
                                    <option value="" selected hidden>Estados</option>

                                    @foreach($estado as $estd)
                                    <option value="{{ $estd->est_cod}}"> {{ $estd->est_nome}} </option>
                                    @endforeach

                                </div>
                                <!-- <div class="country-select-list" id="country-select-list"> -->
                                <!-- <input type="text" placeholder="Escolha o nome da cidade"> -->
                                <!-- </div> -->
                            </div>
                        </select>
                    </div>
                </div>
    </form>

    








    <div class="row">

        <div class="col-8 col-md-12 col-sm-12">
            <div class="row">

                <div class="col-4 col-md-4 col-sm-12">
                    <div class="box box-hover">
                        <div class="count count-confirmed">
                            <div class="count-icon">
                                <i class="bx bxs-virus"></i>
                            </div>
                            <div class="count-info">
                                <h5 id="confirmed-total">123,456,789</h5>
                                <span>Confirmados</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-md-4 col-sm-12">
                    <div class="box box-hover">
                        <div class="count count-recovered">
                            <div class="count-icon">
                                <i class="bx bxs-smile"></i>
                            </div>
                            <div class="count-info">
                                <h5 id="recovered-total">123,456,789</h5>
                                <span>Recuperado</span>
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
                                <h5 id="death-total">123,456,789</h5>
                                <span>Mortos</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            Período de pandemia
                        </div>
                        <div class="box-body">
                            <div id="all-time-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            O que é covid-19
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
                            Como se proteger do covid-19
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
                    ultimos 30 dias
                </div>
                <div class="box-body">
                    <div id="days-chart"></div>
                </div>
            </div>






            <div class="box">
                <div class="box-header">
                    Taxa recuperados
                </div>
                <div class="box-body">
                    <div id="recover-rate-chart"></div>
                </div>
            </div>



            <div class="box">
                <div class="box-header">
                    top paises enfectado
                </div>
                <div class="box-body">
                    <table class="table-countries" id="table-countries">
                        <thead>
                            <tr>
                                <th>
                                    Pais
                                </th>
                                <th>Confirmados</th>
                                <th>Recuperados</th>
                                <th>Mortes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

    </div>
    </div>


    <!-- </div> -->
    <!-- <div class="loader"> -->
    <!-- <i class="bx bxs-virus bx-spin"></i> -->
    <!--  -->
    <!-- </div> -->

    <!--graficos-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!---js-->
    <script src="./estilo/js/fetchApi.js"></script>
    <script src="./estilo/js/covidApi.js"></script>
    <script src="./estilo/js/app.js"></script>

</body>

</html>