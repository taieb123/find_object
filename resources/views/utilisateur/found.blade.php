@extends('layouts.body')
@section('content')


<!-- Header -->
<div class="object-detail">
    <div class="containerfluid">
        <div class="banner">
            <div id="new"></div>
            <h2 style="position: absolute;z-index: 1000;top: 85%;color: red;left: 9%;"> S il vous plaît entrer la position </h2>
        </div>
    </div>
    <!-- Services -->
    <div class="update-user">

        <div class="container">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class=".col-xs-4 .col-md-offset-2">
                <div class="panel-body">
                    <div class="form-horizontal">
                        <form method="POST" enctype="multipart/form-data" action="{{ url('ajfound') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Date de trouvé </label>
                                        <div class="">
                                            <input class="form-control" type="date" name="date" placeholder="Date"
                                                ng-model="me.date">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang"
                                                name="image" files="true" accept="image/*">
                                            <label class="custom-file-label" for="customFileLang">ajouter une
                                                image</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">categorie </label>
                                        <div class="">
                                            <select class="form-control object-cat">
                                                <option>please choose</option>
                                                @foreach($category as $cat)
                                                <option data-id="{{$cat->id_cat}}" value="{{$cat->id_cat}}">
                                                    {{$cat->nom_category}}</option>
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
                                                <option data-parent="{{$ob->id_category}}" data-id="{{$ob->id_objet}}"
                                                    value="{{$ob->id_objet}}">{{$ob->nom_objet}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Titre </label>
                                        <input type="text" class="form-control" name="nom" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Description </label>
                                        <textarea class="form-control" placeholder="saisie descrition"
                                            name="desc"></textarea>
                                    </div>
                                </div>


                            </div>
                            <input type="hidden" name="lat" class="lat">
                            <input type="hidden" name="lng" class="lng">
                            <input type="hidden" name="ville" class="ville">
                            <input type="hidden" name="region" class="region">
                            <input type="hidden" name="etat" class="etat" value="trouvé">
                            <div class="stepper ">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div id="regiration_form">
                                    @for ($i =0; $i <= 2; $i++) <fieldset>
                                        <h2>Question {{$i+1}}:</h2>
                                        <select name="question-{{$i}}" id="quest{{$i}}"
                                            class="form-control object-sub-cat">
                                            <option value="tst">choose question</option>
                                            @foreach($quest as $question)
                                            <option data-parent="{{$question->id_obj}}" value="{{$question->id_quest}}">
                                                {{$question->question}}</option>
                                            @endforeach

                                        </select>
                                        <h2>Reponse:</h2>
                                        <select name="reponse-{{$i}}" id="repon{{$i}}" class="form-control ">
                                            <option value="tst">choose reponse</option>
                                        </select>

                                        @if($i > 0)
                                        <input type="button" name="previous" class="previous btn btn-warning"
                                            value="Previous" />
                                        @endif
                                        <input type="button" name="next" class="next btn btn-info" value="Next" />
                                        </fieldset>
                                        @endfor
                                </div>
                            </div>
                            <div class="form-group">
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-primary btn-xl text-uppercase">save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end form-horizontal -->
                </div> <!-- end panel-body -->

            </div> <!-- end panel -->


        </div> <!-- end size -->
    </div>
</div>
<!-- end container-fluid -->


<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                    required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                    required="required"
                                    data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                    required="required"
                                    data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *"
                                    required="required"
                                    data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->

@endsection