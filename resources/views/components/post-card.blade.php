@props(['post'])
@if (isset($post))
    @php
        $image_url = strpos($post->thumbnail, 'http') === 0 ? $post->thumbnail : asset('storage/' .$post->thumbnail);
        // dd($image_url);
    @endphp
    <div class="blog_card_wrapper">
        <div class="blog_card_img">
            <x-post-img :image_url="$image_url" alt="post Image" />
        </div>
        <div class="blog_card_text">
            <x-post-tag :tags="$post->tags" />
            <div class="blog_card_heading">
                <h3><a href="#">{{ $post->title }}</a></h3>
                <p>{{ strip_tags(str($post->body)->words(15), '<b>') }}</p>
            </div>
            <div class="blog_boxed_bottom_wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="blog_bottom_boxed">
                            <div class="blog_bottom_icon">
                                <img src="assets/img/icon/cal.png" alt="icon">
                            </div>
                            <div class="blog_bottom_content">
                                <h5>Published At:</h5>
                                <p>{{ $post->published_at->format('d M, Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="blog_bottom_boxed blog_left_padding">
                            <div class="blog_bottom_icon">
                                <img src="assets/img/icon/user.png" alt="icon">
                            </div>
                            <div class="blog_bottom_content">
                                <h5>By:</h5>
                                <p>{{ $post->author->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
