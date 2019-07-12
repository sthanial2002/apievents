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
                        id: "{{ $event->id }}",
                        title : "{{ $event->title}}",
                        description : "{{ $event->description }}"
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection