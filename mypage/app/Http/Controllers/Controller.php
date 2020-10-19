<?php

namespace App\Http\Controllers;

use App\PuppyPage;
use App\Page;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getPuppyPage($code) {
        $p = PuppyPage::where('code', "$code")->firstOrFail();
        $p->explodeImages();
        return view("$p->fileName", ['obj'=>$p]);
    }

    public function getSomePage($code) {
        $page = Page::where('code', "$code")->firstOrFail();
        $all_puppies = DB::table('puppy_pages')->get();
        return view("$code", ['puppies'=>$all_puppies, 'page'=>$page]);
    }
};
