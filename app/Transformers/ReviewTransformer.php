<?php

namespace App\Transformers;


class ReviewTransformer extends Transformer
{
    /**
     * @param $review
     * @param array $relationships
     * @return mixed
     */
    public function transform($review, $relationships = [])
    {
        return [
            'place_id' => $review->place_id,
            'category_id' => $review->category_id,
            'title' => $review->title,
            'comment' => $review->comment,
        ];
    }
}
