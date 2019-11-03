<!DOCTYPE html>
<html>
  <head>
    <title>Article {{ $article->id }}</title>
  </head>
  <body>
    <h1>Article {{ $article->id }}</h1>
    <ul>
      <li>Model: {{ $article->model }}</li>
      <li>Prize: {{ $article->prize }}</li>
      <li>Description: {{ $article->description }}</li>
    </ul>
    <a href="/articles/{{ $article->id }}/edit"> Edition </a>
    <a href="/articles/{{ $article->id }}/delete"> Delete </a>
  </body>
</html>