<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Verify OTP</h2>
                    <p class="mb-4">Please enter the 6-digit code sent to your email.</p>
                    
                    <livewire:otp-verification type="email" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 