<!DOCTYPE html>
<html>
  <head>
    <title>Edition Article {{ $article->id }}</title>
  </head>
  <body>

    <h1>Article {{ $article->id }} Edition :</h1>


  <form action="/articles/{{$article->id}}" method="POST">
  @csrf
  {{ method_field('PATCH') }}

    <div>
      <input type="text" name="model" value="{{ $article-> model }}" placeholder="New model name">
    </div>

    <div>
      <input type="number" name="prize" value= "{{ $article-> prize}}" placeholder="New price">
    </div>

    <div>
      <textarea name="description" placeholder="New description">{{ $article-> description }}</textarea>
    </div>

    <div>
      <button type="submit"> Edit </button>
    </div>

  </form>

  </body>
</html>