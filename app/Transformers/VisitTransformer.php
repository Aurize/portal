<?php

namespace App\Transformers;


class VisitTransformer extends Transformer
{
    /**
     * @param $rate
     * @param array $relationships
     * @return mixed
     */
    public function transform($rate, $relationships = [])
    {
        return [
            'id' => $rate->id,
            'name' => $rate->name,
        ];
    }
}
