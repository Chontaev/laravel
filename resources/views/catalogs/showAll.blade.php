@extends('admin')

    @section('context')
    <div class="content pt-3 col-12">
      <h2>Список секций</h2>
      <a class="btn btn-dark btn-block btn-primary col-8 mt-4 mb-4 " href="{{route('createCatalog')}}"><h6>Создать новую секцию</h6></a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Заголовок</th>
            <th scope="col">Картинка</th>
            <th scope="col">Цена</th>
            <th scope="col">Перейти</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $el)
            <tr>
              <td>{{$el->title}}</td>
              <td><img style="width: 50px;" src="{{ $el->img }}" alt=""></td>
              <td>{{ $el->price }}</td>
              <td><a href="{{route('catalogShowOne', $el->id)}}">Перейти</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
@endsection
