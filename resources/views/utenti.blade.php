<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Utenti database</title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div id="root">
        <header>
           <div class="cds-container container">
             @foreach($data as $user)
                  <div class="cd">
                      <img src="{{ $user->image }}" alt="Immagine utente">
                      <div>Nome: {{ $user->first_name}}</div>
                      <div>Cognome: {{$user->last_name}}</div>
                      <div>Email: {{$user->email}}</div>
                      <div>Genere: {{$user->gender}}</div>
                  </div>
             @endforeach
           </div>
     </header>
     </div>
    </body>
</html>
