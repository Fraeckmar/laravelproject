@extends('layouts.app')
@section('content')
<div class="bg-grey-lighter min-h-screen flex flex-col">
	<div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
		<div class="bg-white p-6 my-4 rounded shadow-md text-black w-full">
			<h1 class="mb-8 text-3xl text-center">Sign up</h1>
			<form action="/user" method="POST">
				@csrf
				{{-- Full Name --}}
				
				@error('name')
					<p class="text-red-500 m-0">{{ $message }}</p>
				@enderror

				<input 
					type="text"
					class="block border border-grey-light w-full p-3 rounded mb-4"
					name="name"
					placeholder="Full Name" />

				{{-- Email --}}

				@error('email')
					<p class="text-red-500 m-0">{{ $message }}</p>
				@enderror

				<input 
					type="text"
					class="block border border-grey-light w-full p-3 rounded mb-4"
					name="email"
					placeholder="Email" />

				{{-- Role --}}
				@error('role')
					<p class="text-red-500 m-0">{{ $message }}</p>
				@enderror
				<select name="role" class="block border border-grey-light w-full p-3 rounded mb-4">
					<option>- Select Role -</option>
					<option value="staff">Staff</option>
					<option value="admin">Admin</option>
					<option value="accounting">Accounting</option>
				</select>

				{{-- Password --}}
				@error('password')
					<p class="text-red-500 m-0">{{ $message }}</p>
				@enderror

				<input 
					type="password"
					class="block border border-grey-light w-full p-3 rounded mb-4"
					name="password"
					placeholder="Password" />

				<button
					type="submit"
					class="w-full text-center py-3 rounded bg-blue-800 text-white hover:text-blue-800 hover:bg-white border border-blue-800 focus:outline-none my-1"
					>Create Account</button>
			</form>
		</div>

		<div class="text-grey-dark mt-6">
			Already have an account?	<a class="no-underline border-b border-blue text-blue" href="../login/"> Log in </a>.
		</div>
	</div>
</div>
@endsection