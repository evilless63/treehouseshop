<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class AttributeValue extends Model
    {
        public $timestamps = false;

        protected $fillable = [
            'value',
            'attr_group_id',
        ];
    }
