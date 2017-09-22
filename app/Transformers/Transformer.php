<?php
/**
 * Created by PhpStorm.
 * User: jeremyswan
 * Date: 22/09/2017
 * Time: 3:19 PM
 */

namespace App\Transformers;


abstract class Transformer
{
    /**
     * Transform a collection of lessons
     *
     * @param $items
     * @return array
     */
    public function transformCollection(array $items)
    {
        return  array_map([$this, 'transform'], $items);
    }

    public function transform(array $item)
    {
        return  array_map([$this, 'transform'], $item);
    }
}