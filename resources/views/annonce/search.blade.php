@extends('layouts.body')
@section('content')
<!-- Header -->
<header class="masthead mh-30">
    <div id="map"></div>
</header>

<section class="section-content bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-sm-3">

                <div class="card card-filter">
                    <article class="card-group-item">
                        <header class="card-header">
                            <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Category</h6>
                            </a>
                        </header>
                        <div style="" class="filter-content collapse show" id="collapse22">
                            <div class="card-body">
                                <form class="pb-3" action="{{ url('searchobj') }}" method="POST"
                                    enctype="multipart/form-data">
                                   @csrf
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control object-cat" name="category">
                                                <option>please choose</option>
                                                @foreach($category as $cat)
                                                <option data-id="{{$cat->id_cat}}" value="{{$cat->id_cat}}">
                                                    {{$cat->nom_category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Objet</label>
                                            <select class="form-control object-sub-cat" name="object">
                                                <option>please choose</option>
                                                @foreach($object as $ob)
                                                <option data-parent="{{$ob->id_category}}" data-id="{{$ob->id_objet}}"
                                                    value="{{$ob->id_objet}}">{{$ob->nom_objet}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    
                                </form>

                            </div> <!-- card-body.// -->
                        </div> <!-- collapse .// -->
                    </article> <!-- card-group-item.// -->

                <!--   <article class="card-group-item">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse33">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Date </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse33">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>From</label>
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>To</label>
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <button class="btn btn-block btn-outline-primary">Apply</button>
                            </div>
                        </div> 
                    </article>  -->

                    <article class="card-group-item">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse44">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By place </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse44">
                            <div class="card-body">
                                <form action="{{ url('searchplace') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control object-cat" name="ville">
                                           
                                            @foreach($ville as $vil)
                                            <option data-id="{{$vil->id_ville}}" value="{{$vil->id_ville}}">
                                                {{$vil->nomville}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Region</label>
                                        <select class="form-control object-sub-cat" name="ville">
                                            
                                            @foreach($region as $reg)
                                            <option data-parent="{{$reg->idville}}" value="{{$reg->id_reg}}">
                                                {{$reg->nomreg}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div> <!-- card-body.// -->
                        </div> <!-- collapse .// -->
                    </article> <!-- card-group-item.// -->
                </div> <!-- card.// -->


            </aside> <!-- col.// -->
            <main class="col-sm-9">
                <section class="search-box ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" listing-block">
                                @foreach ($ann as $annonce )

                                <div class="media">

                                    <img class="d-flex " src="{{asset($annonce->image ) }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body pl-3">
                                        <a href="{{ url('/details/'.$annonce->id_annonce )}}">
                                            <div class="price">{{$annonce->nom}}</div>
                                        </a>
                                        <div class="stats">
                                            <span><i class="fa fa-clock-o"></i>{{$annonce->dateaction}}</span>
                                            <span><i class="fa fa-map-marker"></i>{{$annonce->nomville}} </span>
                                        </div>
                                        <p>{{$annonce->description}} </p>
                                        <a href="#" class="btn btn-primary marker" data-lat="{{$annonce->lattitude}}"
                                            data-long="{{$annonce->longitude}}">Get
                                            Position</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </section>
                <nav class="pagination" aria-label="Page navigation ">
                    <ul class="pagination">
                        <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </main> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
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
@endsection