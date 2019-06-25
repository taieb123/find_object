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
      <form action="{{ url('ajquest') }}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
          <label class="control-label col-sm-2" >choisir categorie de l objet :</label>
          <div class="col-md-6">
            <div class="form-group">
                <label class=" control-label">categorie </label>
                <div class="">
                    <select class="form-control object-cat" name="categorie">
                        <option>please choose</option>
                        @foreach($category as $cat)
                        <option data-id="{{$cat->id_cat}}" value="{{$cat->id_cat}}">{{$cat->nom_category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class=" control-label">sous categorie </label>
                <div class="">
                    <select class="form-control object-sub-cat" name="obj">
                        <option>please choose</option>
                        @foreach($object as $ob)
                        <option data-parent="{{$ob->id_category}}" value="{{$ob->id_objet}}">{{$ob->nom_objet}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="quest">Question :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="quest" name="quest" placeholder="Enter Le question">
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
  </div>
</section>

@endsection