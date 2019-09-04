<?php

namespace App\RequestEnhancers;

trait Sanitizable {
    /** @var array Params which should be sanitized before validation */
    protected $sanitizedParams = [];

    protected function getSanitizedParams() {
        return $this->sanitizedParams;
    }

    /**
     * Mutates values which are expected to be typed by user.
     */
    protected function sanitize() {
        foreach ($this->getSanitizedParams() as $param) {
            if (request()->has($param)) {
                $param_val = request($param);

                $param_val = $this->trim($param_val);
                $param_val = htmlentities($param_val);

                request()->merge([$param => $param_val]);
            }
        }
    }

    /**
     * Runs params sanitization BEFORE validation
     */
    protected function getValidatorInstance() {
        $this->sanitize();
        return parent::getValidatorInstance();
    }

    private function trim($value) {
        $value = trim($value);
        $value = preg_replace('/\s+/', ' ', $value); // eliminate multiple spaces
        return $value;
    }
}