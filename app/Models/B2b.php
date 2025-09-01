<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2b extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'title', 'href', 'banner',
    ];

    public function contents()
    {
        return $this->belongsToMany(Content::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($b2b) {
            if (empty($b2b->href)) {
                $b2b->href = self::generateHref($b2b->title);
            }
        });
    }

    // Метод для генерации href
    public static function generateHref($text)
    {
        $text = mb_strtolower($text);

        $text = str_replace(
            ['а','б','в','г','ґ','д','е','є','ж','з','и','і','ї','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ю','я'],
            ['a','b','v','g','g','d','e','ye','zh','z','y','i','yi','y','k','l','m','n','o','p','r','s','t','u','f','kh','ts','ch','sh','shch','','yu','ya'],
            $text
        );

        $text = preg_replace('/[^\w\-]+/', '-', $text);
        $text = trim($text, '-');

        return $text;
    }
}
