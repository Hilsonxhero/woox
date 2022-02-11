<input id="kt_ecommerce_add_category_meta_keywords" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control mb-2']) !!}
    type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
    data-blacklist='PHP' />

<x-validation-error field='{{ $name }}'></x-validation-error>
