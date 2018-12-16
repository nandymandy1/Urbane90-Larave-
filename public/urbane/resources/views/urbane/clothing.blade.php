@extends('layouts.main')

@section('header')

<title>Clothing</title>

@endsection

@section('content')
<!--About Image-->
<section class="mbr-section mbr-parallax-background" id="content5-t" data-rv-view="76" style="background-image: url(assets/img/about.jpeg); padding-top: 120px; padding-bottom: 30px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <h3 class="mbr-section-title display-2">Clothing</h3>
        <div class="lead">
            <p>
            </p>
        </div>
    </div>

</section>
<!-- About Image-->

    <!--About us Content-->
    <section class="mbr-section mbr-parallax-background" id="testimonials4-n" data-rv-view="17" style="background-image: url(assets/img/l-about.jpeg); padding-top: 80px; padding-bottom: 80px;">

        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(34, 34, 34);">
        </div>

        <div class="mbr-section mbr-section-nopadding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mbr-testimonial card">
                            <div class="card-block">
                                <div class="mbr-section mbr-section__container mbr-section__container--middle">
                                </div>
                                <!--aPPAREL sECTION-->
                                <h3 class="mbr-section-title display-3">APPAREL</h3>
                                <div class="row">
                                    <div class="mbr-table-md-up">
                                        <div class="mbr-table-cell col-md-6 text-xs-center text-justify content-size">
                                            <div class="lead text-justify">
                                                <p>
                                                    An international platform for personalized clothing, we are here for anyone looking to
                                                    form their creative ideas on quality fabrics.The bond you share with your group, club, or
                                                    team and company ,we are here to bring it live. We value freedom of expression, whether it’s
                                                    with your own designs orfrom our creative minds. T-shirts, sweaters, bags, caps and a lot
                                                    more can easily be personalized with images and custom text. Our top-quality prints,
                                                    custom t-shirts and services will make sure that your business hits big globally.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-6 image-size" style="width: 50%;">
                                            <div class="mbr-figure">
                                                <img src="{{ URL::to('/') }}/assets/img/apparel/ap10.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mbr-table-md-up">
                                        <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-6 image-size" style="width: 50%;">
                                            <div class="mbr-figure">
                                                <img src="{{ URL::to('/') }}/assets/img/apparel/ap1.jpg">
                                            </div>
                                        </div>
                                        <div class="mbr-table-cell col-md-6 text-xs-center text-justify content-size">
                                            <div class="lead text-justify">
                                                <p>
                                                    We in urbane 90 gives the guarantee of our export quality goods whether is it 
                                                    leather or t shirts/clothings-we make sure we are delivering our goods on time
                                                    with exquisite workmanship.
                                                    <ol>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Best Quality</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Trendy Designs</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Affordable Prices</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">All types of knitted clothing range.</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">High Quality</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Exquisite workmanship and tailoring.</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Endless Colors to choose.</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Made in India with love.</h6>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">We do export the best quality T-Shirt in the country.</h6>
                                                        </li>
                                                    </ol>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="text-justify">
                                        We do your customization as required for your corporate/events/function’s in an affordable price
                                        range. Flock print, puff print, hi-density print, glitter/foil prints to embroidery-you name it.. urbane 90 is
                                        at your service from designing to the end product.
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    @foreach ($items as $item)
                                    <div class="col-md-4 col-lg-4 col-sm-12" style="margin-bottom: 30px;">
                                        <div class="mbr-table-cell mbr-valign-top image-size" style="width: 60%;">
                                            <div class="mbr-figure">
                                                <img class="img-fluid" src="{{ URL::to('/') }}/assets/img/apparel/{{$item}}.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About us Content-->
@endsection

@section('scripts')

@endsection