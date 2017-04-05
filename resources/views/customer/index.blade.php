@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h2 class="">CUSTOMER</h2>
            <div class="panel panel-default">
                
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-info clearfix" role="alert">
                             <strong>{{ $message }}</strong>
                             <span class="closebtn pull-right" onclick="this.parentElement.style.display='none';"><i class="fa fa-times"></i></span>
                            </div>
                        @endif
                        <a href="{{ url('customer/create') }}"><button type="button" class="btn btn-primary pull-right" >Tambah Customer</button></a>
                    </div>
                <div class="container-fluid">
                    <table class="table">
                        <thead class="thead-default">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nomor Ponsel</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($customer as $c)
                            <tr>
                                <th scope="row">{{$c->id}}</th>
                                <td>{{$c->nama}}</td>
                                <td>{{$c->no_hp}}</td>
                                <td>{{$c->status}}</td>
                                <td>
                                <a href="{{ url('customer/detail/'.$c->id) }}">Detail</a>
                                  <!--   <button type="button" class="btn-small btn-success-outline btn-rounded waves-effect waves-light">Success</button> -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $customer->render() !!}

                    @if($cek_kosong)
                    @else
                       <p align="center">-Tidak ada data customer-</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection