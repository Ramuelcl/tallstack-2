<button class="rounded-md bg-pink-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-pink-500"
        type="button"
        wire:click="{{ $click }}">
  {{ $text }}
</button>

<div wire:loading>
  <x-forms.spinner />
</div>
