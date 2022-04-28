@extends('layout.main')

@section('title', 'Главная')

@section('content')


<div class="row">

    <div class="col-12">

        <form>
            <div class="form-group">
        <div class="mb-3">

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Имя</span>
                </div>
                <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm">
              </div>

            <label for="exampleFormControlTextarea1" class="form-label">Текст сообщения</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="button" class="btn btn-primary">Отправить</button>
        </div>
        </form>
        
    </div>




 </div>

@endsection