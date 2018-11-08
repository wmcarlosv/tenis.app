<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentMethod;

class PaymentMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_methods = PaymentMethod::all();
        return view('admin.payment_methods.home', ['payment_methods' => $payment_methods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment_methods.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $payment_method = PaymentMethod::create($request->all());

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('payment_methods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        return view('admin.payment_methods.edit', ['payment_method' => $payment_method]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->name = $request->input('name');
        $payment_method->save();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('payment_methods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('payment_methods.index');
    }
}
