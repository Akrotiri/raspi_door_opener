<?php

namespace App\Http\Controllers;

class DoorOpenerController extends Controller
{
    public function open()
    {
        shell_exec("python ~/Desktop/tests_relay/open_door.py");
    }
}
