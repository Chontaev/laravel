@extends('admin')

    @section('context')
    <div class="content pt-3 col-12">
    <h2>Галлерея</h2>
    <div class="d-flex d-flex justify-content-between pt-4 pb-4 align-baseline">
        <a class="btn btn-dark btn-block btn-primary col-6" href="{{route('createGallery')}}"><h6>Добавить картинку</h6></a>
      </div>
      @foreach($imgs as $item)
           <table class="table">
           <tr>
           <td class="pt-4"><h3 class="pt-4">{{$item->id}}</h3></td>
           <td><img style="height: 100px;" src="{{ asset($item->img) }}" alt=""></td>
           <td class="pt-4"><a class="btn btn-block btn-danger mt-4" href="{{route('deleteGallery', $item->id)}}">Удалить</a></td>
           </tr>
           </table>
      @endforeach
    </div>
@endsection
