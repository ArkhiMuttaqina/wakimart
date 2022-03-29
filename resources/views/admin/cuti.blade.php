@extends('layout.main_layout')
@section('konten')
    <title>Cuti</title>
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
    {{-- Modal Edit --}}
    <div class="modal fade zoom" tabindex="-1" id="modal_edit_cuti">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Edit cuti karyawan</h5>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" action="{{ url('') }}/editcuti" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" id="ubah_id" name="ubah_id">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="e_cuti_nama" name="e_cuti_nama" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Lama Cuti</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="e_cuti_number" name="e_cuti_number"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tanggal Cuti</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control date-picker" id="e_tgl_cuti" name="e_tgl_cuti"
                                    data-date-format="yyyy-mm-dd">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="a_email">Keterangan Cuti</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="e_keterangan_cuti"
                                        name="e_keterangan_cuti" required>
                                </div>
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
    {{-- Modal Hapus --}}
    <div class="modal fade zoom" tabindex="-1" id="modal_del_cuti">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <form autocomplete="off" action="{{ url('') }}/delcuti" method="post">
                        {{ csrf_field() }}
                        <div class="nk-modal">
                            <input type="hidden" id="del_id" name="del_id">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-info-fill bg-danger"></em>
                            <h4 class="nk-modal-title">Perubahan tidak dapat diurungkan!</h4>
                            <div class="nk-modal-text">
                                <p class="lead">Anda yakin ingin menghapus data ini ?</p>
                                <p class="text-soft" id="NamaUser">.</p>
                            </div>
                            <div class="nk-modal-action mt-5">
                                <a class="btn btn-lg btn-mw btn-light" data-dismiss="modal"
                                    style="margin-right: 30px;">Urungkan</a>
                                <button type="submit" class="btn btn-lg btn-mw btn-danger">Hapus</button>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Cuti Karyawan</h3>
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
                                        <li><a href="javascript:void(0)" id="tambah_cuti"
                                                class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"
                                                    data-toggle="modal"></em><span>Cuti Karyawan</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">

                                        <th class="nk-tb-col"><span class="sub-text">No Induk</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Pengguna</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl cuti</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Banyaknya
                                                Cuti</span>
                                        </th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Keterangan</span>
                                        </th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right"><span
                                                class="sub-text">Aksi</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuti as $key => $value)
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
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="ubah({{ json_encode($value) }});"
                                                            class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Ubah Data">
                                                            <em class="icon ni ni-edit-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="hapus({{ json_encode($value) }});"
                                                            class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Hapus">
                                                            <em class="icon ni ni-delete-fill"></em>
                                                        </a>
                                                    </li>
                                                    {{-- <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="hapus({{ json_encode($value) }});" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Beri Cuti">
                                                            <em class="icon ni ni-calendar-booking-fill"></em></em>
                                                        </a>
                                                    </li> --}}
                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#tambah_cuti').click(function() {
            $('#modal_add_cuti').modal('show');
        });


        function hapus(data) {
            document.getElementById('NamaUser').innerText = 'Nama Pengguna : ' + data.nama + '.';
            $("#del_id").val(data.id_cuti);
            $("#modal_del_cuti").modal('show');
        }


        function ubah(data) {
            $("#ubah_id").val(data.id_cuti);
            $("#e_cuti_nama").val(data.nama);
            $("#e_cuti_number").val(data.lama_cuti);
            $("#e_tgl_cuti").val(data.tanggal_cuti);
            $("#e_keterangan_cuti").val(data.alasan_cuti);

            $("#modal_edit_cuti").modal('show');
        }
    </script>
@endsection
