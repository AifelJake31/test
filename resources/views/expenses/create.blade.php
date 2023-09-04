@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Expense</h1>
    <form method="POST" action="{{ route('expenses.store') }}">
        @csrf
        <div class="form-group">
            <label for="account">Account:</label>
            <input type="text" id="account" name="account" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea id="note" name="note" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Expense</button>
    </form>
</div>
@endsection
