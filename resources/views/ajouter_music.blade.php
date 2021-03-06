   @extends('templates.app')

   @section('titre')
    Ajouter une Music
   @endsection
   
   @section('content')
        <div class="body">
            <form action="/createmusic" method="POST" enctype="multipart/form-data">
                <h2>Titre:</h2> <input type="text" name="titre" placeholder="Votre Titre" required/><br><br>

                <h2>Auteur:</h2> <input type="text" name="auteur" placeholder="Votre Auteur" required/><br><br>
                <h2>Musique:</h2> <input type="file" name="son" placeholder="Votre Musique" required/><br><br>
                <h2><h2>Durée:</h2><input type="time" step="2" name="duree" placeholder="La durée" required/><br><br>
                <h2>Votre Photos:</h2> <input type="file" name="photo" placeholder="Votre photo" required/><br><br>
                <h2>Genre:</h2><input type="text"  name="genre" placeholder="Genre" required/><br><br>
                <h2><h2>Date d'ajout:</h2><input type="date"  name="date"  required/><br><br>
                <input type="submit" name="Valider" 
                style="
                background-color:#d6cd006c; 
                color:white; border-color: #d6006c; 
                width: 200px; 
                height:50px;
                border-radius: 20px;
                font-size: 20px;
                 " />
                 @csrf
            </form>
        </div>

    @endsection
 
