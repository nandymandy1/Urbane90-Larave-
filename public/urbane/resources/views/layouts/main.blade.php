<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.8.7, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png')}}" type="image/x-icon">
    <meta name="description" content="">
    @yield('header')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
    <link rel="stylesheet" href="{{ asset('assets/et-line-font-plugin/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise-gallery/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css')}}">

</head>

<body>
        
@include('layouts._navbar')

@yield('content')

@include('layouts._footer')

<!-- Scripts -->
    <script src="{{ asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/tether/tether.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/dropdown/js/script.min.js')}}"></script>
    <script src="{{ asset('assets/touch-swipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{ asset('assets/viewport-checker/jquery.viewportchecker.js')}}"></script>
    <script src="{{ asset('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js')}}"></script>
    <script src="{{ asset('assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
    <script src="{{ asset('assets/social-likes/social-likes.js')}}"></script>
    <script src="{{ asset('assets/jarallax/jarallax.js')}}"></script>
    <script src="{{ asset('assets/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/smooth-scroll/smooth-scroll.js')}}"></script>
    <script src="{{ asset('assets/index.js')}}"></script>
    <script src="{{ asset('assets/slick.min.js')}}"></script>
    <script src="{{ asset('assets/theme/js/script.js')}}"></script>
    <script src="{{ asset('assets/mobirise-gallery/player.min.js')}}"></script>
    <script src="{{ asset('assets/mobirise-gallery/script.js')}}"></script>
    <script src="{{ asset('assets/mobirise-slider-video/script.js')}}"></script>
    <script src="{{ asset('js/vue.js')}}"></script>
    <script src="{{ asset('js/axios.js')}}"></script>
    <!--<script src="{{ asset('assets/formoid/formoid.min.js')}}"></script>-->
    <input name="animation" type="hidden">
    @yield('scripts')
    <!-- Scripts -->
    <script>
        var subscription = new Vue({
            el: '#subs',
            data () {
                return {
                    email:'',
                    success: false,
                    error: false
                }
            },
            methods:{
                subscribe(){
                    axios.post('/subscribe', { email: this.email })
                    .then(res => {
                        if(res.data.success == true){
                            this.success = true
                            this.email = ''
                        } else {
                            this.error = true
                        }
                        setTimeout(() => {
                            this.getInitialState()
                        } , 6000)
                    })
                    .catch(err => console.log(err))
                },
                getInitialState(){
                    this.success = false
                    this.error = false
                }
            }
        })
    </script>
</body>

</html>