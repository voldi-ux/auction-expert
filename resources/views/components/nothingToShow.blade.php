@props(["msg"])

<div
    class="flex flex-col items-center justify-center p-6 border border-gray-200 rounded-lg text-white w-full"
>
    <div class="text-center">
        <h2 class="mt-4 text-lg font-semibold text-gray-600">
            Nothing to show here
        </h2>
        <p class="mt-2 text-sm text-gray-500">
            {{ $msg }}
        </p>
    </div>
</div>
