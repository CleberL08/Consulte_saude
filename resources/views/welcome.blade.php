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
        <form name="regionForm" id="regionForm" action="{{ route('load_api') }}" method="post" data-cidades-url="{{ route('load_cidades') }}">
            @csrf
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <select class="box searcher" name="estadosPick" id="estadosPick">
                        <div class="state-select" id="state-select">
                            <div class="state-select-toggle" id="state-select-toggle">
                                <option value="" selected hidden>Estados</option>
                                @foreach($estado as $estd)
                                <option value="{{ $estd->est_cod}}"> {{ $estd->est_nome}} </option>
                                @endforeach
                            </div>
                        </div>
                    </select>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <select class="box searcher" name="cidadesPick" id="cidadesPick">
                        <div class="country-select" id="country-select">
                            <div class="country-select-toggle" id="country-select-toggle">
                                <option value="" selected hidden>Cidades</option>
                                @foreach($cidade as $cid)
                                <option value="{{ $cid->cid_cod}}"> {{ $cid->cid_nome}} </option>
                                @endforeach
                            </div>
                        </div>
                    </select>
                </div>
                <div class="wrap">
                    <div class="item">
                        <button type="submit" class="bnt">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAACPUlEQVRYR+2XgS1EQRCG/6uAEqgAFaACVIAOqAAV0AEqQAWoABWgAyogX7KTTNZ7b2bfXc5JTHLJudvd990//8ysiRYsJgvGoz8NtCJpR9KWJN6vF3WfJb1JepB0V96PFj6jEA8/kXSQfMqVpLOxYBHQrqRLSctJGFv2IelQ0m3jvkEPoQgwPh4loQBp4kWQOl6s36zWA8X6dPQphDI37pQXSUfFJ0OH468LSWtu0V6LUl1AeObJpQkYHkQaMkF6MbhBsW81u78LCIn3y5O7YEgN3/sqY8+1o62h+C5VFDUQ6ry6g7erNOEbnw6vGN+x3pRE1Xu3AJVoD4NRA+GT87IDA3Oojy6j11Ab7gNSZ0Y/Lv5qAqJMaX5EX4UAhZJWPfxNn7Lw+/wPoGlSLE1APiX8Uivt6JxTB8UeUwmfUSCE/7z3vDplX25l1DT9obX3/N6mM2cFNKTgVEBjU9YH5FP2XrzX5KGMqSM/9VXlKFP7sqdk6SvTxNRlHzXGFriZNEYe6EdH3X2zQIwOurSNl9GjgweiEiBLrn/4kRBB1TCf5czUcM5ePwCk9eOJoSBNjB5ThrUUCleQVAw1v665BRAp5RbgL2gMXNbXs88g2MNICSPqxsweDrP0hQeWBaQJeJuL5s0QKgIyTzGr7I4UQWFg2gee8QWSgsoAGQBmRzH7N8juRXRg0oci+KW+8zRBtQBFygx9n4aaF1Dd33rTN0+gGqrzAjhvIIOy9vEjzb8BNOjFf6CoVP8VihT6BttUgSVS8OrMAAAAAElFTkSuQmCC" />
                        </button>
                    </div>
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
                                    <h5 id="confirmed-total"> {{$casesBrazilData}} </h5>
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
                                    <h5 id="death-total">{{$deathsBrazilData}}</h5>
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
            <div class="col-4 col-md-6 col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <h3>óbitos no brasil
                        <br> nos últimos 30 dias</h3>
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