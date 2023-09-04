@extends('layouts.app')

@section('content')
<div class="continer">
    <div class="row">
        <div class="col-6">
            <div>Account: {{$expenses->account}}</div>
            <div>Category: {{ $expenses->category}}</div>
            <div>Amount: {{ $expenses->amount}}</div>
            <div>Note: {{ $expenses->note}}</div>
        </div>
    </div>
</div>