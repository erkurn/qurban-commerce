@extends('layouts.app')
@section('content')
<div class="max-w-xl my-10 p-5 border border-gray-500 rounded-md mx-auto">
    <h1 class="mb-5">Create an Order</h1>
    <livewire:create-order></livewire:create-order>


    <div>
        <div x-data="{ open: false }">
            <button @click="open = !open">Expand</button>

            <span x-show="open">
                Content...
            </span>
        </div>
    </div>

</div>
@endsection
