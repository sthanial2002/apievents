@extends('layouts.app')

@section('title')
    @lang('event.page.title')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <ul>{
                    @foreach($events as $event)
                      <li> {{ $event->id }} - {{ $event->urlToImage }} - {{ $event->title}} - {{ $event->description }} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection