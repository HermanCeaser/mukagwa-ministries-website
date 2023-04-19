<x-app-layout>
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">{{ __($title) }}</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}"
                                    alt="img"></li>
                            <li class="breadcrumb_item active">{{ ucfirst($title) ?? __('Make a Donation') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area -->
    <section id="contact_arae_main" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Contact with us</h3>
                        <h2>Get in
                            <span class="color_big_heading">touch &nbsp;</span>with us &
                            stay updated
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_area_left">
                        <div class="contact_left_item">
                            <div class="contact_left_icon">
                                <img src="assets/img/icon/map_color.png" alt="icon">
                            </div>
                            <div class="contact_left_text">
                                <h3>Address:</h3>

                                <head>Head Office</head>
                                <p>Luwafu, Makindye - Kampala<br /> Uganda</p>
                                <br>

                                <head>Branches:</head>
                                <p>Namutumba - Eastern Uganda</p>
                                <p>Luwero - Central Uganda</p>
                                <p>Buddaka - Eastern Uganda</p>
                                <p>Mbale City</p>
                            </div>
                        </div>
                        <div class="contact_left_item">
                            <div class="contact_left_icon">
                                <img src="assets/img/icon/email-color.png" alt="icon">
                            </div>
                            <div class="contact_left_text">
                                <h3>Email:</h3>
                                <a href="mailto:info@mukagwaministries.com">info@mukagwaministries.com</a>
                                <a
                                    href="mailto:betty.mutunda@mukagwaministries.com">betty.mutunda@mukagwaministries.com</a>
                            </div>
                        </div>
                        <div class="contact_left_item">
                            <div class="contact_left_icon">
                                <img src="assets/img/icon/phon-color.png" alt="icon">
                            </div>
                            <div class="contact_left_text">
                                <h3>Phone number:</h3>
                                <a href="https://wa.me/256705996362?text=Hello+Betty%2C+I%27ve+been+looking+at+the+Mukagwa+Ministries+website%2C+and+I+believe+the+cause+has+touched+me.+I%27m+interested+in+volunteering.+"
                                    target="_blank"><img src="{{ asset('assets/img/icon/whatsapp.png') }}"
                                        alt="Whatsapp Icon" style="height: 20px; width: 20px;" /> +256 705 996 362 </a>
                                <a href="tel:+256705996362"><img src="{{ asset('assets/img/icon/telephone.png') }}"
                                        alt="Telephone Icon" style="height: 20px; width: 20px;" /> +256 782 331 162 </a>
                                <a href="#!"><img src="{{ asset('assets/img/icon/telephone.png') }}"
                                        alt="Telephone Icon" style="height: 20px; width: 20px;" /> +256 754 653 315 </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_form_Wrapper">
                        <h3>Leave us a message</h3>
                        <form action="{{ route('contact-us.store') }}" id="contact_form" method="post">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your full name*"
                                    value="{{ old('name') }}" required />
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control"
                                    placeholder="Your email address*" value="{{ old('email') }}" required />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" placeholder="Subject**"
                                    value="{{ old('subject') }}" required />
                                @error('subject')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="6" placeholder="Message*" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="contact_submit_form">
                                <button class="btn btn_theme btn_md">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
