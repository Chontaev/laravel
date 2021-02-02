@extends('admin')

    @section('context')
    <div class="content pt-3">
      <h4>Список тренеров</h4>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Имя</th>
            <th scope="col">Должность</th>
            <th scope="col">Ранг</th>
            <th scope="col">Контакты</th>
            <th>Изменить</th>
            <th>Удалить</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$data->name}}</td>
              <td>{{ $data->kindofsport }}</td>
              <td>{{ $data->rank }}</td>
              <td>{{$data->contacts}}</td>
              <td><a class="btn btn-primary" href="{{route('updateTrener', $data->id)}}">Изменить</a></td>
              <td><a class="btn btn-danger" href="{{route('deleteTrener', $data->id)}}">Удалить</a></td>
            </tr>
        </tbody>
      </table>

    </div>
@endsection
