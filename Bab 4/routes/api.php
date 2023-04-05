<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [\App\Http\Controllers\API\ClientController::class, 'login'])->name('client.login');

Route::get('/pm_order/teco/', [App\Http\Controllers\API\pm_orderController::class, 'get_teco']);
Route::get('/pm_order/pending/', [App\Http\Controllers\API\pm_orderController::class, 'get_pending']);
Route::get('/pm_order/rfq/', [App\Http\Controllers\API\pm_orderController::class, 'get_rfq']);
Route::get('/pm_order/cnf/', [App\Http\Controllers\API\pm_orderController::class, 'get_cnf']);
Route::get('pm_order/sum/', [App\Http\Controllers\API\pm_orderController::class, 'get_summary']);
Route::get('pm_order/sum/monthly/', [App\Http\Controllers\API\pm_orderController::class, 'get_summary_monthly']);
Route::resource('/pm_order', App\Http\Controllers\API\pm_orderController::class);

Route::get('/financial/hpp/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_hpp'])->name('resume_financial_statement.get_hpp');
Route::get('/financial/exp/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_exp'])->name('resume_financial_statement.get_exp');
Route::get('/financial/exp/monthly/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_exp_monthly'])->name('resume_financial_statement.get_exp_monthly');
Route::get('/financial/incm/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_incm'])->name('resume_financial_statement.get_incm');
Route::get('/financial/incm/monthly', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_incm_monthly'])->name('resume_financial_statement.get_incm_monthly');
Route::get('/financial/kasbank/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_kasbank'])->name('resume_financial_statement.get_kasbank');
Route::get('/financial/piutang/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_piutang'])->name('resume_financial_statement.get_piutang');
Route::get('/financial/laba/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_prftog'])->name('resume_financial_statement.get_prftog');
Route::get('/financial/utang/', [App\Http\Controllers\API\resume_financial_statementController::class, 'get_utang'])->name('resume_financial_statement.get_utang');

Route::resource('/financial/', App\Http\Controllers\API\resume_financial_statementController::class);

// Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
// Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/profile', function(Request $request){
        return auth()->user();
    });

    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
