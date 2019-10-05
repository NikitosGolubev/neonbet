<?php


namespace App\RuleGroups;


abstract class RuleGroup
{
    /**
     * Specifies rules which should be applied on validation of the field.
     */
    abstract protected static function rules(): array;

    /**
     * Retrieves validation rules.
     * Can add some client rules to the outcome list.
     *
     * @param array $prev Rules which should be added before of rules list specified
     * @param array $next Rules which should be added after of rules list specified
     * @return array
     */
    public static function get(array $prev = [], array $next = []): array {
        $rules = static::rules();

        $rules = array_merge($prev, $rules);
        $rules = array_merge($rules, $next);

        return $rules;
    }
}