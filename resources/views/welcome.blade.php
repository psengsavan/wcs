<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Liste des Agronautes</title>
</head>
<body>

  <!-- Header section -->
  <header>
    <h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
      Les Argonautes
    </h1>
  </header>

  <!-- Main section -->
  <main>
    
    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form action="addAgronaute" method="post" class="new-member-form">
      @csrf
      <label for="name">Nom de l&apos;Argonaute</label>
      <input id="name" name="name" type="text" placeholder="Charalampos" required/>
      <button type="submit">Envoyer</button>
    </form>
    
    @if (session()->has("message"))
      <div class="message">{{ session()->get("message") }}</div>
    @endif
    
    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">
      @foreach ($agronautes as $agronaute)
        <div class="member-item">{{ $agronaute->name }}</div>
      @endforeach
    </section>
  </main>
  
  <footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>
</body>
</html>