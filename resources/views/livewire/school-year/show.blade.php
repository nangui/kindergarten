<div class="overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="pb-4">
        <h3 class="text-lg font-medium text-gray-900">{{ __('Années scolaires') }}</h3>
        <div>
            @if (session()->has('message'))
                <div class="text-green-500">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form class="mt-4" wire:submit.prevent="submit">
            <input wire:model="designation" type="text" name="school_year" class="block mb-2 w-4/6 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" />
            @error('designation') <span class="block mb-2 text-sm text-red-600">{{ $message }}</span> @enderror
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition">Submit</button>
        </form>
    </div>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{ __('#ID') }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{  __('Désignation') }}
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">{{ __('Supprimer') }}</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($years as $year)
                <tr>
                    <td>{{ $year->id }}</td>
                    <td>{{ $year->designation }}</td>
                    <td class="py-2">
                        <livewire:school-year.delete :year="$year" :wire:key="$year->id" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
