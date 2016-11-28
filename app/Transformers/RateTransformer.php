<?php

namespace App\Transformers;


class RateTransformer extends Transformer
{
    /**
     * @param $rate
     * @param array $relationships
     * @return mixed
     */
    public function transform($rate, $relationships = [])
    {
        return [
            'place_id' => $rate->place_id,
            'category_id' => $rate->category_id,
            'title' => $rate->title,
            'comment' => $rate->comment,
        ];
    }
}
