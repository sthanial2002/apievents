<?php

namespace App\Http\Transformers;

use App\Event;
use League\Fractal\TransformerAbstract;

class EventsTransformer extends TransformerAbstract
{
    public function transform(Event $event) : array
    {
        return [
          'id' => $event->id,
          'urlToImage' => $event->urlToImage,
          'title' => $event->title,
          'description' => $event->description
        ];
    }
}