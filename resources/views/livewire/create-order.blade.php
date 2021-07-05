<div>
    <form wire:submit.prevent="submit">
        <label for="customer_name" class="block text-sm font-medium text-gray-700">Customer Name : {{ $customer_name }}</label>
        <div class="mt-1">
            <input type="text" wire:model="customer_name" id="customer_name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
            @error('customer_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Save</button>
    </form>

</div>
