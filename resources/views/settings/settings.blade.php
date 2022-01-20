@extends('dashboard.index')
@section('content')
<div id="settings">
    <form action="" method="POST">
        {{-- Item --}}
        <div class="card">
            <div class="card-header">
                <h3 class="text-left">{{ __('Items') }}</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="category" class="text-sm font-medium text-gray-900 block dark:text-gray-300 my-2">{{ __('Category') }}</label>
                    <textarea 
                        id="items_category"
                        name="items_category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-md block w-full p-2.5">

                    @error('category')
                        <p class="text-red-500 m-0">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button 
					type="submit" 
					class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 text-center uppercase">
					{{ __('Save Settings') }}
				</button>
            </div>
        </div>
    </form>
</div>
@endsection