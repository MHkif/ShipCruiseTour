<?php

namespace app\models;

use app\core\DbModel;

class Cruise extends DbModel
{

    public string $navire = '';
    public float $prix = 0.0;
    public string $image = '';
    public int $nofNights = 0;
    public string $port_depart = '';
    public string $date_depart = '';
    public string $itenairaire = '';


    public function save()
    {

        return parent::save();
    }

    public function rules(): array
    {
        return [
            'navire' => [self::RULE_REQUIRED],
            'prix' => [self::RULE_REQUIRED],
            'image' => [self::RULE_REQUIRED],
            'nofNights' => [self::RULE_REQUIRED],
            'port_depart' => [self::RULE_REQUIRED],
            'date_depart' => [self::RULE_REQUIRED],
            'itenairaire' => [self::RULE_REQUIRED],

        ];
    }

    public static function tableName(): string
    {
        return 'Cruise';
    }

    // those are the column will be saved in database   
    public function attributes(): array
    {
        
  
        return [
            'navire',
            'prix',
            'image',
            'nofNights',
            'port_depart',
            'date_depart',
            'itenairaire',
        ];
    }

    public function labels(): array
    {
        return [
            'navire' => 'Ship',
            'prix' => 'Price',
            'image'=> 'Image',
            'nofNights' => 'Nights',
            'port_depart' => 'Departing From',
            'date_depart' => 'Departing in',
            'itenairaire'=> 'Itinerary',

        ];
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

}
