@extends('layouts.app')

@section('content')

<div class="home_">
    <div class="home_background_container_ prlx_parent">
        <div class="home_background_ prlx" style="background-image:url( {{ asset ( 'assets/images/1.jpg')}} )"></div>
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
                    <div class="about_title">Contact Us</div>

                    <div class="contact_info">
                        <ul>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="{{ asset('assets/images/placeholder.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                Bogani E Rd, Nairobi
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="{{ asset('assets/images/smartphone.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0709691024 | 0709 691164
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="{{ asset('assets/images/envelope.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>admissions@cuea.edu
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection