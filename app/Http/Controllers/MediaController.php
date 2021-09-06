<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{

    /**
     * play()
     * Plays a media file
     *
     * @param string $request
     */
    public function play( Request $request )
    {
        shell_exec( "cvlc '". $request->file ."'" );
    }

    public function test()
    {
        return "Test";
    }

}
