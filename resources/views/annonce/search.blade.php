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
                                    <form class="pb-3">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Search" type="text">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
    
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">Phones</span>
                                        </label>  <!-- form-check.// -->
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">Cards</span>
                                        </label>  <!-- form-check.// -->
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">Laptops</span>
                                        </label>  <!-- form-check.// -->
                                    </form>
    
                                </div> <!-- card-body.// -->
                            </div> <!-- collapse .// -->
                        </article> <!-- card-group-item.// -->
                        <article class="card-group-item">
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
                                    </div> <!-- form-row.// -->
                                    <button class="btn btn-block btn-outline-primary">Apply</button>
                                </div> <!-- card-body.// -->
                            </div> <!-- collapse .// -->
                        </article> <!-- card-group-item.// -->
                        <article class="card-group-item">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse44">
                                    <i class="icon-action fa fa-chevron-down"></i>
                                    <h6 class="title">By place </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse44">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control">
                                                <option>Sfax</option>
                                                <option>Tunis</option>
                                                <option>Sousse</option>
                                                <option>Nabeul</option>
                                                <option>Gabes</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>zone</label>
                                            <select class="form-control">
                                                <option>Route l'ain</option>
                                                <option>Route L'afran</option>
                                                <option>Nasriya</option>
                                            </select>
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
                                    <div class="media">
    
                                        <img class="d-flex "
                                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb"
                                             alt="Generic placeholder image">
                                        <div class="media-body pl-3">
                                            <a href="#"><div class="price">Item name</div></a>
                                            <div class="stats">
                                                <span><i class="fa fa-clock-o"></i>01/01/2019</span>
                                                <span><i class="fa fa-map-marker"></i>Sfax</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                                aliquam at commodi consequuntur cupiditate debitis delectus dicta dolore ea,
                                                earum expedita facere molestias mollitia natus nesciunt nostrum nulla
                                                numquam odio odit officia optio porro possimus quam quibusdam quis quos rem
                                                repellat rerum saepe sint ut vero vitae? Ratione, tempore!</p>
                                            <a href="#" class="btn btn-primary marker" data-lat="9.7865" data-long="9.7865">Get
                                                Position</a>
                                        </div>
                                    </div>
                                    <div class="media">
    
                                        <img class="d-flex "
                                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb"
                                             alt="Generic placeholder image">
                                        <div class="media-body pl-3">
                                            <a href="#"><div class="price">Item name</div></a>
                                            <div class="stats">
                                                <span><i class="fa fa-clock-o"></i>01/01/2019</span>
                                                <span><i class="fa fa-map-marker"></i>Sfax</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                                aliquam at commodi consequuntur cupiditate debitis delectus dicta dolore ea,
                                                earum expedita facere molestias mollitia natus nesciunt nostrum nulla
                                                numquam odio odit officia optio porro possimus quam quibusdam quis quos rem
                                                repellat rerum saepe sint ut vero vitae? Ratione, tempore!</p>
                                            <a href="#" class="btn btn-primary marker" data-lat="9.7865" data-long="9.7865">Get
                                                Position</a>
                                        </div>
                                    </div>
                                    <div class="media">
    
                                        <img class="d-flex "
                                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb"
                                             alt="Generic placeholder image">
                                        <div class="media-body pl-3">
                                            <a href="#"><div class="price">Item name</div></a>
                                            <div class="stats">
                                                <span><i class="fa fa-clock-o"></i>01/01/2019</span>
                                                <span><i class="fa fa-map-marker"></i>Sfax</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                                aliquam at commodi consequuntur cupiditate debitis delectus dicta dolore ea,
                                                earum expedita facere molestias mollitia natus nesciunt nostrum nulla
                                                numquam odio odit officia optio porro possimus quam quibusdam quis quos rem
                                                repellat rerum saepe sint ut vero vitae? Ratione, tempore!</p>
                                            <a href="#" class="btn btn-primary marker" data-lat="9.7865" data-long="9.7865">Get
                                                Position</a>
                                        </div>
                                    </div>
                                    <div class="media">
    
                                        <img class="d-flex "
                                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb"
                                             alt="Generic placeholder image">
                                        <div class="media-body pl-3">
                                            <a href="#"><div class="price">Item name</div></a>
                                            <div class="stats">
                                                <span><i class="fa fa-clock-o"></i>01/01/2019</span>
                                                <span><i class="fa fa-map-marker"></i>Sfax</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                                aliquam at commodi consequuntur cupiditate debitis delectus dicta dolore ea,
                                                earum expedita facere molestias mollitia natus nesciunt nostrum nulla
                                                numquam odio odit officia optio porro possimus quam quibusdam quis quos rem
                                                repellat rerum saepe sint ut vero vitae? Ratione, tempore!</p>
                                            <a href="#" class="btn btn-primary marker" data-lat="9.7865" data-long="9.7865">Get
                                                Position</a>
                                        </div>
                                    </div>
                                    <div class="media">
    
                                        <img class="d-flex "
                                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb"
                                             alt="Generic placeholder image">
                                        <div class="media-body pl-3">
                                            <a href="#"><div class="price">Item name</div></a>
                                            <div class="stats">
                                                <span><i class="fa fa-clock-o"></i>01/01/2019</span>
                                                <span><i class="fa fa-map-marker"></i>Sfax</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                                aliquam at commodi consequuntur cupiditate debitis delectus dicta dolore ea,
                                                earum expedita facere molestias mollitia natus nesciunt nostrum nulla
                                                numquam odio odit officia optio porro possimus quam quibusdam quis quos rem
                                                repellat rerum saepe sint ut vero vitae? Ratione, tempore!</p>
                                            <a href="#" class="btn btn-primary marker" data-lat="9.7865" data-long="9.7865">Get
                                                Position</a>
                                        </div>
                                    </div>
                                    <div class="media">
    
                                        <img class="d-flex "
                                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb"
                                             alt="Generic placeholder image">
                                        <div class="media-body pl-3">
                                            <a href="#"><div class="price">Item name</div></a>
                                            <div class="stats">
                                                <span><i class="fa fa-clock-o"></i>01/01/2019</span>
                                                <span><i class="fa fa-map-marker"></i>Sfax</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                                aliquam at commodi consequuntur cupiditate debitis delectus dicta dolore ea,
                                                earum expedita facere molestias mollitia natus nesciunt nostrum nulla
                                                numquam odio odit officia optio porro possimus quam quibusdam quis quos rem
                                                repellat rerum saepe sint ut vero vitae? Ratione, tempore!</p>
                                            <a href="#" class="btn btn-primary marker" data-lat="9.7865" data-long="9.7865">Get
                                                Position</a>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                        </div>
                    </section>
                    <nav class="pagination" aria-label="Page navigation ">
                        <ul class="pagination">
                            <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active" ><a class="page-link" href="#">1</a></li>
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