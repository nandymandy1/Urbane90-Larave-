@extends('layouts.main')

@section('header')

<title>Urbane Exports</title>

@endsection

@section('content')
    <!--About Image-->
    <section class="mbr-section mbr-parallax-background" id="content5-t" data-rv-view="76" style="background-image: url(assets/img/about.jpeg); padding-top: 120px; padding-bottom: 30px;">

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
        </div>

        <div class="container">
            <h3 class="mbr-section-title display-2">U90 Exports</h3>
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
                                <!--Leather Section-->
                                <h3 class="mbr-section-title display-3">LEATHER</h3>
                                <div class="row">
                                    <div class="mbr-table-md-up">
                                        <div class="mbr-table-cell col-md-5 text-xs-center text-justify content-size">
                                            <div class="lead text-justify">
                                                <p>
                                                    Leather and apparels are one of the most widely traded items in the world. Leather exports from India comprise of raw-hide skins, finished leather, leather goods, leather garments, leather footwear component, saddlery and harness. India is the second largest exporter of leather garments and third largest exporter of saddlery and harness in the world.
                                                <br>
                                                    We in urbane 90 gives the guarantee of our export quality goods whether is it leather or t shirts/clothings-we make sure we are delivering our goods on time with exquisite workmanship.
                                                <br>
                                                    We with our quality control team make sure each money you spend on us is worth and satisfying.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                                            <div class="mbr-figure">
                                                <img src="{{ URL::to('/') }}/assets/img/leather/{{$products[5]}}.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mbr-table-md-up">
                                        <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                                            <div class="mbr-figure"><img src="{{ URL::to('/') }}/assets/img/leather/{{$products[0]}}.jpg"></div>
                                            <div class="mbr-figure"><img src="{{ URL::to('/') }}/assets/img/leather/{{$products[2]}}.jpg"></div>
                                            <div class="mbr-figure"><img src="{{ URL::to('/') }}/assets/img/leather/{{$products[3]}}.jpg"></div>
                                        </div>
                                        <div class="mbr-table-cell col-md-5 text-xs-center text-justify content-size">
                                            <h5 class="mbr-section-title display-5">Types of Leather</h5>
                                            <div class="lead text-justify">
                                                <!--Types of leather content-->
                                                <p>
                                                    In selecting the best types of leather for any application, or buying ready made leather products,
                                                    it is important to understand the various leather types produced today and their processes.
                                                    <ol>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Full Grain or Top Grain Leather – the best</h6>
                                                            <p>This is the upper layer of a hide which is split into layers by a splitting machine to various thickness.</p>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Corrected or Embossed Grain –2nd best ” , full grain</h6>
                                                            <p>Hides which have an excessive amount of scratches or scars are further processed by “correcting” the natural grain of a Full Grain skin.</p>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Split Suede –functional and inexpensive leather hides</h6>
                                                            <p>The second layer or lower layer of the skin left after removing the Full Grain layer is the Split Suede and will be suede on both sides</p>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Nubuck Sueded Grain</h6>
                                                            <p>This Full Grain layer of the skin is given a suede effect by lightly sanding the natural grain to open the hair cell and results in a velvety suede feel.</p>
                                                        </li>
                                                        <li>
                                                            <h6 class="mbr-section-title display-6">Reconstituted, Bonded or Fiber Leather –Recycled, particle board</h6>
                                                            <p>In these types of leather the fiber particles are bonded with adhesive into a fabric followed by the application of a synthetic grain, hair-cell pattern and finish.</p>
                                                        </li>
                                                    </ol>
                                                </p>
                                                <!--Types of leather content-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Leather Section-->
                                <hr>
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
                                <!--aPPAREL sECTION-->
                                <hr>
                                <h3 class="mbr-section-title display-3">URBANE 90</h3>
                                <div class="row">
                                    <p>
                                        We are a team of ambitious people who always look for new dimensions in fashion industry. Our area of
                                        interest lies in offering products according to international demands in terms of design and
                                        requirements, keeping in mind the latest trends dwelling in society. <br>
                                        Urbane 90 have been known for credibility and uniqueness of approach, and we try to maintain the
                                        same in our services. We hope you enjoy our products as much as we enjoy offering them to you!!!
                                    </p>
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
<!---->
@section('scripts')

@endsection