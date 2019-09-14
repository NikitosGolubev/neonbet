<?php

namespace App\Http\Controllers\API\GeneralData;

use App\Http\Controllers\Controller;

class LocaleController extends Controller
{
    /**
     * Provides list of supported locales
     */
    public function show() {
        $supported_locales = config('app.supported_locales');
        return response()->json($supported_locales, 200);
    }
}
