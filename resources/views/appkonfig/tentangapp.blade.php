@extends('layout.main_layout')
@section('konten')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="content-page wide-md m-auto">
                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                        <div class="nk-block-head-content text-center">
                            <h3 class="nk-block-title fw-normal">Tentang Apikasi</h3>
                            <div class="nk-block-des">
                                <div class="col">
                                <img src="{{ asset('images/') }}/wlogo.png" class="img-fluid"
                                    style="width: 70%; margin:10px;">
                            </div>
                                <p class="lead">Aplikasi ini dibuat oleh Arkhi Muttaqina untuk memenuhi penugasan dari Waki.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-xl">
                                <article class="entry">
                                    <h3>wakiERP Alpha edition</h3>
                                    <p>Tidak ada keterangan</p>

                                </article>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .content-page -->
            </div>
    </div>
    </div>
@endsection
