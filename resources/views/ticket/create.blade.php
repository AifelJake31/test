@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="text-red-500 text-2xl mb-4">
                <p class="text-amber-500">CREATE A TICKET</p>
            </div>
            <form  action="{{ route('ticket.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Text Input Fields -->
                <div class="mb-4">
                    <label for="field1" class="block mb-2">Field 1:</label>
                    <input type="text" id="field1" name="field1" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-500">
                </div>
                <div class="mb-4">
                    <label for="field2" class="block mb-2">Field 2:</label>
                    <input type="text" id="field2" name="field2" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-500">
                </div>
                <!-- Photo Upload Field -->
                <div class="mb-4">
                    <label for="photo" class="block mb-2">Upload a Photo:</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-500">
                </div>

                <div>
                    <x-text-area/>
                </div>

                <!-- Submit Button -->
                <div>
                    <input type="submit" value="Submit"
                        class="w-full py-2 px-4 bg-red-500 text-white rounded-lg hover:bg-amber-600 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
