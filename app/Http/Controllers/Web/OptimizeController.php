<?php namespace App\Http\Controllers\Web;

use Storage;
use Request;
use Debugbar;
use App\Http\Controllers\Controller;
use ZipArchive;

class OptimizeController extends Controller {

    public function __construct()
    {
    }


    public function postOptimize()
    {
        $tmp_name = $_FILES['files']['tmp_name'][0];
        $file = file_get_contents($tmp_name);
        $filename = time() . $_FILES['files']['name'][0];
        Storage::disk('local')->put($filename, $file);
        $this->unzip($tmp_name);
        return view('web.optimize');
    }

    public function getOptimize()
    {
        DebugBar::info('123');
        return view('web.optimize');
    }
    private function unzip($filename)
    {
        $zip = new ZipArchive();

        if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
            exit("cannot open <$filename>\n");
        }
        $zip->extractTo("/home/resource");

        define('a', '');
    }
}