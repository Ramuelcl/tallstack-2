<div {{ $attributes->merge(['class' => 'flex justify-center max-w-lg w-lg p-1 bg-gray-50 border border-gray-200 rounded-lg shadow  dark:border-gray-700']) }}>
    <div class="block w-full rounded-lg bg-gray-50 text-center shadow-lg dark:bg-neutral-700">
        <div name="encabezado" class="flex justify-between border-b-4 border-neutral-300 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
            <div>{{ $titulo ?? null }}</div>
            <div>
                <a href="#" type="button" class="{{ $x }} rounded border text-xl font-medium leading-normal text-gray-500 px-2 hover:bg-gray-600">
                    X
                </a>
            </div>
        </div>

        <div class="m-6"> {{ $slot ?? null }}</div>

        <div name="pie" class="{{ $pie }} flex justify-between border-t-4 border-neutral-300 py-3 px-6 dark:border-neutral-600 dark:text-neutral-50">
            <x-boton class="bg-blue-400">Cancelar</x-boton>
            <a type="button" class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">
                Button
            </a>
        </div>
    </div>
</div>