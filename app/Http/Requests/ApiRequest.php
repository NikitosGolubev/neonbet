<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class ApiRequest extends FormRequest
{
    /**
     * Returns collection with data which can be access by clients of request.
     */
    abstract public function getData(): array;
}
