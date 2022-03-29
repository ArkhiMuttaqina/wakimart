@extends('layout.main_layout')
@section('konten')
    {{-- Modal Tambah karyawan --}}

    <div class="modal fade zoom" tabindex="-1" id="modal_add_karyawan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Karyawan</h5>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" action="{{ url('') }}/addkaryawan" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label" for="a_full_name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="a_full_name" name="a_full_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="a_address">Alamat</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="a_address" name="a_address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tanggal Lahir</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control date-picker" id="a_birth" name="a_birth" data-date-format="yyyy-mm-dd">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Tanggal Bergabung</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control date-picker" id="a_registered" name="a_registered" data-date-format="yyyy-mm-dd">
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
        {{-- Modal Tambah Cuti --}}
    <div class="modal fade zoom" tabindex="-1" id="modal_add_cuti">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Cuti Karyawan</h5>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" action="{{ url('') }}/addcuti" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="form-label">Pilih Karyawan</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="a_p_karyawan" name="a_p_karyawan">
                                    @foreach ($karyawan as $key => $value)
                                        <option value="{{ $value->id_karyawan }}">
                                            {{ $value->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Lama Cuti</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="a_cuti_number" name="a_cuti_number"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tanggal Cuti</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control date-picker" id="a_tgl_cuti" name="a_tgl_cuti"
                                    data-date-format="yyyy-mm-dd">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="a_email">Keterangan Cuti</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="a_keterangan_cuti" name="a_keterangan_cuti"
                                    required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Me. Dashboard</h3>
                            <div class="nk-block-des text-soft">
                                <p>Sekilas semuanya.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                        class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li><a href="javascript:void(0)" id="tambah_cuti" class="btn btn-white btn-outline-light"><em
                                                    class="icon ni ni-plus"></em><span>Cuti Karyawan</span></a></li>
                                        <li><a href="javascript:void(0)" id="tambah_karyawan" class="btn btn-white btn-outline-light"><em
                                                    class="icon ni ni-plus"></em><span>Tambah Karyawan</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Baru saja ambil cuti</h6>
                                        </div>
                                        <div class="card-tools">
                                            <ul class="card-tools-nav">
                                                <li class="active"><a href="{{ route('cuti') }}"><span>Lihat
                                                            Semua</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nk-activity">
                                     @foreach ($cutinewst as $key => $value)
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-success"><img
                                                src="./images/avatar/c-sm.jpg" alt=""></div>
                                        <div class="nk-activity-data">
                                            <div class="label">{{ $value->nama }} cuti dikarenakan {{ $value->alasan_cuti }}.</div>
                                            <span class="time">Cuti {{ $value->lama_cuti }} Hari</span>
                                        </div>
                                    </li>
                                     @endforeach
                                </ul>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Pengguna baru</h6>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">
                                                    <li class="active"><a
                                                            href="{{ route('karyawan') }}"><span>Lihat Semua</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        @foreach ($karyawannwest as $key => $value)
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim">
                                                <span>{{ substr($value->nama, 0, 1);}}</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{ $value->nama }}</span>
                                                <span class="sub-text">{{mb_strimwidth($value->alamat, 0, 50, "...");  }}</span>
                                            </div>
                                            <div class="user-action">
                                            </div>
                                        </div>
                                         @endforeach
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->

                <div class="nk-blok">
                    <div class="row g-gs">
                        <div class="col-xxl-6">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <ul class="nav nav-tabs mt-n3">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tabItem1">Cuti Lebih dr
                                                1x</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tabItem2">Cuti Lebih dr
                                                10x</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tabItem1">
                                             <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">

                                        <th class="nk-tb-col"><span class="sub-text">No Induk</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Pengguna</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl cuti</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Banyaknya Cuti</span>
                                        </th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Keterangan</span>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuti1x as $key => $value)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-azure">{{ $value->no_induk }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                        <span> </span>
                                                    </div>
                                                    <div class="user-info">

                                                        <span class="tb-lead">{{ $value->nama }} <span
                                                                class="dot dot-success d-md-none ml-1"></span></span>

                                                        <span>{{ $value->alamat }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status">{{ $value->tanggal_cuti }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-blue">{{ $value->lama_cuti }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-blue">{{ $value->alasan_cuti }}</span>
                                            </td>

                                        </tr><!-- .nk-tb-item  -->
                                    @endforeach
                                </tbody>
                            </table>
                                        </div>
                                        <div class="tab-pane" id="tabItem2">
                                             <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">

                                        <th class="nk-tb-col"><span class="sub-text">No Induk</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Pengguna</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl cuti</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Banyaknya Cuti</span>
                                        </th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Keterangan</span>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuti10x as $key => $value)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-azure">{{ $value->no_induk }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                        <span> </span>
                                                    </div>
                                                    <div class="user-info">

                                                        <span class="tb-lead">{{ $value->nama }} <span
                                                                class="dot dot-success d-md-none ml-1"></span></span>

                                                        <span>{{ $value->alamat }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status">{{ $value->tanggal_cuti }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-blue">{{ $value->lama_cuti }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-blue">{{ $value->alasan_cuti }}</span>
                                            </td>

                                        </tr><!-- .nk-tb-item  -->
                                    @endforeach
                                </tbody>
                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                    </div>
                </div>
            </div>
        </div>
                <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous"></script>
          <script type="text/javascript">
            $('#tambah_cuti').click(function() {
                $('#modal_add_cuti').modal('show');
            });
            $('#tambah_karyawan').click(function() {
                $('#modal_add_karyawan').modal('show');
            });
        </script>
    </div>
@endsection
