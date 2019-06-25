@extends('layouts.body')
@section('content')
<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading text-uppercase">RETROUVEZ VOS OBJETS PERDUS !</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Tell Me More</a>
        </div>
    </div>
</header>
<section class="bg-light page-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row df-ais">
            <div class="col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="../images/lost.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Lost Items</h4>
                    <p class="text-muted">Find your lost item here</p>
                </div>
            </div>
            <div class="col-sm-6 portfolio-item">
                <a class="portfolio-link" href="{{ url('search') }}">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="../images/search.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Found Items</h4>
                    <p class="text-muted">Help other get their lost items back</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
