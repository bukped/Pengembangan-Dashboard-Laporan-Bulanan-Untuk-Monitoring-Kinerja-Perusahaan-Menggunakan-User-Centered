<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\resume_financial_statement;
use App\Http\Resources\resume_financial_statementResource;

class resume_financial_statementController extends Controller
{
    public function index()
    {
        $data = resume_financial_statement::all();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_hpp()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'HPP')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_exp()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'exp')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_exp_monthly(){
        $data = resume_financial_statement::where('code_item', '=', 'exp')->where('bulan' , '=', date('M') )->get();
        if ($data->count() == 0) {
            return response()->json([
                'Message' => 'Data Monthly not found',
                'Data' => $data->count(),
            ]);
        }
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_incm()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'incm')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_incm_monthly()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'incm')->whereMonth('bulan', '=', date('M'))->get();
        if ($data->count() == 0) {
            return response()->json([
                'Message' => 'Data Monthly not found',
                'Data' => $data->count(),
            ]);
        }
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_kasbank()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'kasbank')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_piutang()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'piutang')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]);
    }

    public function get_prftog()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'prftog')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]); 
    }

    public function get_utang()
    {
        $data = resume_financial_statement::where('code_item' , '=', 'utang')->get();
        return response()->json([
            'Data' => $data,
            'Total' => $data->count(),
        ]); 
    }
}
