@extends('layouts.template')

@section('title', 'Add New Transaction')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Transaction</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('transaction.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="{{ old('id') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                </div>

                {{-- <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-">Category</label>
                    <label for="title" class="form-label">Income</label>
                    <select class="form-control" id="income" name="income">
                        <option {{ old('category') == 'wave' ? 'selected' : '' }} value="wave">wave</option>
                        <option {{ old('category') == 'bonus' ? 'selected' : '' }} value="bonus">bonus</option>
                        <option {{ old('category') == 'gift' ? 'selected' : '' }} value="gift">gift</option>
                </div> --}}

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">category</label>
                    <label for="title" class="form-label">Expense</label>
                    <select class="form-control" id="category" name="category">
                        <option {{ old('category') == 'food' ? 'selected' : '' }} value="food">food</option>
                        <option {{ old('category') == 'drinks' ? 'selected' : '' }} value="drinks">drinks</option>
                        <option {{ old('category') == 'shopping' ? 'selected' : '' }} value="shopping">shopping</option>
                        <option {{ old('category') == 'charity' ? 'selected' : '' }} value="charity">charity</option>
                        <option {{ old('category') == 'housing' ? 'selected' : '' }} value="housing">housing</option>
                        <option {{ old('category') == 'insurance' ? 'selected' : '' }} value="insurance">insurance</option>
                        <option {{ old('category') == 'taxes' ? 'selected' : '' }} value="taxes">taxes</option>
                        <option {{ old('category') == 'transportation' ? 'selected' : '' }} value="transportation">transportation</option>
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">notes</label>
                    <textarea class="form-control" id="notes" name="notes" value="{{ old('notes') }}"></textarea>
                </div>
                {{-- <div class="mb-3 col-md-12 col-sm-12">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div> --}}
                {{-- <div class="mb-3 col-md-12 col-sm-12">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" rows="10" name="body">{{ old('body') }}</textarea>
                </div>
                <div class="form-check form-switch mb-3">
                    <label class="form-check-label" for="is_published">Publish?</label>
                    <input class="form-check-input" type="checkbox" id="is_published" name="is_published">
                </div> --}}
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
