@extends('home/header')
@extends('home/footer')
<center>
    <form name="regionForm" id="regionForm" action="{{ route('load_api') }}" method="post" data-cidades-url="{{ route('load_cidades') }}">
        @csrf
        <div class="row">
            <div class="col-3 col-md-6 col-sm-12">
                <select class="box searcher" name="estadosPick" id="estadosPick" required oninvalid="this.setCustomValidity('Por favor, selecione um estado')" oninput="setCustomValidity('')">
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
                <select class="box searcher" name="cidadesPick" id="cidadesPick" required oninvalid="this.setCustomValidity('Por favor, selecione uma cidade') " oninput="setCustomValidity('')">
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
                @include('components/periodoPandemia')
                @include('components/videosCovid')
            </div>
        </div>
        @include('components/ultimosTrintaDias')
        @include('components/totalRecuperados')
    </div>
    @include('components/paisesInfectado')
</center>
