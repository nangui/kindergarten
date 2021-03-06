<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-4 flex-wrap">
                <div class="bg-white overflow-hidden hover:shadow-xl sm:rounded-lg p-8"
                    style="width: 22.5%; padding: 2rem;">
                    <h3 class="text-blue-700 font-extrabold text-4xl">{{ $nbr_pupils }}</h3>
                    <a href="{{ route('pupil.list') }}" class="flex items-center mt-4 text-2xl">
                        Élève(s)
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <div class="bg-white overflow-hidden hover:shadow-xl sm:rounded-lg p-8"
                    style="width: 22.5%; padding: 2rem;">
                    <h3 class="text-blue-700 font-extrabold text-4xl">{{ $nbr_tutors }}</h3>
                    <a href="{{ route('tutor.list') }}" class="flex items-center mt-4 text-2xl">
                        Parent(s)
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <div class="bg-white overflow-hidden hover:shadow-xl sm:rounded-lg p-8"
                    style="width: 22.5%; padding: 2rem;">
                    <h3 class="text-blue-700 font-extrabold text-4xl">{{ $nbr_subscriptions }}</h3>
                    <a href="{{ route('subscription.list') }}" class="flex items-center mt-4 text-2xl">
                        Inscription(s)
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <div class="bg-white overflow-hidden hover:shadow-xl sm:rounded-lg p-8"
                    style="width: 22.5%; padding: 2rem;">
                    <h3 class="text-blue-700 font-extrabold text-4xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex items-center h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    </h3>
                    <a href="{{ route('settings') }}" class="flex items-center mt-4 text-2xl">
                        Parametres
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
