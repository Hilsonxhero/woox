<?php

namespace App\Traits;


trait HasMeta
{

    public function data($name)
    {


        $data = $this->meta()->pluck('value', 'name')->toArray();
        return $data[$name];
    }
}
