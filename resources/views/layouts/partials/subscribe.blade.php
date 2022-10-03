<section id="subscribe_area" style="margin-top: 8em;">
    <div class="container">
        <div class="subscribe_wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe_text">
                        <p>Newsletter</p>
                        <h3>To get weekly & monthly news,
                            <span class="color_big_heading">Subscribe</span> to our newsletter.
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta_right_side">
                        <form action="{{ url('newsletter/') }}" id="subscribe_form" method="POST">
                            @csrf
                            <div class="input-group">
                                <input name="email" type="text" class="form-control"
                                    placeholder="Your mail address" value="{{ old('email') }}" required="">
                                <button class="btn btn_theme btn_md" type="submit">Subscribe</button>
                            </div>
                            @error('email')
                                <div class="text-danger text-muted font-14">{{ $message }}</div>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
