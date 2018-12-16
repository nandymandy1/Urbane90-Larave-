@extends('layouts.main')

@section('header')

<title>Home</title>

@endsection

@section('content')

<!--Crousel Section-->
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar"
    data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-a"
    data-rv-view="2">
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-a" class="active" data-slide-to="0"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active"
                        data-bg-video-slide="false" style="background-image: url(assets/img/crousel1.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">UNDENIABLY GOOD</h2>
                                        <p class="mbr-section-lead lead">The best of all products carrying innovative
                                            ideas that define your unique identity.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full"
                        data-bg-video-slide="false" style="background-image: url(assets/img/crousel2.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">TRENDY ALL SEASONS</h2>
                                        <p class="mbr-section-lead lead">Embracing the spirit with playful edge.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full"
                        data-bg-video-slide="false" style="background-image: url(assets/img/crousel3.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">EXPRESS THE PASSION</h2>
                                        <p class="mbr-section-lead lead">Creating the Elements of Style with Revolution
                                            and Perspective.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-a">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-a">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Crousel Section-->

<!--Solid Intro-->
<section class="mbr-section" id="msg-box5-b" data-rv-view="14" style="background-color: rgb(255, 255, 255); padding-top: 30px; padding-bottom: 30px;">

    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

                <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                    <h3 class="mbr-section-title display-2">A WAY TO KEEP MOVING</h3>
                    <div class="lead">

                        <p>Stop Thinking, Just Buy It! Designs that makes you feel like Boss and Forget
                            the Rules. We define a new language in fashion-setting our motto as normal
                            is boring. We give you the new look you desire with our unique touch in it..</p>

                    </div>

                    <div><a class="btn btn-primary" href="/exports">MORE</a></div>
                </div>

                <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                    <div class="mbr-figure"><img src="assets/img/intro.jpg"></div>
                </div>

            </div>
        </div>
    </div>

</section>
<!--Solid Intro-->

<!-- Trendy Dark-->
<section class="mbr-info mbr-section mbr-section-md-padding" id="msg-box2-s" data-rv-view="70" style="background-color: rgb(46, 46, 46); padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
                <div class="mbr-table-cell col-md-4">
                    <div class="text-xs-center"><a class="btn btn-primary" href="/gallery">VIEW GALLERY</a></div>
                </div>
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                    <h3 class="mbr-info-title mbr-section-title display-2">TRENDING STYLES</h3>
                    <h2 class="mbr-info-subtitle mbr-section-subtitle">Look at our trending styles.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trendy Dark-->

<!--Instagram Feed-->
<section class="mbr-instagram-feed" data-rows="2" data-per-row-slider="" data-spacing="5" data-full-width="" data-token=""
    data-per-row-grid="4" id="instagram-feed-block-16" data-rv-view="156" style="background-color: rgb(255, 255, 255); padding-top: 30px; padding-bottom: 30px;">

    <div class="container container_toggle">
        <div class="row">
            <div class="col">
                <div class="inst">
                    <h1 class="inst__title align-center mbr-fonts-style display-2">Instagram Feed</h1>
                    <div class="inst__content">
                        <div id="pixlee_container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Instagram Feed-->

@endsection

@section('scripts')
<!--Instagram feed-->

<script type="text/javascript">
    window.PixleeAsyncInit = function () {
        Pixlee.init({
            apiKey: 'dI5UvdQ6UVhQfw3DHSu'
        });
        Pixlee.addSimpleWidget({ widgetId: '12122' });
    };
</script>
<script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>

<!--Instagram feed-->
@endsection