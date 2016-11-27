<?php

namespace App\Transformers;


class VisitTransformer extends Transformer
{
    /**
     * @param $visit
     * @param array $relationships
     * @return mixed
     */
    public function transform($visit, $relationships = [])
    {
        return [
            'id' => $visit->id,
            'name' => $visit->name,
        ];
    }
}
