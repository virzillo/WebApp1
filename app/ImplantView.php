<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImplantView extends Model
{
    public function postView()
    {
        return $this->belongsTo(Implant::class);
    }

    public static function createViewLog($implant) {
        $implantViews= new ImplantView();
        $implantViews->implant_id = $implant->id;
        $implantViews->slug = $implant->slug;
        $implantViews->url = request()->url();
        $implantViews->session_id = request()->getSession()->getId();
        $implantViews->user_id = (auth()->check())?auth()->id():null;
        $implantViews->ip = request()->ip();
        $implantViews->agent = request()->header('User-Agent');
        $implantViews->save();
    }
}
