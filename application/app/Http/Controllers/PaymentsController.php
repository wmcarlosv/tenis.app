<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\PaymentMethod;
use App\Product;
use App\Championship;
use App\ChampionshipPlayer;
use Auth;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::ALL();
        return view('admin.payments.home', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'payment_method_id' => 'required',
            'reference_number' => 'required'
        ]);

        $payment = new Payment();
        $payment->product_id = $request->input('product_id');
        $payment->user_id = $request->input('user_id');
        $payment->payment_method_id = $request->input('payment_method_id');
        $payment->amount = $request->input('amount');
        $payment->status = 1;
        if($request->hasFile('attachment')){
            $payment->attachment = $request->attachment->store("public/payments/attachments");
        }else{
            $payment->attachment = NULL;
        }
        $payment->reference_number = $request->input('reference_number');
        $payment->save();


        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        $page_from = $request->input('page_from');

        if($page_from == "subscribe_to_championship"){
            $cp = new ChampionshipPlayer();
            $cp->championship_id = $request->input('championship_id');
            $cp->user_id = Auth::user()->id;
            $cp->payment_id = $payment->id;
            $cp->player_category_id = Auth::user()->player_category_id;
            $cp->save();
        }

        if(empty($page_from)){
            return redirect()->route('payments.index');
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment = Payment::find($id);
        return view('admin.payments.show',['payment' => $payment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function aproved_payment($id = NULL)
    {
        $payment = Payment::findorFail($id);
        $payment->status = 2;
        $payment->payment_date = date('Y-m-d H:m:s');
        $payment->update();
        flash()->overlay('Pago Aprovado con Exito', 'Alerta!!');
        return redirect()->route('payments.index');
    }

    public function deaproved_payment($id = NULL)
    {
        $payment = Payment::findorFail($id);
        $payment->status = 3;
        $payment->update();
        flash()->overlay('Pago Desaprovado con Exito', 'Alerta!!');
        return redirect()->route('payments.index');
    }

    public function my_payments($id = NULL){
        $payments = Payment::where('user_id','=',$id)->orderby('payment_date','DESC')->get();
        if(!$payments){
            $payments = [];
        }
        return view('admin.payments.my_payments',['payments' => $payments]);
    }

    public function subscribe_to_site($id = NULL){

        $user = User::findorFail($id);
        $product = Product::where('code','=','SAS')->first();
        $payment_methods = PaymentMethod::all();
        $array = [];
        foreach($payment_methods as $pm){
            $array[$pm->id] = $pm->name;
        }

        return view('admin.payments.subscribe_to_site',['user' => $user, 'product' => $product, 'payment_methods' => $array]);
    }

    public function subscribe_to_championship($user_id = NULL, $championship_id = NULL){

        $user = User::findorFail($user_id);
        $product = Product::where('code','=','SAC')->first();
        $payment_methods = PaymentMethod::all();
        $array = [];
        foreach($payment_methods as $pm){
            $array[$pm->id] = $pm->name;
        }

        $championship = Championship::findorFail($championship_id);

        return view('admin.payments.subscribe_to_championship',['user' => $user, 'product' => $product, 'payment_methods' => $array, 'championship' => $championship]);
    }
}