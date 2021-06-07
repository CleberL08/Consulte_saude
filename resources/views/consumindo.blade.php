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
                <a href="" class="logo">
                    C<i class="bx bxs-virus-block bx-tada"></i>VID APURAÇAO
                </a>
            </div>
        </div>
    </div>
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
            @for($i = 0; $i < 1; $i++)
                <h5 id="confirmed-total"> {{ $novoData['last_available_confirmed'] }} </h5>
            @endfor
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
            @for($i = 0; $i < 1; $i++)
                <h5 id="recovered-total"> {{ $novoData['last_available_deaths'] }}</h5>
            @endfor    
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
            @for($i = 0; $i < 1; $i++)
                <h5 id="death-total">{{ $novoData['last_available_deaths'] }}</h5>
                @endfor    
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
                            <div id="chart"></div>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    packages: ['corechart']
                                })
                                google.charts.setOnLoadCallback(drawChart)

                                function drawChart() {
                                    const container = document.querySelector('#chart')
                                    const data = new google.visualization.arrayToDataTable([
                                        ['', ''],
                                        ['Janeiro', 2000],
                                        ['Fevereiro', 4000],
                                        ['Março', 6000],
                                        ['Abril', 8000],
                                        ['Maio', 10000]
                                    ])
                                    const options = {

                                        height: 480,
                                        width: 800
                                    }

                                    // const chart = new google.visualization.ColumnChart(container)
                                    // const chart = new google.visualization.BarChart(container)
                                    const chart = new google.visualization.LineChart(container)
                                    //const chart = new google.visualization.PieChart(container)
                                    chart.draw(data, options)
                                }
                            </script>
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

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {
                            packages: ['corechart']
                        })
                        google.charts.setOnLoadCallback(drawChart)

                        function drawChart() {
                            const container = document.querySelector('#days-chart')
                            const data = new google.visualization.arrayToDataTable([
                                ['', ''],
                                ['Janeiro', 2000],
                                ['Fevereiro', 4000],
                                ['Março', 6000],
                                ['Abril', 8000],
                                ['Maio', 10000]
                            ])
                            const options = {

                                height: 400,
                                width: 420
                            }

                            // const chart = new google.visualization.ColumnChart(container)
                            // const chart = new google.visualization.BarChart(container)
                            const chart = new google.visualization.LineChart(container)
                            //const chart = new google.visualization.PieChart(container)
                            chart.draw(data, options)
                        }
                    </script>

                </div>
            </div>


            <div class="box">
                <div class="box-header">
                    Taxa recuperados
                </div>
                <div class="box-body">
                    <div id="recover-rate-chart"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {
                            packages: ['corechart']
                        })
                        google.charts.setOnLoadCallback(drawChart)

                        function drawChart() {
                            const container = document.querySelector('#recover-rate-chart')
                            const data = new google.visualization.arrayToDataTable([
                                ['', ''],
                                ['Janeiro', 2000],
                                ['Fevereiro', 4000],
                                ['Março', 6000],
                                ['Abril', 8000],
                                ['Maio', 10000]
                            ])
                            const options = {

                                height: 480,
                                width: 600
                            }

                            // const chart = new google.visualization.ColumnChart(container)
                            // const chart = new google.visualization.BarChart(container)
                            //const chart = new google.visualization.LineChart(container)
                            const chart = new google.visualization.PieChart(container)
                            chart.draw(data, options)
                        }
                    </script>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!---js-->
    <script src="{{asset('js/load_cidades.js')}}"></script>
</body>

</html>