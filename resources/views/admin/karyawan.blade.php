@extends('layout.main_layout')
@section('konten')
    {{-- Modal Tambah karyawan --}}

    <title>Karyawan </title>

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
    {{-- Modal Edit --}}
    <div class="modal fade zoom" tabindex="-1" id="modal_edit_karyawan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Karyawan</h5>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" action="{{ url('') }}/editkaryawan" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" id="ubah_id" name="ubah_id">
                        <div class="form-group">
                            <label class="form-label" for="e_full_name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="e_full_name" name="e_full_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="e_address">Alamat</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="e_address" name="e_address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tanggal Lahir</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control date-picker" id="e_birth" name="e_birth" data-date-format="yyyy-mm-dd" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Tanggal Bergabung</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control date-picker" id="e_registered" name="e_registered" data-date-format="yyyy-mm-dd" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="form-label">Ubah Jatah Cuti</label>
                            <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="e_jatah_cuti" name="e_jatah_cuti" required>
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
    <div class="modal fade zoom" tabindex="-1" id="modal_del_karyawan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <form autocomplete="off" action="{{ url('') }}/delkaryawan" method="post">
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
                            <h3 class="nk-block-title page-title">Manajer Karyawan</h3>
                            <div class="nk-block-des text-soft">
                                <p>Informasi daftar karyawan.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                        class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li><a href="javascript:void(0)" id="tambah_karyawan"
                                                class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"
                                                    data-toggle="modal"></em><span>Tambah Karyawan</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card card-preview">
                        <div class="card-inner">
                             <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span class="sub-text">No Induk</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Pengguna</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl Lahir</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl Bergabung</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Sisa Cuti</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right"><span
                                                class="sub-text">Aksi</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karyawan as $key => $value)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-azure">{{ $value->no_induk }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                        <span>{{ substr($value->nama, 0, 1);}} </span>
                                                    </div>
                                                    <div class="user-info">

                                                        <span class="tb-lead">{{ $value->nama }} <span
                                                                class="dot dot-success d-md-none ml-1"></span></span>

                                                        <span>{{mb_strimwidth($value->alamat, 0, 50, "...");  }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status">{{ $value->tanggal_lahir }}</span>
                                            </td>

                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status">{{ $value->date_registered	 }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-blue">{{ $value->jatah_cuti }}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="ubah({{ json_encode($value) }});" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Ubah Data">
                                                            <em class="icon ni ni-edit-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="hapus({{ json_encode($value) }});" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Hapus">
                                                            <em class="icon ni ni-delete-fill"></em>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- Old Table withOut Ajaaaaaaax Asw --}}
                            {{-- <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span class="sub-text">No Induk</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Pengguna</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl Lahir</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tgl Bergabung</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Sisa Cuti</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right"><span
                                                class="sub-text">Aksi</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karyawan as $key => $value)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-azure">{{ $value->no_induk }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                        <span>{{ substr($value->nama, 0, 1);}} </span>
                                                    </div>
                                                    <div class="user-info">

                                                        <span class="tb-lead">{{ $value->nama }} <span
                                                                class="dot dot-success d-md-none ml-1"></span></span>

                                                        <span>{{mb_strimwidth($value->alamat, 0, 50, "...");  }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status">{{ $value->tanggal_lahir }}</span>
                                            </td>

                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status">{{ $value->date_registered	 }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-blue">{{ $value->jatah_cuti }}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="ubah({{ json_encode($value) }});" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Ubah Data">
                                                            <em class="icon ni ni-edit-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="hapus({{ json_encode($value) }});" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Hapus">
                                                            <em class="icon ni ni-delete-fill"></em>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                    @endforeach
                                </tbody>
                            </table> --}}
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->
            </div>
        </div>

        <script type="text/javascript">
            $('#tambah_karyawan').click(function() {
                $('#modal_add_karyawan').modal('show');
            });

            function hapus(data) {
                document.getElementById('NamaUser').innerText = 'Nama Pengguna : ' + data.nama + '.';
                $("#del_id").val(data.id_karyawan);
                $("#modal_del_karyawan").modal('show');
            }


            function ubah(data) {
                $("#ubah_id").val(data.id_karyawan);
                $("#e_full_name").val(data.nama);
                $("#e_address").val(data.alamat);
                $("#e_birth").val(data.tanggal_lahir);
                $("#e_registered").val(data.date_registered);
                $("#e_jatah_cuti").val(data.jatah_cuti);
                $("#modal_edit_karyawan").modal('show');
            }

            $(document).ready(function(){

            });

        </script>
    </div>
@endsection
