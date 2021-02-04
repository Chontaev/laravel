@extends('admin')

    @section('context')
    <div class="content pt-3 col-12">
      <h4>Категория секции</h4>
      <table class="table">
        <tr>
          <th scope="col">Заголовок</th>
          <td>{{$data->name}}</td>
        </tr>
        <tr>
          <th scope="col">Картинка</th>
          <td><img style="height: 240px;" src="{{ asset($data->img) }}" alt=""></td>
        </tr>
        <tr>
          <th scope="col">Должность</th>
          <td>{{ $data->kindofsport }}</td>
        </tr>
        <tr>
          <th scope="col">Ранг</th>
          <td>{{ $data->rank }}</td>
        </tr>
        <tr>
          <th scope="col">Контакты</th>
          <td>{{$data->contacts}}</td>
        </tr>
        <tr>
          <th>Изменить</th>
          <td><a class="btn btn-primary" href="{{route('updateTrener', $data->id)}}">Изменить</a></td>
        </tr>
        <tr>
          <th>Удалить</th>
          <td><a class="btn btn-danger" href="{{route('deleteTrener', $data->id)}}">Удалить</a></td>
        </tr>
      </table>
    </div>
@endsection
