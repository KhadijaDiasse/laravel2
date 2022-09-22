<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet MAILS</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <form action="{{url('store-form')}}" method="post">
        {{ csrf_field() }}
        <div class="mb-5 w-50">
            <h3>Envoyer un message</h3>
        </div>
        <div class="mb-5 w-50">
            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Destinataire">
        </div>  
            <div class="mb-5 w-50">
            
            <input type="text" name="objet" class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Objet" /> 
            </div>
        <div class="mb-5 w-50">
            <textarea  type="text" name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Message"></textarea>
        </div>
          <input type="submit" name="envoyer" class='btn btn-primary'>
    </form>
</body>
</html>
    
