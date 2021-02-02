@extends('admin')

    @section('context')
    <!-- Картинка -->
    <form action="/create-gallery" method="POST">
    @csrf
    <h4 class="border-bottom border-gray pb-3 mb-2 ">Галерея</h4>
      <div class="form-group">
        <label>Добавить картинку</label>
        <div class="custom-file">
          <input type="file" class="img" id="img" name="img">
          <label class="custom-file-label" for="img">Выберите картинку</label>
        </div>
      </div>
      <button type="submit" class="btn btn-dark btn-lg btn-block">Сохранить</button>
  </form>
@endsection