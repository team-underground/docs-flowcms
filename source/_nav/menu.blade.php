@php $level = $level ?? 0 @endphp

<ul class="my-0 sidebar-menu">
    @foreach ($items as $label => $item)
    @include('_nav.menu-item')
    @endforeach
</ul>