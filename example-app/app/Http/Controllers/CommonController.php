<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class CommonController extends Controller
{
    /**
     * API返却ステータス
     */
    public const API_STATUS_OK = 1;
    public const API_STATUS_NG = 99;

    /**
     * 日付、時刻　書式
     */
    public const DATE_FORMAT = 'Y-m-d';
    public const TIME_FORMAT = 'H:i:s';
    public const DATETIME_FORMAT = 'Y-m-d H:i:s';


    /**
     * ログを出す
     */
    public static function Log($value)
    {
        Log::debug($value);
    }

    /**
     * パラメータの表示非表示切り替える
     */
    public static function set_active_collection_params(&$collection, $params_array, $is_active)
    {
        if ( ! isset($params_array) || ! isset($is_active)) {
            return;
        }

        $is_active ? $collection->makeVisible($params_array) : $collection->makeHidden($params_array);
    }
}