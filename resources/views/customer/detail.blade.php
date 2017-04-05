@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<h2 class="">DETAIL CUSTOMER</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    @if ($message = Session::get('success'))
	                    <div class="alert alert-info clearfix" role="alert">
	                    	<strong>{{ $message }}</strong>
	                    </div>            
                    @endif
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                    <form>
                                    {{ csrf_field() }}
                                        <fieldset class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" 
                                                   name="nama" value="{{ $detail->nama }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="nama">Tempat,Tanggal Lahir</label>
                                            <input type="text" class="form-control" 
                                                   name="tpt_tgl_lahir" value="{{ $detail->tpt_tgl_lahir }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" 
                                                    name="jenis_kelamin" value="{{ $detail->jenis_kelamin }}">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="alamat">Alamat Lengkap</label>
                                            <textarea rows="4" class="form-control">{{ $detail->alamat }}</textarea>
                                            <!-- <input type="text" class="form-control"
                                                   name="alamat" value="{{ $detail->alamat }}"> -->
                                        </fieldset>
                                        <fieldset class="form-group">
	                                        <label for="agama">Agama</label>
	                                        <input type="text" class="form-control"
                                               name="agama" value="{{ $detail->agama }}">
                                    	</fieldset>
                                    </form>
                                </div>
	                        </div><!-- end col -->
                    	</div>
                    	<div class="col-sm-6">
                    		<div class="row">
	                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
	                                <form>
                                		<fieldset class="form-group">
                                            <label for="status_kawin">Status Kawin</label>
                                            <input type="text" class="form-control"
                                                   name="status_kawin" value="{{ $detail->status_kawin }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control"
                                                   name="pekerjaan"  value="{{ $detail->pekerjaan }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="no_hp">Nomor ponsel</label>
                                            <input type="number" class="form-control"
                                                   name="no_hp"  value="{{ $detail->no_hp }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="blok_rumah">Blok Rumah</label>
                                            <input type="text" class="form-control"
                                                   name="blok_rumah"  value="{{ $detail->blok_rumah }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="komplek">Komplek</label>
                                            <input type="text" class="form-control" 
                                                   name="komplek"  value="{{ $detail->komplek }}">
                                        </fieldset>
                                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-primary pull-right"><i class="fa fa-backward" aria-hidden="true"></i> Kembali</a>
	                                </form>
	                            </div>
	                        </div>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
</div>

@endsection