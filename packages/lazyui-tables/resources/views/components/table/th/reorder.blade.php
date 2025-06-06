@php
    $customThAttributes = $this->hasReorderThAttributes() ? $this->getReorderThAttributes() : $this->getAllThAttributes($this->getReorderColumn())['customAttributes'];
@endphp

<x-livewire-tables::table.th.plain x-cloak x-show="currentlyReorderingStatus" wire:key="{{ $this->getTableName }}-thead-reorder" :displayMinimisedOnReorder="false"
    {{
        $attributes->merge($customThAttributes)
            ->class([
                'table-cell px-6 py-3 text-left text-xs font-medium whitespace-nowrap uppercase tracking-wider' => (($customThAttributes['default-styling'] ?? true) || ($customThAttributes['default'] ?? true)),
                '' => (($customThAttributes['default-colors'] ?? true) || ($customThAttributes['default'] ?? true)),
            ])
            ->except(['default','default-styling','default-colors'])
    }}
>
    <div x-cloak x-show="currentlyReorderingStatus"></div>
</x-livewire-tables::table.th.plain>

