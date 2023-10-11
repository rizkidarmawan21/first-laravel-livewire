<div class="form-check">
    <input class="form-check-input" {{ $attributes->merge([
        'type' => 'radio',
        'id',
    ]) }}>
    <label class="form-check-label" {{ $attributes->merge([
        'for' => $id,
    ]) }}>
        {{ $slot }}
    </label>
</div>
