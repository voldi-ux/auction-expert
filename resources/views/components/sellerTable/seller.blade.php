@props(["seller"]) @php $status_style = ($seller->status == "active") ?
"bg-green-500" : "bg-red-500"; @endphp

<tr class="border-0 text-white">
    <th
        scope="row"
        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
    >
        <div class="ps-3">
            <div class="text-base font-semibold">
                {{$seller->name}}
            </div>
            <div class="font-normal text-gray-500">
                {{$seller->email}}
            </div>
        </div>
    </th>
    <td class="px-6 py-4">{{$seller->created_at}}</td>
    <td class="px-6 py-4">
        <div class="flex items-center">
            <div
                class="h-2.5 w-2.5 rounded-full {{ $status_style }} me-2"
            ></div>
            {{$seller->status}}
        </div>
    </td>
    <td class="px-6 py-4 space-x-4">
        <a
            href="#"
            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
            >Edit Seller</a
        >
        <a href="#" class="font-medium text-white p-2 bg-red-600">Delete </a>
    </td>
</tr>
