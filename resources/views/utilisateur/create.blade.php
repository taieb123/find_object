@extends('layouts.body')
@section('content')
<section class="section-content bg padding-y">
   <div class="container">
      <div class="row">
            <form method="POST" action="{{ route('utilisateur.store') }}" enctype="multipart/form-data">
                 @csrf
                  <div class="form-group">
                    <label for="nom">Nom </label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Salmen">
                  </div>

                  <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Salmen">
                  </div>

                  <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Salmen@gmail.com">
                  </div>

                  <div class="form-group">
                        <label for="pseudo">pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Salmen">
                  </div>

                  <div class="form-group">
                        <label for="mdp">Mot de pass </label>
                        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Salmen@gmail.com">
                  </div>

                  <div class="form-group">
                        <label for="adrs">Saisie votre address</label>
                        <textarea class="form-control" id="adrs" rows="3" name="adrs" placeholder="Av 5 aout"></textarea>
                  </div>
                  <div class="form-group">
                        <label for="tel">Numéro telephone</label>
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="20000001">
                  </div>

                  <div class="form-group">
                    <label for="sexe">Homme / Femme</label>
                    <select class="form-control" id="sexe" name="sexe"> 
                      <option value="h">Homme</option>
                      <option value="f">Femme</option>
                    </select>
                  </div>
                 

                  <div class="form-group">
                        <label for="img">insert image</label>
                        <input type="file" class="form-control-file" id="img" name="image" files="true" accept="image/*">
                  </div>


                  <div class="form-group">
                        <button class="btn btn-success"> Affecter</button>
                  </div>
                  
                </form>
      
      </div> 
   </div>
</section>
@endsection