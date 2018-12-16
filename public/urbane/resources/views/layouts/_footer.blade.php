<!--Subscriptoion Form-->
<section class="mbr-section form2" id="form2-13" data-rv-view="128" style="background-color: rgb(46, 46, 46); padding-top: 30px; padding-bottom: 30px;">

<div class="mbr-section mbr-section__container mbr-section__container--middle">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h3 class="mbr-section-title display-2">NEWSLETTER</h3>
                <small class="mbr-section-subtitle">Subscribe to our Newsletter</small>
            </div>
        </div>
    </div>
</div>
<div class="mbr-section mbr-section-nopadding" id="subs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                <!-- Success -->
                    <!--<div data-form-alert="true">-->
                    <div v-if="success" class="alert alert-form alert-success text-xs-center">
                        Thanks for filling out form!
                    </div>
                    <div v-if="error" class="alert alert-form alert-danger text-xs-center">
                        Due to some techincal error your message is not sent. Please Try again later.
                    </div>
                    <!--</div>-->
                <!-- Success -->
                <form @submit.prevent="subscribe" class="mbr-form" action="/subscribe" method="post" data-form-title="SUBSCRIBE FORM">
                    @csrf
                    <div class="mbr-subscribe mbr-subscribe-dark input-group">
                        <input type="email" v-model="email" class="form-control" name="email" required="" data-form-field="Email"
                            placeholder="Enter Your Email Address..." id="form2-13-email">
                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">SUBSCRIBE</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!--Subscription Form-->

<!--Follow Us-->
<section class="mbr-section light mbr-section-md-padding mbr-parallax-background" id="social-buttons2-m"
data-rv-view="118" style="background-image: url({{ asset('assets/img/follow2.jpg')}}); padding-top: 30px; padding-bottom: 30px;">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-xs-center">
            <h3 class="mbr-section-title display-2 text-white">FOLLOW US</h3>
            <div>
                <!--<a class="btn btn-social" title="Twitter" target="_blank" href="https://twitter.com/mobirise">
                    <i class="socicon socicon-twitter"></i>-->
                </a>
                <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/URBANENINETY">
                    <i class="text-white socicon socicon-facebook"></i>
                </a>
                <!--<a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts">
                    <i class="socicon socicon-googleplus"></i>-->
                </a>
                <!--<a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw">
                    <i class="socicon socicon-youtube"></i>-->
                </a>
                <a class="btn btn-social" title="Instagram" target="_blank" href="https://www.instagram.com/urbaneninty/">
                    <i class="text-white socicon socicon-instagram"></i>
                </a>
                <!--<a class="btn btn-social" title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/mobirise">
                    <i class="socicon socicon-linkedin"></i>-->
                </a>
            </div>
        </div>
    </div>
</div>
</section>
<!--Follow Us-->

<!--Extended Footer-->
<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-j" data-rv-view="145" style="background-color: rgb(46, 46, 46); padding-top: 50px; padding-bottom: 50px;">

<div class="container">
    <div class="mbr-contacts row">
        <div class="col">
            <div class="row">
                <div class="col-sm-6">
                    <p><strong>Address</strong><br>
                        BTM Layout. 2nd Stage,<br>
                        16th main
                        Bangalore - 560076<br><br><br>
                        <strong>Contacts</strong><br>
                        <!--Email: support@mobirise.com<br>-->
                        Phone: +91 9632-309-367<br>
                </div>
                <div class="col-sm-6">
                    <p class="mbr-contacts__text"><strong>Support</strong></p>
                    <ul class="mbr-contacts__list">
                        <li><a class="text-white" href="/services">Services</a></li>
                        <li><a class="text-white" href="/privacy">Privacy</a></li>
                        <li><a class="text-white" href="/terms">Terms And Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<!--Extended Footer-->

<!--Footer-->
<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-k" data-rv-view="154" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
<div class="container text-xs-center">
    <a href="/">
        <p>Copyright &copy; 2018 Urbane 90.</p>
    </a>
</div>
</footer>
<!--Footer-->

