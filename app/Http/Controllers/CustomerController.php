<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::get();

        return view("pages.customer.index",['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.customer.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Image Upload
        $photoName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('img'),$photoName);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->photo = $photoName;

        $customer->save();
        
        // return back()->with('success','Created Successfully.');
        return redirect()->route('customers.index')->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customers = Customer::where('id',$id)->first();
        return view("pages.customer.show",['customer'=>$customers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::where('id',$id)->first();
        return view("pages.customer.edit",['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $customer = Customer::where('id',$id)->first();

        //photo Upload
        if(isset($request->photo)){
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$photoName);
            $customer->photo = $photoName;
        };

        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;

        $customer->update();
        
        // return back()->with('success','Updated Successfully.');
        return redirect()->route('customers.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::where('id',$id)->first();
        $customer->delete();

        // return back()->with('success','Deleted Successfully.');
        return redirect()->route('customers.index')->with('success', 'Deleted Successfully.');
    }
}
