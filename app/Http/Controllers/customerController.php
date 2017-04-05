<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Pagination\Paginator;

class CustomerController extends Controller
{
    public function index()
    {

        $data['customer']      = Customer::paginate(10);
        $data['cek_kosong']    = Customer::first();

        return view('customer.index',$data);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
    	
        $customer = new Customer;

        $customer->status       = 'Proses';
        $customer->nama 		= $request->nama;
        $customer->tpt_tgl_lahir= $request->tpt_tgl_lahir;
        $customer->jenis_kelamin= $request->jenis_kelamin;
        $customer->alamat       = $request->alamat;
        $customer->agama        = $request->agama;
        $customer->status_kawin = $request->status_kawin;
        $customer->pekerjaan    = $request->pekerjaan;
        $customer->no_hp 		= $request->no_hp;
        $customer->blok_rumah	= $request->blok_rumah;
        $customer->komplek 		= $request->komplek;
        $customer->nama_kerabat = $request->nama_kerabat;
        $customer->no_hp_kerabat= $request->no_hp_kerabat;
        $customer->alamat_kerabat= $request->alamat_kerabat;

        $customer->save();

        return redirect('customer')->with('success','Customer berhasil di tambahkan');
    }

    public function detail($id)
    {
        $data['detail']   = customer::find($id);
        return view('customer.detail',$data);
    }
}
