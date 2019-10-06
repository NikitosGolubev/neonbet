<?php

namespace App\Http\Controllers\API\GeneralData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class LocaleController extends Controller
{
    /**
     * Provides list of supported locales
     */
    public function show() {
        $supported_locales = config('app.supported_locales');

        return Response::ok(['supported_locales' => $supported_locales]);
    }
}
