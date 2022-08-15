<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date1 = $request->start;
        $payment = Payment::sum('total');

        $user = Auth::user()->role_id;
        $usid = Auth::user()->id;


        if (request()->ajax()) {
            if ($user != 4) {
                if (!empty($request->end)) {
                    $payment = Payment::whereBetween('created_at', [$request->start, $request->end])->sum('total');
                    $payments = Payment::from('payments as pay')
                    ->join('banks as ban', 'pay.bank_id', 'ban.id')
                    ->join('banks as bank', 'pay.bank_origin_id', 'bank.id')
                    ->join('payment_methods as pm', 'pay.payment_method_id', 'pm.id')
                    ->join('users as use', 'pay.user_id', 'use.id')
                    ->select('pay.id', 'pay.amount', 'pay.discount', 'pay.total', 'pay.reference', 'ban.name as nameB', 'pm.name as nameP', 'use.name', 'pay.created_at')
                    ->whereBetween('pay.created_at', [$request->start, $request->end])
                    ->get();
                } else {
                    $payment = Payment::sum('total');
                    $payments = Payment::from('payments as pay')
                    ->join('banks as ban', 'pay.bank_id', 'ban.id')
                    ->join('banks as bank', 'pay.bank_origin_id', 'bank.id')
                    ->join('payment_methods as pm', 'pay.payment_method_id', 'pm.id')
                    ->join('users as use', 'pay.user_id', 'use.id')
                    ->join('users as user', 'pay.responsible_id', 'user.id')
                    ->select('pay.id', 'pay.amount', 'pay.discount', 'pay.total', 'pay.reference', 'ban.name as nameB', 'bank.name as nameBO', 'pm.name as nameP', 'use.name', 'user.name as nameU', 'pay.created_at')
                    ->get();
                }
            }

            return datatables()
            ->of($payments)
            ->editColumn('created_at', function(Payment $payment){
                return $payment->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.paymentdate.index', compact('payment'));

    }

    public function pending(Request $request)
    {
        $payment = Payment::where('status', '=', 'PAGADO')->sum('total');
        $user = Auth::user()->role_id;
        $usid = Auth::user()->id;
        if (request()->ajax()) {
            if ($user != 4) {
                $payments = Payment::from('payments as pay')
                ->join('banks as ban', 'pay.bank_id', 'ban.id')
                ->join('banks as bank', 'pay.bank_origin_id', 'bank.id')
                ->join('payment_methods as pm', 'pay.payment_method_id', 'pm.id')
                ->join('users as use', 'pay.user_id', 'use.id')
                ->select('pay.id', 'pay.amount', 'pay.discount', 'pay.total', 'pay.reference', 'ban.name as nameB', 'pm.name as nameP', 'use.name', 'pay.created_at')
                ->where('pay.status', '=', 'PAGADO')
                ->get();
            }

            return datatables()
            ->of($payments)
            ->editColumn('created_at', function(Payment $payment){
                return $payment->created_at->format('Y-m-d');
            })
            ->toJson();
        }
        return view('admin.paymentdate.pending', compact('payment'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
