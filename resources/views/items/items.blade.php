@extends('dashboard.index')
@section('content')
<section class="container mx-auto p-6 font-mono">
	<div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
		@if (!empty($items))
			<div class="w-full overflow-x-auto">
	      <table class="w-full">
	        <thead>
	          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-200 uppercase border-b border-gray-600">
	            <th class="px-4 py-3">Item</th>
	            <th class="px-4 py-3">Description</th>
	            <th class="px-4 py-3">Price</th>
	            <th class="px-4 py-3">Balance</th>
	            <th class="px-4 py-3">Category</th>
	            <th class="px-4 py-3">Action</th>
	          </tr>
	        </thead>
	        <tbody class="bg-white">
	        	@foreach ($items as $item)
	    			<tr class="text-gray-700">
			            <td class="px-4 py-3 text-ms font-semibold border"> {{ $item['item'] }} </td>
			            <td class="px-4 py-3 text-xs border"> {{ $item['description'] }} </td>
			            <td class="px-4 py-3 text-xs border"> {{ $item['price'] }} </td>
			            <td class="px-4 py-3 text-sm border"> {{ $item['balance'] }} </td>
			            <td class="px-4 py-3 text-sm border"> {{ $item['category'] }} </td>
			            <td class="px-4 py-3 text-sm border">
			            	<a href="{{ url('items/'.$item["id"].'/edit') }}" class="py-1 px-2 text-sm text-white transition-colors duration-150 bg-blue-500 rounded-md focus:shadow-outline hover:bg-blue-600">Edit</a>
			            	<a href="{{ url('items/'.$item["id"]) }}" class="py-1 px-2 text-sm text-white transition-colors duration-150 bg-red-500 rounded-md focus:shadow-outline hover:bg-red-600" onclick="event.preventDefault(); console.log('submit'); document.getElementById('delete-item').submit();">Del</a>
			            	<form id="delete-item" class="hidden" action="{{ url('items/'.$item['id']) }}" method="POST">
			            		@csrf			            		
			            		<input type="hidden" name="_method" value="DELETE">
			            	</form>
			            </td>
			          </tr>
				@endforeach	          
	        </tbody>
	      </table>
	    </div>
	    @else
	     <p class="text-lg text-center text-red-500 py-3">{{ __('No items found!') }}</p>
		@endif    
	</div>
</section>
@endsection