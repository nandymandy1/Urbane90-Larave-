@extends('layouts.main') 
@section('header')

<title>Contact</title>

@endsection 
@section('content')
<!-- About Image -->
<section class="mbr-section mbr-parallax-background" id="content5-t" data-rv-view="76" style="background-image: url(assets/images/desert2.jpg); padding-top: 150px; padding-bottom: 60px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <h3 class="mbr-section-title display-2">Contact Us</h3>
        <div class="lead">
            <p></p>
        </div>
    </div>
</section>
<!-- About Image -->

<!-- Contact Form -->
<section class="mbr-section form1" id="form" data-rv-view="109" style="background-color: rgb(255, 255, 255); padding-top: 30px; padding-bottom: 30px;">
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6" data-form-type="formoid">
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
                    <form @submit.prevent="send" action="/contact" method="post" data-form-title="CONTACT FORM">
                        @csrf
                        <!-- Name and Email -->
                        <div class="row row-sm-offset">
                            <!-- Name -->
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-name">Name<span class="form-asterisk">*</span></label>
                                    <input type="text" v-model="user.name" class="form-control" name="name" required="" data-form-field="Name"
                                        id="form1-l-name" />
                                </div>
                            </div>
                            <!-- Name -->
                            <!-- Email -->
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" v-model="user.email" class="form-control" name="email" required="" data-form-field="Email"
                                        id="form1-l-email" />
                                </div>
                            </div>
                            <!-- Email -->
                        </div>
                        <!-- Name and Email -->
                        <!-- Company and Phone -->
                        <div class="row row-sm-offset">
                            <!-- Phone -->
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-phone">Phone</label>
                                    <input type="tel" v-model="user.phone" class="form-control" name="phone" data-form-field="Phone" id="form1-l-phone">
                                </div>
                            </div>
                            <!-- Phone -->
                            <!-- Company Name -->
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-company_name">Company Name<span class="form-asterisk">*</span></label>
                                    <input type="text" v-model="user.company_name" class="form-control" name="company_name" required=""
                                        data-form-field="Company" id="form1-l-company_name">
                                </div>
                            </div>
                            <!-- Company Name -->
                        </div>
                        <!-- Company and Phone -->
                        <!-- Website and Designation -->
                        <div class="row row-sm-offset">
                            <!-- Website -->
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-website">Website<span class="form-asterisk">*</span></label>
                                    <input type="website" v-model="user.website" class="form-control" name="website" required=""
                                        data-form-field="Website" id="form1-l-website">
                                </div>
                            </div>
                            <!-- Website -->
                            <!-- Designation Name -->
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-designation">Designation</label>
                                    <input type="text" v-model="user.designation" class="form-control" name="designation" data-form-field="Phone"
                                        id="form1-l-designation">
                                </div>
                            </div>
                            <!-- Designation Name -->
                        </div>
                        <!-- Website and Designation -->
                        <!--Country-->
                        <div class="row row-sm-offset">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-l-country">Country<span class="form-asterisk">*</span></label>
                                    <select v-model="user.country" name="country" class="form-control" id="form1-1-country">
                                        <option value="India">India</option>
                                        <option value="Australia">Australia</option>
                                        <option value="United States">United States</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Britain">Britain</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Sweeden">Sweeden</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="France">France</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--Country-->
                        <!--Message-->
                        <div class="form-group">
                            <label class="form-control-label" for="form1-l-message">Message</label>
                            <textarea v-model="user.msg" class="form-control" name="message" rows="7" data-form-field="Message" id="form1-l-message"></textarea>
                        </div>
                        <!--Message-->
                        <!--Submit-->
                        <div><button type="submit" class="btn btn-primary">CONTACT US</button></div>
                        <!--Submit-->
                    </form>
                </div>
                <!--Map-->
                <div class="col-xs-12 col-lg-6 mbr-map" data-form-type="formoid">
                    <!--Place your own API Link -->
                        <!--<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe>-->
                    <!--Place your own API Link -->
                    <div id="mapdiv" style="width: 500px; height: 600px;"></div>
                    <div style="width: 500px; font-size: 70%; padding: 5px 0; text-align: center; background-color: #535364; margin-top: 1px; color: #B4B4B7;">
                        <a href="https://www.amcharts.com/visited_countries/" style="color: #B4B4B7;">
                            Create your own visited countries map
                        </a> or check out the 
                        <a href="https://www.amcharts.com/" style="color: #B4B4B7;">
                            JavaScript Charts
                        </a>.
                    </div>
                </div>
                <!--Map-->
            </div>
        </div>
    </div>
</section>
<!-- Contact Form -->
@endsection 
@section('scripts')

<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
<script src="./map.js"></script>
<script>
var app = new Vue({
    el: '#form',
    data () {
        return {
            user:{
                name:'',
                email: '',
                msg: '',
                country: '',
                website: '',
                designation: '',
                company_name: '',
                phone:''
            },
            success: false,
            error: false
        }
    },
    methods:{
        send(){
            axios.post('/contact', this.user)
            .then(res => {
                // console.log(res.data)
                    if(res.data.success == true){
                        this.success = true
                        this.user.name = ''
                        this.user.msg = ''
                        this.user.designation = ''
                        this.user.phone = ''
                        this.user.website = ''
                        this.user.company_name = ''
                        this.user.email = ''
                        this.user.country = ''
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
});
</script>
@endsection