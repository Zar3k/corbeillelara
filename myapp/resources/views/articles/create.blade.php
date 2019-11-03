<!DOCTYPE html>
<html>
  <head>
    <title>Creation</title>
  </head>
  <body>

    <h1>Article Creation :</h1>


  <form action="/articles" method="POST">
  @csrf

    <div>
      <input type="text" name="model" placeholder="Model name">
    </div>

    <div>
      <input type="number" name="prize" placeholder="Price">
    </div>

    <div>
      <textarea name="description" placeholder="Description"></textarea>
    </div>

    <div>
      <button type="submit"> Add </button>
    </div>

  </form>

  </body>
</html>