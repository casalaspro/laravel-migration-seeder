<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/js/app.js')
</head>
<body>
  <div class="container">
    <h1>Arrivano i treni!</h1>
  </div>

  <div class="movies">
    <div class="container">
      <div class="row">
        @foreach ($trains as $train) 
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{ $train->company }}</h3>
                <h6 class="card-subtitle mt-2">Departure Station: {{ $train->departure_station }}</h6>
                <h6 class="card-subtitle mt-2">Arrival Station: {{ $train->arrival_station }}</h6>
                <h6 class="card-subtitle mt-2">Departure Time: {{ $train->departure_time }}</h6>
                <h6 class="card-subtitle mt-2">Train Code: {{ $train->train_code }}</h6>
                <h6 class="card-subtitle mt-2">Carriages Number: {{ $train->carriages_number }}</h6>
                {{-- <h6 class="card-subtitle mt-2">Train Code: {{ $train->train_code }}</h6>
                <h6 class="card-subtitle mt-2">Train Code: {{ $train->train_code }}</h6> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  {{-- @php

    use Carbon\Carbon;
    $current = Carbon::today()->toDateString();
    
      
  @endphp --}}

  {{-- <h2>{{ $current }}</h2> --}}

  @php
  // use Faker\Generator as Faker;

      $faker = new Faker\Generator;
      $faker->addProvider(new Faker\Provider\it_IT\Person($faker));
  @endphp
  <h1>pino{{ $faker->addProvider(new Faker\Provider\it_IT\Person($faker)) }}</h1>
  
</body>
</html>