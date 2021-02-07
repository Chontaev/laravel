<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/app.css">
  @section('title',$data->name)
</head>
<body style=" width:90%; margin:auto; color:#000">
@include('layouts.master')
  @section('navbar')
  <div class="details" style="margin-top:4rem; display:flex;justify-content:space-around;">
    <div class="info" style="margin-top:2rem; max-width:50%">
      <h1>{{$data->name}}</h1>
      <p style="margin-top:2rem; font-size:130%">{{$data->kindofsport}}</p>
      <p style="margin-top:2rem; font-size:130%">{{$data->rank}}</p>
      <p style="margin-top:2rem; font-size:130%">{{$data->contacts}}</p>
    </div>
    <div class="img">
      <img src="{{asset($data->img)}}" alt="">
    </div>
  </div>
</body>
</html>