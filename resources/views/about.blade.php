<x-app-layout>
    <!-- Page Banner -->
    @if(isset($banner_title))
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">{{ $banner_title }}</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}" alt="img"></li>
                            <li class="breadcrumb_item active">{{ $banner_breadcrumb ?? $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(isset($content_sections))
        @foreach($content_sections as $section)
            @if($section['type'] === 'about_intro')
                <!-- About Intro Section -->
                <section id="about_area" class="section_padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="about_area_img">
                                    @if(isset($section['intro_image']) && !empty($section['intro_image']))
                                        @php
                                            $introImage = $section['intro_image'][0];
                                            $introImageUrl = is_object($introImage) && property_exists($introImage, 'url') 
                                                ? $introImage->url 
                                                : asset($introImage);
                                        @endphp
                                        <img src="{{ $introImageUrl }}" alt="About Us Image">
                                    @else
                                        <img src="{{ asset('assets/img/common/about2.png') }}" alt="About Us Image">
                                    @endif
                                    
                                    @if(isset($section['intro_icon']) && !empty($section['intro_icon']))
                                        @php
                                            $introIcon = $section['intro_icon'][0];
                                            $introIconUrl = is_object($introIcon) && property_exists($introIcon, 'url') 
                                                ? $introIcon->url 
                                                : asset($introIcon);
                                        @endphp
                                        <div class="about_icon">
                                            <img src="{{ $introIconUrl }}" alt="About Icon">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="about_area_main_text pt-0">
                                    @if(isset($section['welcome_title']))
                                        <div class="about_area_heading">
                                            @if(isset($section['intro_icon']) && !empty($section['intro_icon']))
                                                @php
                                                    $introIcon = $section['intro_icon'][0];
                                                    $introIconUrl = is_object($introIcon) && property_exists($introIcon, 'url') 
                                                        ? $introIcon->url 
                                                        : asset($introIcon);
                                                @endphp
                                                <img src="{{ $introIconUrl }}" height="39" alt="icon">
                                            @else
                                                <img src="{{ asset('assets/img/icon/about.png') }}" height="39" alt="icon">
                                            @endif
                                            <h3>{{ $section['welcome_title'] }}</h3>
                                        </div>
                                    @endif

                                    @if(isset($section['main_heading']))
                                        <div class="about_area_heading_two">
                                            {!! $section['main_heading'] !!}
                                        </div>
                                    @endif

                                    @if(isset($section['goal_title']) || isset($section['goal_content']))
                                        <div class="about_area_para">
                                            @if(isset($section['goal_title']))
                                                <h3>{{ $section['goal_title'] }}</h3>
                                            @endif
                                            @if(isset($section['goal_content']))
                                                {!! $section['goal_content'] !!}
                                            @endif
                                        </div>
                                    @endif

                                    @if(isset($section['mission_title']) || isset($section['mission_content']))
                                        <div class="about_area_para">
                                            @if(isset($section['mission_title']))
                                                <h3>{{ $section['mission_title'] }}</h3>
                                            @endif
                                            @if(isset($section['mission_content']))
                                                {!! $section['mission_content'] !!}
                                            @endif
                                        </div>
                                    @endif

                                    @if(isset($section['video_url']) && isset($section['video_title']))
                                        <div class="about_vedio_area">
                                            <a href="#" class="btn btn_theme btn_md">Learn more</a>
                                            <a href="{{ $section['video_url'] }}" class="vedio_btn popup-vimeo">
                                                <i class="fa fa-play"></i>{{ $section['video_title'] }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @elseif($section['type'] === 'about_story')
                <!-- About Story Section -->
                <section id="newletter_banner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="newletter_text">
                                    @if(isset($section['story_subtitle']))
                                        <h4>
                                            @if(isset($section['story_icon']) && !empty($section['story_icon']))
                                                @php
                                                    $storyIcon = $section['story_icon'][0];
                                                    $storyIconUrl = is_object($storyIcon) && property_exists($storyIcon, 'url') 
                                                        ? $storyIcon->url 
                                                        : asset($storyIcon);
                                                @endphp
                                                <img src="{{ $storyIconUrl }}" alt="Story Icon">
                                            @else
                                                <img src="{{ asset('assets/img/icon/about.png') }}" alt="Story Icon">
                                            @endif
                                            {{ $section['story_subtitle'] }}
                                        </h4>
                                    @endif
                                    @if(isset($section['story_title']))
                                        {!! $section['story_title'] !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8">
                                @if(isset($section['story_content']))
                                    {!! $section['story_content'] !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            @elseif($section['type'] === 'team_section')
                <!-- Team Section -->
                <section id="testimonial_area" class="section_after section_padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="section_heading">
                                    @if(isset($section['team_subtitle']))
                                        <h3>{{ $section['team_subtitle'] }}</h3>
                                    @endif
                                    @if(isset($section['team_title']))
                                        {!! $section['team_title'] !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        @php
                            // Get team members from Statamic collection
                            $teamMembers = \Statamic\Facades\Entry::query()
                                ->where('collection', 'team_members')
                                ->where('published', true)
                                ->orderBy('order', 'asc')
                                ->get();
                            
                            // Group team members into rows of 4
                            $teamRows = $teamMembers->chunk(4);
                        @endphp

                        @foreach($teamRows as $row)
                            <div class="row">
                                @foreach($row as $member)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="volunteer_wrapper h-100">
                                            <div class="volunteer_img">
                                                @if($member->photo)
                                                    <img loading="lazy" width="330" height="345" 
                                                         src="{{ $member->photo->url }}" 
                                                         alt="{{ $member->get('name') }}">
                                                @else
                                                    <img loading="lazy" width="330" height="345" 
                                                         src="{{ asset('assets/img/volunteer/volunteer-1.png') }}" 
                                                         alt="{{ $member->get('name') }}">
                                                @endif
                                                
                                                @if($member->get('social_links'))
                                                    <div class="volunteer_icon">
                                                        <ul>
                                                            @foreach($member->get('social_links') as $social)
                                                                @if(isset($social['platform']) && isset($social['url']))
                                                                    <li>
                                                                        <a href="{{ $social['url'] }}" target="_blank">
                                                                            @switch($social['platform'])
                                                                                @case('facebook')
                                                                                    <i class="fab fa-facebook-f"></i>
                                                                                    @break
                                                                                @case('twitter')
                                                                                    <i class="fab fa-twitter"></i>
                                                                                    @break
                                                                                @case('instagram')
                                                                                    <i class="fab fa-instagram"></i>
                                                                                    @break
                                                                                @case('linkedin')
                                                                                    <i class="fab fa-linkedin-in"></i>
                                                                                    @break
                                                                                @case('youtube')
                                                                                    <i class="fab fa-youtube"></i>
                                                                                    @break
                                                                                @default
                                                                                    <i class="fas fa-link"></i>
                                                                            @endswitch
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="volunteer_text">
                                                <h3><a href="#!">{{ $member->get('name') ?? $member->get('title') }}</a></h3>
                                                <p>{{ $member->get('position') ?? 'Team Member' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if(!$loop->last)
                                <br>
                            @endif
                        @endforeach
                    </div>
                </section>
            @endif
        @endforeach
    @else
        <!-- Fallback content if no sections are defined -->
        <section id="common_banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="commn_banner_page">
                            <h2><span class="color_big_heading">{{ $title ?? 'About Us' }}</span></h2>
                            <ul class="breadcrumb_wrapper">
                                <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}" alt="img"></li>
                                <li class="breadcrumb_item active">{{ $title ?? 'About Us' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Default About Area -->
        <section id="about_area" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about_area_img">
                            <img src="{{ asset('assets/img/common/about2.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about_area_main_text pt-0">
                            <div class="about_area_heading">
                                <img src="{{ asset('assets/img/icon/about.png') }}" height="39" alt="img">
                                <h3>Welcome to Mukagwa Ministries</h3>
                            </div>
                            <div class="about_area_heading_two">
                                <h2>We strive to promote quality Christian Education, <span class="color_big_heading">Health Care</span> <br />
                                    & Economic Empowerment</h2>
                                <h3>Our Goal:</h3>
                                <p>To partner with organisations in Uganda and internationally to bring about
                                    transformational change through quality Christian education, health care and community
                                    development.</p>
                            </div>
                            <div class="about_area_para">
                                <h3>Mission</h3>
                                <p>Mukagwa ministries exists to impact the nation of Uganda through evangelism and
                                    discipleship, education, health care and community development focused on service,
                                    leadership and excellency to the glory of God.</p>
                            </div>
                            <div class="about_vedio_area">
                                <a href="#" class="btn btn_theme btn_md">Learn more</a>
                                <a href="https://youtu.be/QvNEkZGL-v4" class="vedio_btn popup-vimeo">
                                    <i class="fa fa-play"></i>Birth of Mukagwa Ministries
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</x-app-layout>