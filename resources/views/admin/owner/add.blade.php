@extends('admin.layouts.master')

@section('header')
    Add Service
@endsection

@section('owner')
    is-active
@endsection


@section('content')




    <form action="/owner/add" method="POST">
        {{ csrf_field() }}
        <div class="row">
            
                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-name">Service Name</label>
                    <input class="c-input" type="text" value="{{ old('name') }}" name="name" id="service-name">
                </div>
                    <label class="c-field__label" for="service-time">Service Time</label>

                <div class="col-6">
                    <div class="c-field u-mb-medium">

                        <label class="c-field__label" for="service-time">From</label>

                        <input class="c-input" name="from" type="time" value="{{ old('from') }}">
                    </div>
                </div>
            <div class="col-6">

                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-time">To</label>
                    <input class="c-input" name="to" type="time" value="{{ old('to') }}">
                </div>
            </div>
                <div class="c-field u-mb-medium">
                    <label class="c-field__label" for="service-slot">Slot</label>
                    <input class="c-input" type="number" value="{{ old('slot') }}" name="slot"  id="service-slot">
                </div>
            </div>

        <div class="col-12 col-sm-7 col-xl-12 u-mr-auto u-mb-xsmall">
            <button class="c-btn c-btn--info c-btn--fullwidth" >Save</button>
        </div>
    </form>


@endsection

