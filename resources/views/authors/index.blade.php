<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors Index</title>
  </head>
  <body>

    <h1>Lista autori</h1>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>COGNOME</th>
          <th>NAZIONALITA</th>
          <th>OPERE</th>
          <th>IMMAGINE</th>
          <th>AZIONI</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($authors as $author)
          <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->surname}}</td>
            <td>{{$author->info->nationality}}</td>
            <td>
              <ul>
                @foreach ($author->comics as $comic)
                  <li>{{$comic->title}}</li>
                @endforeach
              </ul>
            </td>
            <td>
              <img src="{{$author->info->image}}" alt="{{$author->name}}">
            </td>
            <td>
              <a href="#">Pulsante vuoto</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
