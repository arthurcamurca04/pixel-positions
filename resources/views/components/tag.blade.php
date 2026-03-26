@props(['size' => 'sm', 'tag'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl transition-colors duration-300';

    if ($size == 'sm') {
        $classes .= ' px-3 py-1 text-sm';
    }

    if ($size == 'xl') {
        $classes .= ' px-5 py-1 text-xl';
    }
@endphp

<a href="/tags/{{$tag->id}}" class="{{ $classes }}">{{ $tag->name }}</a>
