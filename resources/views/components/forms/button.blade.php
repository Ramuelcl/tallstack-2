<button {{ $attributes(['class' => 'text-gray-50 dark:text-gray-500 text-xs uppercase py-2 px-4 rounded-md transition-all duration-500 mr-4 ']) }}
        wire:click="{{ $click }}">
  {{ $click }}
</button>
