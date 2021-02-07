<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  @section('title','gallery')
</head>
<body>
 <div class="welcome">
  <div class="container">
      @include('layouts.master')
      <div class="gallery">
        <h1>Галлерея</h1>
        <div class="cards">
          @foreach($data as $el)
          <a href="" class="card">
            <img src="{{asset($el->img)}}" alt="">
          </a>
          @endforeach
        </div>
      </div>
    </div>
 </div>
</body>
</html>