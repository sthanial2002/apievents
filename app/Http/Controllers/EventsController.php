<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Dingo\Api\Routing\Helpers;
use Illuminate\View\View;

class EventsController extends Controller
{
    use Helpers;

    public function list() : View
    {
        $events = $this->api->get('/events/');
        return dd($events->toJson(JSON_PRETTY_PRINT));
    }
}
