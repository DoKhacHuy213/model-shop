<?php

class ModelProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'quantity'];

    public function orders()
    {
        return $this->hasMany(ModelOrder::class);
    }
}