<?php
/**
 * Created by PhpStorm.
 * User: ps
 * Date: 5/10/18
 * Time: 06:34 AM
 * Update: May 17, 2021
 * Updated By Alan Garduño
 */

namespace Wialon2laravel\Wialon;


class Item
{
    public $response;
    public function __construct($data)
    {
        if (!is_null($data)) {
            foreach ($data as $property => $value) {
                $this->{$property} = $value;
            }
        }
    }

    public static function find($item_id): ?self
    {
        $api_wialon = new Wialon();
        $api_wialon->beforeCall();

        $response = json_decode($api_wialon->core_search_item([
            'id' => $item_id,
            'flags' => '1'
        ]));
        if (isset($response->error)) {
            return null;
        }
        $unit = new static($response->item);

        $api_wialon->afterCall();

        return $unit;
    }
}