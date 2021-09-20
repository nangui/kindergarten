<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent font-semibold text-xs text-red-500 underline tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
