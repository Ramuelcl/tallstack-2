<div>
  @if (session()->has('message'))
    <div class="mx-auto mb-4 w-2/6 rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
         role="alert">
      <span class="font-medium">
        Success alert!
      </span>
      {{ session('message') }}
    </div>
  @endif
</div>
