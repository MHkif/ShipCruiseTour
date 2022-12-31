<?php

namespace app\models;

use app\core\DbModel;

class Port extends DbModel
{

    public string $portName = '';
    public string $countery= "";

    public function save()
    {

        return parent::save();
    }

    public function rules(): array
    {
        return [
            'portName' => [self::RULE_REQUIRED],
            'countery' => [self::RULE_REQUIRED],

        ];
    }

    public static function tableName(): string
    {
        return 'Port';
    }

    // those are the column will be saved in database   
    public function attributes(): array
    {
        
  
        return [
            'portName',
            'countery',
        ];
    }

    public function labels(): array
    {
        return [
            'portName' => 'Port',
            'countery' => 'Countery',

        ];
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

}
