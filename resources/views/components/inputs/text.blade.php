<input
    {{ $attributes->merge([
        'type' => $type ?? 'text',
        'class' => 'form-control',
        'placeholder' => $placeholder ?? 'Input...',
    ]) }}>