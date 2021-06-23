@extends('home/header')
@extends('home/footer')
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
                @include('components/periodoPandemia')
                @include('components/videosCovid')
            </div>
        </div>
        @include('components/ultimosTrintaDias')
        @include('components/totalRecuperados')
    </div>
        @include('components/paisesInfectado')
</center>