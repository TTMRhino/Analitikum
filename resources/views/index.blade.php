@extends('layout.main')

@section('title', 'Главная')

@section('content')
<div id="post">
@if(session('success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
</div>
@endif
<div class="row">
  <div class="col-12">

    <ul id="myUL">
      @foreach($posts as $post)

        <li>
          @include('post_template', ['post' => $post])
        </li>

      @endforeach
    </ul>

  </div>
</div>
<div class="row">

    <div class="col-12">

        
       
          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">Новое сообщение</button>

          <form action="{{ route( 'Posts.store')  }}" method="POST" >
           

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Новое сообщение</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Имя:</label>
                      <input name="name" type="text" class="form-control" id="recipient-name">
                      <input name="previous_post_id" type="text" hidden id="postID">
                      
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Сообщение:</label>
                      <textarea name="message" class="form-control" id="message-text"></textarea>
                      
                    </div>
                 
                </div>
                <div class="modal-footer">
                  <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                  <button type="button" class="btn btn-primary" id="send-message">Отправить</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
        
    </div>
    <script type="text/javascript">

     
  
     
  </script>

 </div>
</div>
@endsection