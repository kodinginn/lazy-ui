@props([
    'variant' => 'default',
])

@php
    $variantClasses = [
        'default' => 'reverse checked:bg-cat-800 dark:checked:bg-white checked:border-cat-800 dark:checked:border-white indeterminate:!border-cat-500 hover:before:bg-cat-500/10 before:focus-visible:bg-cat-500/10',
        'destructive' => 'checked:bg-red-500 checked:border-red-600 hover:before:bg-red-600/10 before:focus-visible:bg-red-600/10',
        'secondary' => 'reverse checked:bg-cat-500 checked:border-cat-500 hover:before:bg-cat-500/10 before:focus-visible:bg-cat-500/10',
    ];
@endphp

<input
    type="checkbox"
    {{
        $attributes
            ->twMerge(
                "peer block relative cursor-pointer size-[1.1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent",
                $variantClasses[$variant] ?? $variantClasses['default']
            )
    }}
/>
