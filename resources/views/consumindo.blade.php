<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>

            <tr>
                <td><strong>city</strong></td>
                <td><strong>city_ibge_code</strong></td>
                <td><strong> date </strong></td>
                <td><strong>epidemiological_week</strong></td>
                <td><strong>estimated_population</strong></td>
                <td><strong>estimated_population_2019</strong></td>
                <td><strong>is_last</strong></td>
                <td><strong>is_repeated</strong></td>
                <td><strong>last_available_confirmed</strong></td>
                <td><strong>last_available_confirmed_per_100k_inhabitants</strong></td>
                <td><strong>last_available_date</strong></td>
                <td><strong>last_available_death_rate</strong></td>
                <td><strong>last_available_deaths</strong></td>
                <td><strong>new_confirmed</strong></td>
                <td><strong>new_deaths</strong></td>
                <td><strong>order_for_place</strong></td>
                <td><strong>place_type</strong></td>
                <td><strong>state</strong></td>


            </tr>
            @foreach($datas['results'] as $data)
            <tr>

                <td> {{$data['city']}} </td>

                <td> {{$data['city_ibge_code']}} </td>
                <td> {{$data['date']}} </td>
                <td> {{$data['epidemiological_week']}} </td>
                <td> {{$data['estimated_population']}} </td>
                <td> {{$data['estimated_population_2019']}} </td>
                <td> {{$data['is_last']}} </td>
                <td> {{$data['is_repeated']}} </td>
                <td> {{$data['last_available_confirmed']}} </td>
                <td> {{$data['last_available_confirmed_per_100k_inhabitants']}} </td>
                <td> {{$data['last_available_date']}} </td>
                <td> {{$data['last_available_death_rate']}} </td>
                <td> {{$data['last_available_deaths']}} </td>
                <td> {{$data['new_confirmed']}} </td>
                <td> {{$data['new_deaths']}} </td>
                <td> {{$data['order_for_place']}} </td>
                <td> {{$data['place_type']}} </td>
                <td> {{$data['state']}} </td>

            </tr>
            @endforeach
        </thead>
    </table>
</body>

</html>