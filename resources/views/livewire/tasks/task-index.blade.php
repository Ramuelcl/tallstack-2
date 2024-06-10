<div>
  <div class="py-5 text-center">
    <x-forms.alert />

    <input class="w-1/5 rounded-md border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
           type="text"
           wire:model="name" />
    {{-- <span class="absolute -ml-6 mt-2"><span x-forms.text="$wire.name.length"></span></span> --}}
    <x-forms.button2 :click="'save'"
                     :text="$button" />
    <div class="text-red-500">
      @error('name')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>
  </div>
  @foreach ($tasks as $task)
    <x-forms.task-item :task="$task" />
  @endforeach
</div>
