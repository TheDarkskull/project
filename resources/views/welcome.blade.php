   @extends('templates.app')

   @section('titre')
   	StickMusic
   @endsection

   @section('content')
           <div class="titres">
                <h1>Mes titres</h1>
                <a class='chanson' href="#" data-file='/storage/son/obzQ40RNn7zTlfx034ai8ZTkspcFP9yMEGUvnEUN'><img src="/storage/photos/dQ03RupmMrNWrKDGZMFgezRHjmuhmqjcmEZlE6qj.jpeg" width="250px"></a>
            </div>

            <div class="playlists">
                <h1>Mes Playlists</h1>
            </div>

            <div class="Artistes">
                <h1>Artistes</h1>
            </div>

            <div class="favoris">
                <h1>Favoris</h1>
            </div>
            
            <div class="musicBD">
                <h1>Les Musiques dans la BD</h1>
                <a class='chanson' href="#" data-file='/storage/son/obzQ40RNn7zTlfx034ai8ZTkspcFP9yMEGUvnEUN'><img src="/storage/photos/dQ03RupmMrNWrKDGZMFgezRHjmuhmqjcmEZlE6qj.jpeg"></a>
            </div>
            
            @endsection