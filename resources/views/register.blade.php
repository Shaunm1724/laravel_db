<x-form-auth pageTitle="Register">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        @method('POST')
        @if ($errors->has('email'))
            <p class="text-red-500 text-sm mt-1 mb-2">{{ $errors->first('email') }}</p>
        @endif
        @if ($errors->has('password'))
            <p class="text-red-500 text-sm mt-1 mb-2">{{ $errors->first('password') }}</p>
        @endif
        <div class="mb-4">
            <label for="name" class="block text-gray-200 mb-2">Name</label>
            <input type="text" name="name" id="name" required="true" value="{{ old('name') }}" class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">
        </div>
        <div class="mb-6">
            <label for="email" class="block text-gray-200 mb-2">Email</label>
            <input type="text" name="email" id="email" required="true" value="{{ old('email') }}" class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-200 mb-2">Password</label>
            <input type="password" name="password" id="password" required="true" class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">
        </div>
        <div class="mb-6">
            <label for="confirmpassword" class="block text-gray-200 mb-2">Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required="true" class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">
        </div>
        <div class="flex justify-end">
            <button type="submit" 
                    class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md transition-colors flex items-center">
                Register
            </button>
        </div>
    </form>

    <p class="mt-4 text-gray-300 text-center">Already a user? <a href="{{ route('login-page') }}" class="text-emerald-400 hover:text-emerald-300 underline">Login</a></p>
</x-form-auth>