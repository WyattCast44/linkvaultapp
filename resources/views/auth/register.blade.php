<div class="max-w-2xl mx-4 my-10 md:mx-auto">

    <x-errors.inline-validation key="auth" />

    <form wire:submit.prevent="register" class="space-y-4">

        <label for="name" class="flex flex-col space-y-2">

            <span>Your Name</span>

            <input 
                id="name"
                autofocus
                type="text" 
                name="name"
                autocomplete="name"
                wire:model.lazy="name"
                required>

        </label>

        <x-errors.inline-validation key="name" />

        <label for="email" class="flex flex-col space-y-2">

            <span>Email Address</span>

            <input 
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

        <label for="password_confirmation" class="flex flex-col space-y-2">

            <span>Password Confirmation</span>

            <input 
                type="password" 
                id="password_confirmation"
                name="password_confirmation"
                wire:model.lazy="password_confirmation"
                required>

        </label>

        <x-errors.inline-validation key="password_confirmation" />

        <div class="flex flex-col items-center space-y-2">

            <button type="submit" class="w-full p-2 text-center transition-all duration-200 bg-gray-300 border hover:bg-gray-400">
                Register
            </button>

            <a href="{{ route('login') }}">Already have an account, login instead</a>

        </div>

    </form>
    
</div>
