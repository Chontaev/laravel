@extends('admin')

    @section('context')
    <form action="{{route('updateTrenerSubmit', $data->id)}}" class="col-12" method="POST">
        @csrf
          <h4 class="border-bottom border-gray pb-3 mb-4">Создать тренера</h4>
          <!-- ФИО -->
          <div class="form-group ">
            <label for="name">ФИО тренера</label>
            <input type="name" name="name" placeholder="Введите ФИО тренера" value="{{$data->name}}" id="name" class="form-control">
          </div>
          <!-- Тренер -->
          <div class="form-group ">
            <label for="kindofsport">Род деятельности</label>
            <input type="text" name="kindofsport" placeholder="Введите вид спорта" value="{{$data->kindofsport}}" id="kindofsport" class="form-control">
          </div>
          <!-- Стаж Ранг -->
          <div class="form-group ">
            <label for="rank">Ранг, титулы, разряд</label>
            <input type="text" name="rank" placeholder="Введите ранг, титулы, разряд" value="{{ $data->rank }}" id="rank" class="form-control">
          </div>
          <!-- Контакты -->
          <div class="form-group ">
            <label for="contacts">Контакты тренера</label>
            <input type="text" name="contacts" placeholder="Введите контакты" value="{{ $data->rank }}" id="contacts" class="form-control">
          </div>

          <button type="submit" class="btn btn-dark btn-lg btn-block">  Изменить</button>
        </form>
@endsection
