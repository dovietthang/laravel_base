<div class="flex flex-col items-center py-5">
    <img src="{{ asset('icon/no-data-3.svg') }}" class="img-fluid mb-4" style="width: {{ $width ?: 250 }}px">
    <span class="text-2sm text-secondary">{{ $text ?: __('panel/common.no_data') }}</span>
</div>
