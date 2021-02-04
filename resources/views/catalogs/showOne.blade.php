@extends('admin')

    @section('context')
    <div class="content pt-3 col-12">
      <h4>Категория секции</h4>
      <table class="table">
        <tr>
          <th scope="col">Заголовок</th>
          <td>{{$data->title}}</td>
        </tr>
        <tr>
          <th scope="col">Картинка</th>
          <td><img style="width: 240px;" src="{{ asset($data->img) }}"  alt=""></td>
        </tr>
        <tr>
          <th scope="col">Цена</th>
          <td>{{ $data->price }}</td>
        </tr>
        <tr>
          <th scope="col">Время посешения</th>
          <td>{{ $data->time }}</td>
        </tr>
        <tr>
          <th scope="col">Описание</th>
          <td>{{$data->discript}}</td>
        </tr>
        <tr>
          <th>Изменить</th>
          <td><a class="btn btn-primary" href="{{route('updateCatalog', $data->id)}}">Изменить</a></td>
        </tr>
        <tr>
          <th>Удалить</th>
          <td><a class="btn btn-danger" href="{{route('deleteCatalog', $data->id)}}">Удалить</a></td>
        </tr>
      </table>
    </div>
@endsection
