@extends('admin')

    @section('context')
    <div class="content pt-3">
      <h2>Список тренеров</h2>
      <div class="d-flex d-flex justify-content-between pt-4 pb-4 align-baseline">
        <a class="btn btn-dark btn-block btn-primary col-8" href="{{route('createTrener')}}"><h6>Создать нового тренера</h6></a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Имя</th>
            <th scope="col">Должность</th>
            <th scope="col">Ранг</th>
            <th scope="col">Контакты</th>
            <th>кнопка</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $el)
            <tr>
              <td>{{$el->name}}</td>
              <td>{{ $el->kindofsport }}</td>
              <td>{{ $el->rank }}</td>
              <td>{{$el->contacts}}</td>
              <td><a href="{{route('trenersShowOne', $el->id)}}">перейти</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
@endsection
