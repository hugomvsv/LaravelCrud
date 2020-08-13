<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers=Customer::all();
        return view('customers.index')->with(compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request)
    {
       $customer= new Customer([
            'name'=>$request->name,
            'email'=>$request->email,
            'birth'=>$request->birthdate,
        ]);
       $customer->save();
       if ($customer){
           return redirect('admin/Customers');
       }
    }


    public function show($id)
    {
        $customer=Customer::find($id);
        return view('customers.show')->with(compact('customer'));
    }


    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customers.edit')->with(compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $customer=Customer::find($id);
        $customer->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'birth'=>$request->birthdate,
        ]);
        $customer->save();
        if ($customer){
            return redirect('admin/Customers');
        }
    }

    public function destroy($id)
    {
        /*$customer=Customer::find($id);
        $customer->delete();
        return redirect('admin/Customers');ª*/
        return $id;

    }

}
