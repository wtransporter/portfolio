<a 
    href="{{ $href }}" target="{{ $target }}" 
    {{ 
        $attributes->class([
            'py-4 px-6 sm:px-10 lg:px-8 xl:px-10 rounded-lg inline-flex items-center justify-center text-center text-base text-white hover:bg-opacity-90 font-normal',
            'bg-primary' => $type === 'primary',
            'bg-red-700' => $type === 'danger'
        ])
    }}>
    {{ $slot }}
</a>