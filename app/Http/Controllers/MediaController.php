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
        exec( 'vlc -I http --fullscreen '.$request->loop.' '.$request->repeat.' "' . $request->path . '" > /dev/null &' );
        //$command = "http://localhost:8080/requests/status.xml?command=in_play&input=" . urlencode( $request->file );
        //return "wget --user= --password=waxytv " . $command;
        //shell_exec( "wget --user= --password=waxytv http://localhost:8080/requests/status.xml?command=in_play&input=" . $request->file );
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
