<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        return view('customers.list', ['customers' => $customers]);
    }

    public function create()
    {
        return view('customers.form');
    }

    public function save(Request $request)
    {
        $customer = new Customer();
        $customer->create($request->all());
//        $customer = $customer->create($request->all()); // Trata o request como um json pegando apenas os dados populados no DB

        \Session::flash('msg_success', 'Customer create with success!');

        return Redirect::to('customers/new');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.form', ['customer' => $customer]);
    }

    public function update($id, Request $request)
    {
        $customer = Customer::findOrFail($id);

        $customer->update($request->all());

        \Session::flash('msg_success', 'Customer update with success!');

        return Redirect::to('customers/'.$customer->id.'/edit');
//        return Redirect::to('customers');
    }

    public function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();

        \Session::flash('msg_success', 'Customer deleted with success!');

        return Redirect::to('customers');
    }
}
