@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Your Refferences ID

                    @php

                        // Available alpha caracters
                         $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                        // generate a pin based on 2 * 7 digits + a random character
                        $pin = mt_rand(1000, 9999)
                        . mt_rand(1000, 9999)
                        . $characters[rand(0, strlen($characters) - 1)];

                        // shuffle the result
                        $string = str_shuffle($pin);
                        @endphp

                <div class="form-group form-group-sm">
                    <div class="col-md-6">
                    <input type="text" name="refid" class="form-control"value="{{$string ?? ''}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
