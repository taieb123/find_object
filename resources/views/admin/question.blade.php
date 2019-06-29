@extends('layouts.adminbody')
@section('content')

    <!-- Header -->
    <div class="jumbotron">
        <img src="https://faceofsot2021.com/wp-content/uploads/2017/11/sot-mosaic0001.jpg" alt=""
             class="jumbotron-image">
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
                        <label class="control-label col-sm-2">choisir categorie de l objet :</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class=" control-label">categorie </label>
                                <div class="">
                                    <select class="form-control object-cat" name="categorie">
                                        <option>please choose</option>
                                        @foreach($category as $cat)
                                            <option data-id="{{$cat->id_cat}}"
                                                    value="{{$cat->id_cat}}">{{$cat->nom_category}}</option>
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
                                            <option data-parent="{{$ob->id_category}}"
                                                    value="{{$ob->id_objet}}">{{$ob->nom_objet}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="quest">Question :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quest" name="quest"
                                   placeholder="Enter Le question">
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
                    <th>Id question</th>
                    <th>Question</th>
                    <th>Objet</th>
                    <th>Categorie</th>
                    <th>Date creation</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$question->id_quest}}</td>
                        <td>{{$question->question}}</td>
                        <td>{{$question->nom_objet}}</td>
                        <td>{{$question->nom_category}}</td>
                        <td>{{$question->created_at}}</td>
                        <td style="display: flex;"><a href="#" class="btn btn-warning mr-2">Modifier</a>
                            <form action="{{ route('questions.destroy',$question->id_quest) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection