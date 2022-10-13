<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksion;
use App\Models\TransaksionHeader;
use Carbon\Carbon;


class TransaksionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $startDate = $request->startDate;
        $endDate   = $request->endDate;

        $data = TransaksionHeader::with('tbltranshdr')->where('CreateBy', $startDate)->get();

        return response()->json($data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

        $transaksioHeader = Transaksion::create([
            'TransCode' => $request->TransCode,
            'TransNo'   => $request->TransNo,
            'ItCode'    => $request->ItCode,
            'Qty'       => $request->Qty,
            'CreateBy'  => $request->CreateBy,
            'CreateDt'  => $request->CreateDt,
            'LastUpBy'  => $request->LastUpBy,
            'LastUpDt'  => $request->LastUpDt,
        ]);

        $transaksioDeatails = TransaksionHeader::create([
            'TransCode' => $request->TransCode,
            'TransDt'   => $request->TransDt,
            'CashierCode'    => $request->CashierCode,
            'PayMCode'       => $request->PayMCode,
            'PaidAmt'       => $request->PaidAmt,
            'ChangeAmt'       => $request->ChangeAmt,
            'CreateBy'  => $request->CreateBy,
            'CreateDt'  => $request->CreateDt,
            'LastUpBy'  => $request->LastUpBy,
            'LastUpDt'  => $request->LastUpDt,
        ]);


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
