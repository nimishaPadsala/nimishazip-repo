<?php
namespace Laravelzipconvertpro\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Convert\Zip\Zip;

class ZipController extends Controller
{
    public function __invoke(Zip $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
    }
}