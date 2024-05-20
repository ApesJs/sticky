<div {{ $attributes->merge([
    'class' => 'bg-white shadow-sm border border-zinc-200 text-card-foreground rounded-lg'
]) }}>
    {{ $slot }}
</div>
