@extends('admin.layouts.master')

@section('header')
    View Service
@endsection

@section('owner')
    is-active
@endsection


@section('add_button')
    <div class="c-dropdown dropdown">
        <div class="c-avatar c-avatar--xsmall dropdown-toggle" role="button">
            <a href="{{'/owner/'.$owner->id.'/edit'}}"><img class="c-avatar__img" src="https://png.icons8.com/material-rounded/50/000000/pencil.png"></a>
        </div>
    </div>
@endsection


@section('content')

        <div class="row">
                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-name">Name</label>
                    <input class="c-input" type="text" value="{{$owner->name}}" name="name" id="service-name" readonly>
                </div>

                    <label class="c-field__label" for="service-time">Service Time</label>
                <div class="col-6">
                                    <div class="c-field u-mb-medium">


                    <label class="c-field__label" for="service-time">From</label>
                    <input class="c-input" type="time" value="{{$owner->from}}" name="time" id="service-time" readonly>
                </div>
            </div>
                            <div class="col-6">

                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-time">To</label>
                    <input class="c-input" type="time" value="{{$owner->to}}" name="to" id="service-time" readonly>
                </div>
            </div>
                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-slot">slot</label>
                    <input class="c-input" type="number" value="{{$owner->slot}}" name="slot" id="service-slot" readonly>
                </div>
            </div>

        <div class="col-12 col-sm-7 col-xl-12 u-mr-auto u-mb-xsmall">
            <form action="{{'/owner/'.$owner->id.'/delete'}}" >
                <input type="hidden" name="_method" value="DELETE">
                <button class="c-btn c-btn--danger c-btn--fullwidth" onclick="return confirm('Are you sure?')">Delete Customer</button>                               
            </form>

            
        </div>

@endsection

