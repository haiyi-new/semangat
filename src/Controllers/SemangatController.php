<?php
namespace Teknohaiyi\Semangat\Controllers;

use Illuminate\Http\Request;
use Teknohaiyi\Semangat\Semangat;

class SemangatController
{
    public function __invoke(Semangat $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('semangat::index', compact('quote'));
    }
}
