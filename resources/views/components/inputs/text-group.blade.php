<div class="input-group my-2">
    {{ $slot }}

    <div class="input-group-append">
        <div class="input-group-text">
            {{ $icon }}
        </div>
    </div>

</div>

@isset($error)
    {{ $error }}
@endisset
