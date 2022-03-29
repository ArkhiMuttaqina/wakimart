@extends('layout.main_layout')
@section('konten')
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="content-page wide-sm m-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                        <div class="nk-block-head-content text-center">
                                            <div class="nk-block-head-sub"><span>Log Changes</span></div>
                                            <h3 class="nk-block-title fw-normal">Perubahan aplikasi</h3>
                                            <div class="col">
                                <img src="{{ asset('images/') }}/wlogo.png" class="img-fluid"
                                    style="width: 70%; margin:10px;">
                            </div>
                                            <div class="nk-block-des">
                                                <p class="lead">Untuk menampilkan progress pengembanghan aplikasi.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="card">
                                            <div id="faqs" class="accordion">

                                                <div class="accordion-item">
                                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q2">
                                                        <h6 class="title">V1.0 2022 APLHA RELEASE</h6>
                                                        <span class="accordion-icon"></span>
                                                    </a>
                                                    <div class="accordion-body collapse" id="faq-q2" data-parent="#faqs">
                                                        <div class="accordion-inner">
                                                            <p> init Alpha release </p>
                                                        </div>
                                                    </div>
                                                </div><!-- .accordion-item -->

                                            </div><!-- .accordion -->
                                        </div><!-- .card -->
                                    </div><!-- .nk-block -->

                                </div><!-- .content-page -->
                            </div>
                        </div>
                    </div>
@endsection
