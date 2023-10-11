<button
    {{ $attributes->merge([
        'type' => $type ?? 'submit',
        'class' => 'btn btn-primary btn-block ' . ($class ?? ''),
    ]) }}>
    {{ $slot }}
</button>
