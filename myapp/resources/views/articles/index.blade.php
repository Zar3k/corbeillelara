<!DOCTYPE html>
<html>
  <head>
    <title>Articles</title>
  </head>
  <body>
    @foreach ($articles as $article)
    <h1>Article {{ $article->id }}</h1>
    <ul>
      <li>Model: {{ $article->model }}</li>
      <li>Prize: {{ $article->prize }}</li>
      <li>Description: {{ $article->description }}</li>
    </ul>
    @endforeach
  </body>
</html>