@extends('layouts.body')
@section('content')
<!-- Header -->
<div class="object-detail">
    <div class="containerfluid">
        <div class="banner">
            <div id="mapdetail"></div>
            <div class="banner-title">
                <h1>Element Name</h1>
            </div>
           
                
           
            <div class="profile-container" style="">
                    @foreach ($ann as $annonce )
                <div class="profile-image overflow-centered">
                    <img src="{{asset($annonce->image ) }}"
                         class="fit" alt="Avatar"/>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="container">
        <button class="btn btn-danger signaler" style="position: absolute; right: 10%;"><i
                    class="fa fa-exclamation-triangle"></i> Signaler
        </button>
        <div class="row">
                @foreach ($ann as $annonce )
            <div class="content offset-md-1 col-md-10 row" style="font-size: 16px">
                <div class="col-md-5">
                    <strong>date:</strong> {{$annonce->dateaction}}<br>
                    <strong>etat:</strong> perdu <br>
                    <strong>
                           description
                    </strong>
                </div>
                <div class="col-md-5">
                    <strong>date creation:</strong> {{$annonce->created_at}} <br>
                    <strong>Ville</strong> {{$annonce->nomville}}
                </div>
                {{$annonce->description}}
                @endforeach
                <table class="table">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>phone number</th>
                        <th>email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img
                                src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
                        </td>
                        <td>Mark</td>
                        <td>Tompson</td>
                        <td><a href="tel:2365479">2365489</a></td>
                        <td>
                            <a href="#" >aa@aa.aa</a>
                        </td>
                    </tr>
                    

                    </tbody>
                </table>
                <div class="stepper ">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <form id="regiration_form" novalidate action="action.php"  method="post">
                        @foreach ($rep as $reponse)
                        
                        <fieldset>
                            <h2>Question {{$loop->iteration}}: {{$reponse->question }}?</h2>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" >
                                <label  for="customRadio1">{{$reponse->reponecorrect  }}</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" >
                                <label  for="customRadio2">{{$reponse->reponeincorrect }}</label>
                            </div>
                          
                            @if ($loop->iteration > 1)
                            <input type="button" name="previous" class="previous btn btn-warning" value="Previous" />
                            @endif
                            @if ($loop->iteration <= 2)
                            <input type="button" name="next" class="next btn btn-info" value="Next" />
                            @endif
                            @if ($loop->iteration == 3)
                            <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                            @endif
                        </fieldset>
                        @endforeach
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
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