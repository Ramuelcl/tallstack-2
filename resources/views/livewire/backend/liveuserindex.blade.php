<div>
  {{-- <button class="block text-indigo-500"
          x-data="{}"
          x-on:click="window.livewire.emitTo('live-modal', 'show')">
    trigger contact modal
  </button>
  <button class="text-indigo-500"
          x-data="{}"
          x-on:click="window.livewire.emitTo('live-modal2', 'show')">
    trigger other modal
  </button> --}}

  <div class="flex justify-between">
    <div class="text-2xl">{{ $title }}</div>
    <button class="font-semibold"
            type="submit"
            wire:click="$emitTo('liveusermodal', 'showForm', null);">
      <i class="fa-solid fa-plus"></i>
    </button>
  </div>
  <x-forms.table>
    <x-slot name="titles">
      <tr>
        @foreach ($fields as $field)
          @if ($field['table']['display'])
            @php
              // valida el campo a ordenar; si existe le pone cursor-pointer
              $orden = in_array($field['name'], $fieldsOrden) ? $field['name'] : null;
            @endphp
            @if ($field['name'] == 'is_active')
              <th class="bg-gray-50 px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500"
                  scope="col">
                @if (!$checkitAll)
                  {{ __($field['table']['titre']) }}
                @endif
              </th>
            @else
              <th class="{{ $orden ? 'cursor-pointer' : '' }} bg-gray-50 px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500"
                  wire:click="fncOrden('{{ $orden }}')"
                  scope="col">
                {{ __($field['table']['titre']) }}
                <x-forms.sort-icon campo="{{ $field['name'] }}"
                                   :sortDir="$sortDir"
                                   :sortField="$sortField" />
              </th>
            @endif
          @endif
        @endforeach
        <th class="col-span-2 flex justify-between gap-2 px-6 py-3">
          <div>
            {{ __('actions') }}
            {{-- @hasanyrole('admin') --}}
          </div>
          <div class="justify-end">
            <button class="btn btn-blue text-xs"
                    wire:click=""><i class="fa-solid fa-user-plus"></i>
              {{ __($display['new']) }}
            </button>
            {{-- @endhasanyrole --}}
          </div>
        </th>
      </tr>
    </x-slot>
    @forelse ($results as $key => $result)


      <x-tarjeta class="bg-slate-300 text-green-500 dark:bg-slate-600 dark:text-green-200"
                 id="tarjeta-01"
                 :titulo="$result->name">
        Lorem ipsum, alias dolore asperiores nesciunt atque adipisci eum fuga recusandae pariatur hic aut!
      </x-tarjeta>


      <tr class="{{ $loop->index % 2 ? 'bg-gray-100' : 'bg-gray-200' }} hover:bg-blue-300">
        @foreach ($fields as $field)
          @if ($field['table']['display'])
            <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
              @switch($field['name'])
                @case('id')
                  <!-- // relleno de ceros -->
                  {{ sprintf('%04d', $result->id) }}
                  <!-- // formato con decimales -->
                  {{-- -{{ number_format($key + 1, 0, ',', '.') }} --}}
                @break

                @case('profile_photo_path')
                  @if (substr($result->profile_photo_path, 0, 8) == 'https://')
                    <img class="h-10 w-10 rounded-full"
                         src="{{ $result->profile_photo_path }}"
                         alt="avatar">
                  @else
                    <img class="h-10 w-10 rounded-full"
                         src="{{ asset($result->profile_photo_path) }}"
                         alt="avatar">
                  @endif
                @break

                @case('name')
                  {{ $result->name }}
                @break

                @case('role')
                  {{ implode(', ', $result->getRoleNames()->toArray()) }}
                @break

                @case('email')
                  {{ $result->email }}
                @break

                @case('is_active')
                  @if (!$checkitAll)
                    <x-forms.comp-estado valor="{{ $result->is_active }}"
                                         tipo="si-no" />
                  @endif
                @break

                @default
                  Default case...
              @endswitch
            </td>
          @endif
        @endforeach
      </tr>
      @empty
        <p>{{ __('No record') }}</p>
      @endforelse
      <x-slot name="foot">
        pie
      </x-slot>
    </x-forms.table>
    @livewire('backend.liveusermodal')
    <x-modal-confirmacion name="confirmation">
      <x-slot name='title'>
        Confirmación
      </x-slot>

      <x-slot name='body'>
        Bar
      </x-slot>

      <x-slot name='footer'>
        <a class="mr-2 rounded-md bg-gray-400 transition-all duration-200 hover:bg-gray-500"
           href="#">{{ __('Cancel') }}</a>
        <x-button class="rounded-md bg-blue-400 transition-all duration-200 hover:bg-blue-500">Save</x-button>
      </x-slot>
    </x-modal-confirmacion>
    <x-modal-confirmacion name="user-delete-modal">
      <x-slot name='title'>
        foo
      </x-slot>

      <x-slot name='body'>
        Bar
        {{-- {{ $slot ?? null }} --}}
      </x-slot>

      <x-slot name='footer'>
        <a class="mr-2 rounded-md bg-gray-400 transition-all duration-200 hover:bg-gray-500"
           href="#">{{ __('Cancel') }}</a>
        <x-button class="rounded-md bg-blue-400 transition-all duration-200 hover:bg-blue-500">Save</x-button>
      </x-slot>
    </x-modal-confirmacion>

  </div>
