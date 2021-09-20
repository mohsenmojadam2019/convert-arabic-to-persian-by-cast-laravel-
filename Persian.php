<?php

namespace App\Libraries;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Persian implements CastsAttributes
{


    const  characters = [
            'ك' => 'ک',
            'دِ' => 'د',
            'بِ' => 'ب',
            'زِ' => 'ز',
            'ذِ' => 'ذ',
            'شِ' => 'ش',
            'سِ' => 'س',
            'ي' => 'ی',

        ];
    public function get($model, string $key, $value, array $attributes)
    {

        return str_replace(array_keys(Persian::characters), array_values(Persian::characters),$value);
    }


    public function set($model, string $key, $value, array $attributes)
    {
        return str_replace(array_keys(Persian::characters), array_values(Persian::characters),$value);

    }
}
