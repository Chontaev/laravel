@extends('admin')

    @section('context')
      <form action="{{route('createCatalogSubmit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <h4 class="border-bottom border-gray pb-3 mb-4 ">Виды кружков</h4>
      <!-- Заголовок -->
      <div class="form-group ">
        <label for="title">Название секции</label>
        <input type="text" name="title" placeholder="Введите название" id="title" class="form-control">
      </div>
      <!-- Картинка -->
      <div class="form-group ">
        <label>Картинка для карточки</label>
        <div class="custom-file">
          <input type="file" class="img" id="img" name="img">
          <label class="custom-file-label" for="img">Выберите картинку</label>
        </div>
      </div>
      <!-- Цена -->
      <div class="form-group ">
        <label for="price">Цена за месяц</label>
        <input type="text" name="price" placeholder="Введите цену" id="price" class="form-control">
      </div>
      <!-- Время тренировок -->
      <div class="form-group ">
        <label for="time">Расписание тренировок</label>
        <input type="text" name="time" placeholder="Введите время" id="time" class="form-control">
      </div>
      <!-- Описание -->
      <div class="form-group ">
        <label for="discription">Описание секции</label>
        <textarea type="text" name="discript" placeholder="Введите текст" id="discription" class="form-control"></textarea>
      </div>
      
      <button type="submit" class="btn btn-dark btn-lg btn-block">Сохранить</button>


    </form>
@endsection