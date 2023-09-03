@extends('layouts.app')

@section('content')

<div class="home_">
    <div class="home_background_container_ prlx_parent">
        <div class="home_background_ prlx" style="background-image:url( {{ asset ( 'assets/images/contact_background.jpg')}} )"></div>
    </div>
    <div class="home_content_">
        <h1>Contact</h1>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about">
                    <div class="about_title">Join Courses</div>
                    <p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>

                    <div class="contact_info">
                        <ul>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="{{ asset('assets/images/placeholder.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                Blvd Libertad, 34 m05200 Arévalo
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="{{ asset('assets/images/smartphone.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0034 37483 2445 322
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="{{ asset('assets/images/envelope.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>hello@company.com
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection