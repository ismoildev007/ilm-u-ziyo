<?php
$lang = \Illuminate\Support\Facades\App::getLocale()


?>


<x-layouts.main>
    <main id="main">
        @foreach($homes as $home)
            <section id="hero" class="d-flex align-items-center">
                <div class="container">
                    <h1>{{ $home['title_'. $lang] }}</h1>
                    <h2>{{ $home['description_'. $lang] }}</h2>
                    <a href="#contact" class="btn-get-started scrollto">@lang('words.sign_up')</a>
                </div>
            </section>
        @endforeach

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3 class="mt-5 mx-3">@lang('words.card_a')</h3>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>@lang('words.card_b')</h4>
                                        <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> -->
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bi-activity"></i>
                                        <h4>@lang('words.card_c')</h4>
                                        <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>@lang('words.card_d')</h4>
                                        <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row d-flex justify-content-around">
                        @foreach($documents as $document)
                            <div class="col-md-5 col-10 justify-content-between mb-2">
                                <div class="card card-body shadow">
                                    <img src="{{ asset('storage/' . $document->licence) }}" class="w-100 object-fit-cover">
                                </div>
                            </div>
                        @endforeach
                        @foreach($documents as $document)
                            <div class="col-md-5 col-10 justify-content-center align-items-stretch">
                                <div class="card card-body shadow">
                                    <img src="{{ asset('storage/' . $document->passport) }}" class="w-100 object-fit-cover">
                                </div>
                            </div>
                        @endforeach
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row d-flex justify-content-around">
{{--                    <div class="col-md-12 d-flex">--}}
                        <div class="col-10 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                            @foreach($videos as $video)
                                <a href="{{ $video->link }}" class="glightbox play-btn mb-4"></a>
                            @endforeach
                        </div>

                        <div class="col-12 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-lg-5">
                            <h3>Ilm-u ziyo @lang('words.ilm_u_ziyo')</h3>
                                <p>@lang('words.text')
                                    @foreach($documents as $document)
                                        <a href="{{ asset('storage/' . $document->licence) ?? 'litsenziya' }}" target="_blank">litsenziya</a>
                                    @endforeach
                                </p>
                            @foreach($abouts as $about)
                                <div class="icon-box">
                                    <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
                                    <h4 class="title"><a>1. {{$about['title_'. $lang] }}</a></h4>
                                    <p class="description">{{ $about['description_'. $lang] }}</p>
                                </div>
                            <div class="icon-box">
                                <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
                                <h4 class="title"><a>2. {{ $about['branches_'. $lang] }}</a></h4>
                                <p class="description">{{ $about['short_content_'. $lang] }}</p>
                            </div>
                            @endforeach
                        </div>
{{--                    </div>--}}
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">
                    @foreach($numbers as $number)

                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="fas bi-person"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $number->students }}" data-purecounter-duration="0.8" class="purecounter"></span>
                                <p>@lang('words.a')</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="count-box">
                                <i class="fas fa-user-md"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $number->teachers }}" data-purecounter-duration="1" class="purecounter"></span>
                                <p>@lang('words.b')</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                            <div class="count-box">
                                <i class="fas fa-flask"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $number->departments }}" data-purecounter-duration="1.5" class="purecounter"></span>
                                <p>@lang('words.c')</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                            <div class="count-box">
                                <i class="far fa-hospital"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $number->practices }}" data-purecounter-duration="2" class="purecounter"></span>
                                <p>@lang('words.d')</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Departments Section ======= -->
        <section id="programs" class="departments">
            <div class="container">
                    <div class="section-title">
                        <h2>@lang('words.edu')</h2>
                        @foreach($educationals as $educational)
                        <p>{{ $educational['description_'. $lang] }}</p>
                        @endforeach
                    </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            @foreach($educationals as $num => $educational)
                                <li class="nav-item">
                                    <a class="nav-link {{ $num == 0 ? 'active show' : '' }}" data-bs-toggle="tab" href="#tab-{{ $num + 1 }}">{{ $educational['title_'. $lang] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            @foreach($educationals as $num => $educational)
                                <div class="tab-pane {{ $num == 0 ? 'active show' : '' }}" id="tab-{{ $num + 1 }}">
                                    <div class="row gy-4">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3>{{ $educational['title_'. $lang] }}</h3>
                                            <p class="fst-italic">{{ $educational['short_content_'. $lang] }}</p>
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="{{ asset('storage/' . $educational->photo) }}" alt="" class="img-fluid"  style="border-radius: 16px; height: 200px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Doctors Section ======= -->
            <section id="team" class="doctors">
                <div class="container">

                    <div class="section-title">
                        <h2>Ilm-u ziyo @lang('words.ilm_u_ziyo') @lang('words.professor')</h2>
                    </div>
                    <div class="row">
                        @foreach($teachers as $teacher)
                            <div class="col-lg-6">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="{{ asset('storage/' . $teacher->photo ) }}" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>{{ $teacher->name }}</h4>
                                        <span>{{ $teacher['title_'. $lang] }}</span>
                                        <p>{{ $teacher['short_content_'. $lang] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Anesthesiologist</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <!-- ======= Gallery Section ======= -->
        <section id="student_life" class="gallery">
            <div class="container">
                <div class="section-title">
                    <h2>@lang('words.photo')</h2>
                    <p>@lang('words.text_b')</p>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-around">
                    <div class="col-md-12 col-10">
                        <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                                          slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                                          coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
                            @foreach($students as $student)
                                <swiper-slide>
                                    <img src="{{ asset('storage/' . $student->student_photos) }}" />
                                </swiper-slide>
                            @endforeach
                        </swiper-container>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($pupils as $pupil)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('storage/' . $pupil->photo) }}" class="testimonial-img" alt="" style="height: 100px;width: 100px;">
                                        <h3>{{ $pupil->name }}</h3>
                                        <h4>{{ $pupil['title_'. $lang] }}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ $pupil['short_content_'. $lang] }}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('words.question')</h2>
                    <p>@lang('words.text_c')</p>
                </div>

                <div class="faq-list">
                    <ul>
                        @foreach($questions as $question)
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">{{ $question['title_'. $lang] }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                    <p>{{ $question['description_'. $lang] }}</p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('words.sign_up')</h2>
                    <p>@lang('words.text_d')</p>
                </div>
            </div>

            <div class="container">
                <div class="form-style">
                    <p>@lang('words.sign_pass')</p>
                    <ul>
                        <li>@lang('words.pass')</li>
                        <li>@lang('words.diplom')</li>
                    </ul>
                    <a href="https://forms.amocrm.ru/rtltdxd" class="appointment-btn scrollto" target="_blank">@lang('words.sign_up')</a>
                </div>

            </div>
            <div class="container">
                <div class="row mt-5">

                    @foreach($contacts as $contact)
                        <div class="col-lg-6">
                            <h4 style="margin-bottom: 32px;">@lang('words.contact')</h4>
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>@lang('words.location'):</h4>
                                    <p>@lang('words.location_a')</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>{{ $contact->email }}</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>@lang('words.number')</h4>
                                    <p>{{ $contact->phone_number }}</p>
                                </div>

                            </div>

                        </div>
                    @endforeach

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div>
                            <iframe style="border:0; width: 100%; height: 350px; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.7648597751727!2d65.80914382851854!3d38.85399639822598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4ea7421d88f3bf%3A0x797a8ef8306eac95!2sIlm-u%20Ziyo%20Tibbiyot%20Kolleji!5e0!3m2!1sen!2s!4v1710011036932!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <!-- <div class="col-lg-3 col-md-6 footer-contact">
                      <h3>Bizning butun respublika bo'ylab hamkor tibbiyot texnikumlarimiz mavjud</h3>
                      <p>
                        Nimadurlar nimadurlar
                      </p>
                    </div> -->
                        <div class="col-lg-4 col-md-6 footer-links">
                            <h4>@lang('words.partner_collage')</h4>
                            <ul>
                                @foreach($partners as $partner)
                                <li><i class="bx bx-chevron-right"></i> <a > {{ $partner->partner_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links">
                            <h4>@lang('words.partner_school')</h4>
                            <ul>
                                @foreach($part as $cam)
                                    <li><i class="bx bx-chevron-right"></i> <a > {{ $cam->partner_name }} </a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>@lang('words.number')</h4>
                            <p>@lang('words.number_text'):</p>
                            <h4>+998 (78) 113-93-93</h4>
                            <p><a href="https://forms.amocrm.ru/rtltdxd" target="_blank">@lang('words.sign_up')</a></p>
                        </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <p><strong>"Ilm-u ziyo @lang('words.ilm_u_ziyo')"</strong><br>@lang('words.internet')</p>
            </div>
            @foreach($contacts as $contact)
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="{{ $contact->telegram }}" target="_blank" class="telegram"><i class="bx bxl-telegram"></i></a>
                    <a href="{{$contact->instagram}}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="{{ $contact->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{ $contact->youtube }}" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="{{ $contact->linkedin }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            @endforeach
        </div>
    </footer>
</x-layouts.main>
