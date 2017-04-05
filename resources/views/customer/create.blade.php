@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('customer/store') }}" method="POST">
{{ csrf_field() }}
    <div class="row">
        <div class="col-md-8">
        <h2 class="">TAMBAH CUSTOMER</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" 
                                                   name="nama" placeholder="Nama Sesuai KTP">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="nama">Tempat,Tanggal Lahir</label>
                                            <input type="text" class="form-control" 
                                                   name="tpt_tgl_lahir" placeholder="Pontianak, 1 januari 1990">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" 
                                                    name="jenis_kelamin">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="alamat">Alamat Lengkap</label>
                                            <textarea rows="4" class="form-control" name="alamat" placeholder="Alamat Sesuai KTP"></textarea>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control" 
                                                    name="agama">
                                                <option>ISLAM</option>
                                                <option>KATOLIK</option>
                                                <option>PROTESTAN</option>
                                                <option>HINDU</option>
                                                <option>BUDHA</option>
                                                <option>KHONGHUCU</option>
                                                <option>Lain-Lain</option>
                                            </select>
                                        </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="status_kawin">Status Kawin</label>
                                            <select class="form-control" 
                                                    name="status_kawin">
                                                <option>Belum Menikah</option>
                                                <option>Menikah</option>
                                                <option>Duda</option>
                                                <option>Janda</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control"
                                                   name="pekerjaan">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="no_hp">Nomor ponsel</label>
                                            <input type="number" class="form-control"
                                                   name="no_hp">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="blok_rumah">Blok Rumah</label>
                                            <input type="text" class="form-control"
                                                   name="blok_rumah">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="komplek">Komplek</label>
                                            <input type="text" class="form-control" 
                                                   name="komplek">
                                        </fieldset>
                                        <button type="submit" class="btn btn-lg btn-primary pull-right">Tambah</button>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->   
                    </div><!-- end col -->
                </div>
            </div>
        </div>
    
        <div class="col-md-4">
        <h2 class="">KERABAT CUSTOMER*</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                        <small class="text-muted">*informasi kerabat customer diperlukan agar dapat di hubungi sewaktu-waktu ketika customer tidak bisa dihubungi</small>
                                            <fieldset class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" 
                                                       name="nama_kerabat">
                                                <small class="text-muted">Nama Sesuai KTP</small>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="alamat_kerabat">Alamat Lengkap</label>
                                                <textarea rows="4" class="form-control" name="alamat"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="no_hp_kerabat">Nomor ponsel</label>
                                                <input type="number" class="form-control"
                                                       name="no_hp_kerabat">
                                            </fieldset>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

@endsection