<?php
namespace app\models;
use app\core\DbModel;

class Product extends DbModel {

    public string $titre;
    public float $prix;
    public int $qnt;
    public string $image;
    public string $category;

    public static function primaryKey(): string
    {
        return 'id';
    }
    // in my case i just have one table named products everone can see it ,
    //  but only admin can make modifications 

    public static function tableName(): string
    {
        return 'Produits';
    }
    public static function ViewName(): string
    {
        return 'Produits';
    }


	public function attributes(): array {
        return ['titre', 'prix','qnt','image','category'];

    }

	public function rules(): array {
        return ['titre'=> [self::RULE_REQUIRED],
        'prix'=> [self::RULE_REQUIRED],
        'qnt'=> [self::RULE_REQUIRED],
        'image'=> [self::RULE_REQUIRED],
        'category'=> [self::RULE_REQUIRED]
    
        ];
	}
	
	/**
	 * @return array
	 */
	public function labels(): array {
        return [
            'id'=>'id',
            'titre'=>'titre',
            'prix'=>'prix',
            'qnt'=>'qnt',
            'image'=>'image',
            'category'=>'category',
        ];
	}
}