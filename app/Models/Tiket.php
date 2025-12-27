<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Enums\estado;
use DateTime;

use function Pest\Laravel\get;

class Tiket extends Model
{

    use HasFactory;

    protected $table = "tickets";
    protected $primaryKey = 'id';



    protected function cliente():Attribute
    {
        return Attribute::make(
            set: function ($value)  {
                return strtolower($value);
            },
            get: function ($value)  {
                return ucfirst($value);
            }
        );
    }
    protected function fechaHoraEvento(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                #return DateTime();
                #return DateTime::createFromFormat('d/m/Y', $value);
                return $value;
            },
            get: function ($value) {
                return $value;
            }
        );
    }
    protected function estado(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return ($value);
            },
            get: function ($value) {
                return ($value);
            }
        );
    }
    protected function descripcion(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return ($value);
            },
            get: function ($value) {
                return ($value);
            }
        );
    }

}