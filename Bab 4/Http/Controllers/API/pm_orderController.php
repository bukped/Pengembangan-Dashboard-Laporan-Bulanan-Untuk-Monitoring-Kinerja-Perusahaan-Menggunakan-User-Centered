<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\pm_order;
use App\Http\Resources\pm_orderResource;

class pm_orderController extends Controller
{
    public function index()
    {
        $data = pm_order::where('order_type', 'SM03')->get();
        return response()->json([
            'Data' => pm_orderResource::collection(($data), 'Data Fetched'),
            'Total' => $data->count()
        ]);
    }

    public function show($id)
    {
        $order = pm_order::find($id);
        if (is_null($order)) {
            return response()->json(['Message' => 'Data not found'], 404);
        }
        return response()->json([new pm_orderResource($order)]);
    }

    public function get_teco()
    {
        $data = pm_order::where('system_status', 'LIKE', '%TECO%')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_pending()
    {
        $data = pm_order::where('system_status', 'NOT LIKE', '%CNF%')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_rfq()
    {
        $data = pm_order::where('system_status', 'LIKE', '%QUAC%')->whereMonth('scheduled_start' , '=', date('m'))->get();
        if ($data->count() == 0) {
            return response()->json([
                'Total' => $data->count(),
                'Message' => 'Data RFQ not found',
            ]);
        }
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_cnf()
    {
        $data = pm_order::where('system_status', 'LIKE', '%CNF%')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }
    
    public function get_summary()
    {
        $ordertype = pm_order::where('order_type', 'SM03')->get();
        $teco = pm_order::where('system_status', 'LIKE', '%TECO%')->get();
        $pending = pm_order::where('system_status', 'NOT LIKE', '%CNF%')->get();
       
        $data = [
            'Total_WO_Terconvert' => $ordertype->count(),
            'Total_WO_TECO' => $teco->count(),
            'Total_WO_Pending' => $pending->count(),
        ];
        return response()->json(['Summary' => $data]);
    }

    public function get_summary_monthly()
    {
        $ordertype = pm_order::where('order_type', 'SM03')->whereMonth('scheduled_start' , '=', date('m'))->get();
        $teco = pm_order::where('system_status', 'LIKE', '%TECO%')->whereMonth('scheduled_start' , '=', date('m'))->get();
        $pending = pm_order::where('system_status', 'NOT LIKE', '%CNF%')->whereMonth('scheduled_start' , '=', date('m'))->get();
       
        $data = [
            'Total_WO_Terconvert' => $ordertype->count(),
            'Total_WO_TECO' => $teco->count(),
            'Total_WO_Pending' => $pending->count(),
        ];
        return response()->json(['Summary' => $data]);
    }
}
