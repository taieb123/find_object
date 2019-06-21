@extends('layouts.adminbody')
@section('content')

<!-- Header -->
<div class="jumbotron">
  <img src="https://faceofsot2021.com/wp-content/uploads/2017/11/sot-mosaic0001.jpg" alt="" class="jumbotron-image">
  <div class="headertext">
    <h1>Users List</h1>
    <p>Manage the users of your application</p>
  </div>

</div>


<section class=" page-section" id="portfolio">
  <div class="container">
      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
         </div>
         @endif
    <div class="center-block">
      
      <h2 class="nom_zone">Ajouter Nouveau categorie :</h2><br>
      <form action="{{ url('ajCat') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label class="control-label col-sm-2" for="nomcat">Nom categorie:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nomcat" name="nomcat" placeholder="Enter Le nom du categorie">
          </div>
        </div>

        <div class="form-group">
          <div class="add col-sm-offset-2 col-sm-10">
            <button type="submit" class=" add btn btn-success mr-2"><i class=" fa fa-save icon1"></i>Sauvegarder
            </button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times-circle icon1"></i>Annuler
            </button>
          </div>
        </div>
      </form>
    </div>
    <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Id categorie</th>
          <th>Nom categorie</th>
          <th>Creation date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td> </td>
          <td></td>
          <td></td>
          <td><a href="#" class="btn btn-warning mr-2">Modifier</a><a href="#" class="btn btn-danger">delete</a></td>
        </tr>

      </tbody>
    </table>
  </div>
</section>

@endsection