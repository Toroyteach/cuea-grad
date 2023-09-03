@extends('layouts.app')

@section('content')

<div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{ asset ( 'assets/images/slider_background.jpg)')}} "></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{ asset ( 'assets/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{ asset ( 'assets/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
    </div>

</div>

<div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset ( 'assets/images/earth-globe.svg')}}" class="svg" alt="">
                        <a href="#faq">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Frequently Asked Questions</h2>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset ( 'assets/images/books.svg')}}" class="svg" alt="">
                        <a href="#news">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Up Coming Events</h2>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset ( 'assets/images/professor.svg')}}" class="svg" alt="">
                        <a href="{{ route('resources')}}">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Download Resources</h2>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="events page_section" id="news">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Upcoming Events</h1>
                </div>
            </div>
        </div>

        <div class="event_items">

            <!-- Event Item -->
            @if($latestNews->count() > 0)

            @foreach($latestNews as $news)
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">{{ \Carbon\Carbon::parse($news->published_date)->format('d') }}</div>
                                <div class="event_month">{{ \Carbon\Carbon::parse($news->published_date)->format('M') }}</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="{{ route('single', $news->id) }}">{{ $news->title }}</a></div>
                                <p>{{ Illuminate\Support\Str::limit($news->content, 40) }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">

                                @if($news->media->count() > 0)
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach($news->media as $index => $mediaItem)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" @if($index===0) class="active" @endif></li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">

                                        @foreach($news->media as $index => $mediaItem)
                                        <div class="carousel-item parent-div {{ ($index === 0) ? 'active' : '' }}">
                                            @if($mediaItem->collection_name === 'images')

                                            <img src="{{ $mediaItem->getUrl() }}" class="d-block w-100" alt="Image">

                                            @endif
                                        </div>
                                        @endforeach

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                @endif


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

            @else
            <div class="alert alert-warning">
                No events available.
            </div>
            @endif

        </div>

    </div>
</div>

<!-- Events -->
<div class="testimonials page_section text-center" id="faq">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url({{ asset ( 'assets/images/testimonials_background.jpg')}})"></div>
    </div>

    <h1>Frequently Asked Questions</h1>

    <div class="d-flex justify-content-center">
        @if($faqs->count() > 0)
        <div class="col-8">
            @foreach($faqs as $faq)

            <details class="accordion">
                <summary class="accordion-btn text-dark">{{ $faq->question }}</summary>
                <div class="accordion-content">
                    <p>
                        {{ $faq->answer }}.
                    </p>
                </div>
            </details>

            @endforeach
        </div>
        @else
        <div class="alert alert-info">
            No FAQs available.
        </div>
        @endif
    </div>

</div>

@endsection