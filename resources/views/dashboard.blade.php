<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('My Tasks') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Simple overview of your current work.
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-6">
                <x-dashboard.sidebar />
                <x-dashboard.board />
            </div>
        </div>
    </div>
</x-app-layout>
