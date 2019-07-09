@extends('admin.layouts.master')

@section('header')
    Edit Service
@endsection

@section('owner')
    is-active
@endsection

@section('content')
    <form action="{{'/owner/'.$owner->id.'/edit'}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-name">Name</label>
                    <input class="c-input" type="text" value="{{$owner->name}}" name="name" id="service-name">
                </div>

                    

                    
                    <label class="c-field__label" for="service-time">Service Time</label>
                <div class="col-6">
                                    <div class="c-field u-mb-medium">


                    <label class="c-field__label" for="service-time">From</label>
                    <input class="c-input" type="time" value="{{$owner->from}}" name="from" id="service-address">
                </div>
            </div>
                            <div class="col-6">

                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-time">To</label>
                    <input class="c-input" type="time" value="{{$owner->to}}" name="to" id="service-time">
                </div>
            </div>
                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-slot">To</label>
                    <input class="c-input" type="number" value="{{$owner->slot}}" name="slot" id="service-slot">
                </div>
            </div>
        <div class="col-12 col-sm-7 col-xl-12 u-mr-auto u-mb-xsmall">
            <button class="c-btn c-btn--primary c-btn--fullwidth">Update Service</button>
        </div>
    </form>

@endsection

