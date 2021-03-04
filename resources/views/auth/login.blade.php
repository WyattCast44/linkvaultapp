<div class="max-w-2xl mx-4 my-10 md:mx-auto">
    
    <x-errors.inline-validation key="auth" />

    <form wire:submit.prevent="authenticate" class="space-y-4">

        <label for="email" class="flex flex-col space-y-2">

            <span class="block">Email Address</span>

            <input 
                autofocus
                id="email"
                type="email" 
                name="email"
                autocomplete="email"
                wire:model.lazy="email"
                required>

        </label>

        <x-errors.inline-validation key="email" />

        <label for="password" class="flex flex-col space-y-2">

            <span>Password</span>

            <input 
                id="password"
                type="password" 
                name="password"
                wire:model.lazy="password"
                required>

        </label>

        <x-errors.inline-validation key="password" />

        <div class="flex flex-col items-center space-y-2">

            <button type="submit" class="w-full p-2 text-center transition-all duration-200 bg-gray-300 border hover:bg-gray-400">
                Login
            </button>

            <a href="{{ route('password.email') }}">Forgot Password?</a>

        </div>

    </form>
    
</div>
