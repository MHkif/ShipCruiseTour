<?php

namespace app\models;

use app\core\DbModel;

class Room extends DbModel
{

    public string $shipName = '';
    public int $nOfRooms = 0;
    public string $roomType= '';
    public float $price = 0;
    public int $capacity = 0;

    public function save()
    {

        return parent::save();
    }

    public function rules(): array
    {
        return [
            'shipName' => [self::RULE_REQUIRED],
            'nOfRooms' => [self::RULE_REQUIRED],
            'nOfPlaces' => [self::RULE_REQUIRED],

        ];
    }

    public static function tableName(): string
    {
        return 'Ship';
    }

    // those are the column will be saved in database   
    public function attributes(): array
    {
        
  
        return [
            'shipName',
            'nOfRooms',
            'nOfPlaces'
        ];
    }

    public function labels(): array
    {
        return [
            'shipName' => 'Ship Name',
            'nOfRooms' => 'Number Of Rooms',
            'nOfPlaces' => 'Number of Places',
           

        ];
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

}
