@extends('layouts.main')

@section('header')
<title>Collection | {{ $collection }}</title>
@endsection

@section('content')
<!--About Image-->
<section class="mbr-section mbr-parallax-background" id="content5-t" data-rv-view="76" style="background-image: url({{ asset('assets/img/about.jpeg')}}); padding-top: 120px; padding-bottom: 30px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <h3 class="mbr-section-title display-2">{{ $collection }}</h3>
        <div class="lead">
            <p>"At urbane 90 our foremost priority is to provide you with the best of all products carrying our
                innovative ideas that can define your unique identity along with satisfying customer services .We
                strongly Believe in the motto “Be undeniably good.No marketing effort or social media buzzword can
                be a substitute for that”.</p>
        </div>
    </div>

</section>
<!-- About Image-->

<!--Gallery-->
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="false" id="gallery3-p"
    data-rv-view="30" style="background-color: rgb(243, 241, 241); padding-top: 1.5rem; padding-bottom: 1.5rem;">
    <!-- Filter -->

    <!-- Gallery -->
    <div class="mbr-gallery-row container">
        <div class="mbr-gallery-layout-default">
            <div>
                <?php $i=0; ?>
                @foreach($products as $product)
                    <div>
                        <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-video-url="false"
                            data-tags="Responsive">
                            <div href="#lb-gallery3-p" data-slide-to="{{ $i }}" data-toggle="modal">
                            <img src="{{ URL::to('/') }}/assets/img/collections/{{$product->collection}}/{{$product->img_path}}" alt="" title="">
                            <h5>{{ $product->name }}</h5>
                                <span class="icon-focus"></span>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                @endforeach

            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true"
        data-interval="false" id="lb-gallery3-p">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <?php $i=0; ?>

                        @foreach ($products as $product)
                                
                            @if($i == 0)
                                <li data-app-prevent-settings="" data-target="#lb-gallery3-p" class=" active" data-slide-to="{{ $i }}"></li>
                            @else
                                <li data-app-prevent-settings="" data-target="#lb-gallery3-p" data-slide-to="{{ $i }}"></li>
                            @endif

                            <?php $i++; ?>

                        @endforeach

                    </ol>
                    <div class="carousel-inner">
                        <?php $i=0; ?>

                        @foreach ($products as $product)
                                @if($i == 0)
                                    <div class="carousel-item active">
                                        <img src="{{ URL::to('/') }}/assets/img/collections/{{$product->collection}}/{{$product->img_path}}" alt="" title="">
                                        <h3>{{ $product->name }}</h3>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ URL::to('/') }}/assets/img/collections/{{$product->collection}}/{{$product->img_path}}" alt="" title="">
                                        <h3>{{ $product->name }}</h3>
                                    </div>
                                @endif
                        <?php $i++; ?>
                        @endforeach
                    </div>

                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-p">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-p">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<!--Gallery-->
@endsection

@section('scripts')

@endsection
