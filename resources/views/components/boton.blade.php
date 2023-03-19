<div>
    <a type="button" {{ $attributes->merge(['class' =>"bg-gray-600 text-gray-50 cursor-pointer rounded px-2 py-2 text-xs font-medium uppercase w-10/10 min-w-full h-8 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"]) }} data-te-ripple-init data-te-ripple-color="light">
        {{$slot ?? null }}
    </a>
</div>