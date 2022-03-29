@extends('layout.main_layout')
@section('konten')


    <title>Admin</title>
    {{-- Modal Tambah Admin --}}
    <div class="modal fade zoom" tabindex="-1" id="modal_add_admin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Admin ERP</h5>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" action="{{ url('') }}/addadmin" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label" for="full-name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="a_full_name" name="a_full_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="a_email">email</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="a_email" name="a_email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="a_email">Password</label>
                            <div class="form-control-wrap">

                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="a_password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg"
                                    placeholder="Enter your passcode" id="a_password" name="a_password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="a_email">Masukan kembali password</label>
                            <div class="form-control-wrap">

                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="a_password2">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg"
                                    placeholder="Enter your passcode" id="a_password2" name="a_password2"
                                    onclick="a_valdiate_pswh()">
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="form-label">Role</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="a_role" name="a_role">
                                    <option value="" selected disabled>Tetapkan Role</option>
                                    @foreach ($rolesaja as $key => $value)
                                        <option value="{{ $value->id_role }}">
                                            {{ $value->nama_role }}</option>
                                    @endforeach
                                </select>
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
    <div class="modal fade zoom" tabindex="-1" id="modal_edit_admin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Admin ERP</h5>
                </div>
                <div class="modal-body">
                    <form autofill="off" action="{{ url('') }}/editadmin" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" id="ubah_id" name="ubah_id">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="e_full_name" name="e_full_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="a_email">email</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="e_email" name="e_email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="a_email">Password</label>
                            <div class="form-control-wrap">

                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="e_password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg"
                                    placeholder="Enter your passcode" id="e_password" name="e_password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="a_email">Masukan kembali password</label>
                            <div class="form-control-wrap">

                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="e_password2">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg"
                                    placeholder="Enter your passcode" id="e_password2" name="e_password2"
                                    onclick="e_valdiate_pswh()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <div class="form-control-wrap">
                                <select class="form-select" id="e_role" name="e_role" required>
                                    <option value="" selected disabled>Tetapkan Role</option>
                                    @foreach ($rolesaja as $key => $value)
                                        <option value="{{ $value->id_role }}">
                                            {{ $value->nama_role }}</option>
                                    @endforeach
                                </select>
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
    <div class="modal fade zoom" tabindex="-1" id="modal_del_admin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <form autocomplete="off" action="{{ url('') }}/deladmin" method="post">
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
                            <h3 class="nk-block-title page-title">Manajer Admin WeERP</h3>
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
                                        <li><a href="javascript:void(0)" id="tambah_usererp"
                                                class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"
                                                    data-toggle="modal"></em><span>Tambah Admin</span></a></li>
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
                                        <th class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </th>
                                        <th class="nk-tb-col"><span class="sub-text">Pengguna</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Role</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right"><span
                                                class="sub-text">Aksi</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($user as $key => $value)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col">
                                                <span class="tb-status">{{ $key + 1 }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                        <span>{{ $value->initial }}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $value->name }} <span
                                                                class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{ $value->email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">{{ $value->nama_role }}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="ubah({{ json_encode($value) }}, '{{ decrypt($value->password) }}');"
                                                            class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Ubah Data">
                                                            <em class="icon ni ni-edit-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action">
                                                        <a href="javascript:void(0)"
                                                            onclick="hapus({{ json_encode($value) }});" class="
                                                            btn btn-trigger btn-icon" data-toggle="tooltip"
                                                            data-placement="top" title="Hapus">
                                                            <em class="icon ni ni-delete-fill"></em>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('#tambah_usererp').click(function() {
                $('#modal_add_admin').modal('show');
            });

            function hapus(data) {
                document.getElementById('NamaUser').innerText = 'Nama Pengguna : ' + data.name + '.';
                $("#del_id").val(data.id_user);
                $("#modal_del_admin").modal('show');
            }


            function ubah(data, password) {
                $("#ubah_id").val(data.id_user);
                $("#e_email").val(data.email);
                $("#e_password2").val(password);
                $("#e_full_name").val(data.name);
                $("#e_role").val(data.id_role);
                $("#modal_edit_admin").modal('show');
            }

            function a_valdiate_pswh() {
                var z = document.getElementById("a_password");
                var a = document.getElementById("a_password2");
                if (z.type === "text" || a.type === "text") {
                    z.type = "password";
                    a.type = "password";
                } else {
                    z.type = "text";
                    a.type = "text";
                }
            }

            function e_valdiate_pswh() {
                var b = document.getElementById("e_password");
                var c = document.getElementById("e_password2");
                if (b.type === "text" || c.type === "text") {
                    b.type = "password";
                    c.type = "password";
                } else {
                    b.type = "text";
                    c.type = "text";
                }
            }
        </script>
    </div>
@endsection
