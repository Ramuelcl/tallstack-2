<div class="mx-auto mb-4 w-4/5 rounded-md bg-pink-50 p-4 sm:w-2/5"
     wire:key="{{ $task->id }}">
  <div class="flex">
    <div class="ml-3 mt-1 flex-1 md:flex md:justify-between">
      <p class="text-sm font-bold text-pink-700">
        {{ $task->name }} - {{ Carbon\Carbon::parse($task->updated_at)->format('d-m-Y H:i') }}
      </p>

      <p class="text-md mt-2 md:ml-6 md:mt-0">
        <a class="whitespace-nowrap pr-2 font-medium text-pink-700 hover:text-pink-600"
           href="/tasks/edit/{{ $task->id }}">
          <i class="fa-solid fa-pen-to-square"></i>
        </a>

        <button class="whitespace-nowrap font-medium text-pink-700 hover:text-pink-600"
                type="submit"
                wire:click="delete({{ $task }})">
          <i class="fa-solid fa-trash"></i>
        </button>
      </p>
    </div>
  </div>
</div>
