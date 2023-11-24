<a href="?status={{ $type }}&{{ http_build_query(request()->except('status', 'page')) }}"{{ $attributes->class(['status status-'.$type]) }}>
    {{ $slot }}
</a>
