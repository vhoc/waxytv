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
        $logofile = "--logo-file=";
        $logoX = "--logo-x=";
        $logoY = "--logo-y=";

        // {0 (Center), 1 (Left), 2 (Right), 4 (Top), 8 (Bottom), 5 (Top-Left), 6 (Top-Right), 9 (Bottom-Left), 10 (Bottom-Right)}
        $logoPosition = "--logo-position={10}";

        exec( 'vlc -I http --fullscreen '.$request->loop.' '.$request->repeat.' "' . $request->path . '" > /dev/null &' );
    }

    public function playlistClear()
    {
        exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=pl_empty > /dev/null &" );
    }

    public function stop()
    {
        exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=pl_stop > /dev/null &" );
    }

    public function kill()
    {
        exec( "killall vlc > /dev/null &" );
    }

    public function initPlayer()
    {
        exec( "vlc -I http > /dev/null &" );
    }

}
