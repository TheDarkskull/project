   @extends('templates.app')

   @section('titre')
   	StickMusic
   @endsection

   @section('content')
   <div class="titres">
                <h1>Mes titres</h1>
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
                <img src="storage/app/public/photos/dQ03RupmMrNWrKDGZMFgezRHjmuhmqjcmEZlE6qj.jpeg">
            </div>
            
            @endsection