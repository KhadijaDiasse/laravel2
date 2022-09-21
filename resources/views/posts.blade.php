<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <h1>Bienvenue</h1>
  

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
        
        


       <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Destinataire</th>
            <th scope="col">Objet</th>
            <th scope="col">Messages</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
    <tr>
        <td > <a href="{{ url('post/' .$post->id)}}" >{{$post->destinataire }}</td>
         <td>{{ $post->objet }}</td>
         <td>{{ $post->message }}</td>
    </tr> 
    @endforeach
    </tbody>
    </table>       
</body>
</html>