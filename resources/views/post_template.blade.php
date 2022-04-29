
<div class="card">
    <div class="card-header">
      {{ $post->name }}
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">
        {{ $post->message }}
        <ul id="myUL">
        @foreach ($post->children as $child)
            <li>
            @include('post_template', ['post' => $child])
            <li>
        @endforeach
        <ul>
       
      </p>
      
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $post->id }}">Ответить</button>
    </div>
  </div>
