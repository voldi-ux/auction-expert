<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
          <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
        />

        <!-- Styles / Scripts -->
        @vite(['resources/js/app.js'])
</head>
<body class="font-sans leading-normal tracking-normal myBg h-screen">

<div class="max-w-4xl mx-auto my-10 text-white gradient2 bg-white p-8 rounded-lg">
    <!-- Header -->
    <div class="flex justify-between items-center mb-8 border-b pb-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-700">Invoice</h1>
            <p class="text-sm text-gray-500">#INV-{{ $invoice->id }}</p>
            <p class="text-sm text-gray-500">Date: {{ $invoice->date->format('F d, Y') }}</p>
        </div>
        <div class="text-right">
            <h2 class="text-xl font-semibold">{{ config('app.name') }}</h2>
            <p class="text-sm ">123 Main Street, City</p>
            <p class="text-sm ">Email: info@example.com</p>
            <p class="text-sm ">Phone: (123) 456-7890</p>
        </div>
    </div>

    <!-- Client Information -->
    <div class="mb-6">
        <h3 class="text-lg font-semibold ">Billed To:</h3>
        <p class="">{{ $invoice->client->name }}</p>
        <p class="">{{ $invoice->client->address }}</p>
        <p class="">Email: {{ $invoice->client->email }}</p>
    </div>

    <!-- Table -->
    <table class="w-full border-collapse border-gray-300 mb-6">
        <thead>
            <tr class="bg-gray text-white uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Description</th>
                <th class="py-3 px-6 text-center">Qty</th>
                <th class="py-3 px-6 text-center">Price</th>
                <th class="py-3 px-6 text-center">Total</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm">
            @foreach($invoice->items as $item)
                <tr class="border-b border-gray-300">
                    <td class="py-3 px-6 text-left">{{ $item->description }}</td>
                    <td class="py-3 px-6 text-center">{{ $item->quantity }}</td>
                    <td class="py-3 px-6 text-center">R{{ number_format($item->price, 2) }}</td>
                    <td class="py-3 px-6 text-center">R{{ number_format($item->quantity * $item->price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Summary -->
    <div class="text-right">
        <p class="text-lg text-gray-700 font-semibold mb-2">Subtotal: R{{ number_format($invoice->subtotal, 2) }}</p>
        <p class="text-lg text-gray-700 font-semibold mb-2">Tax ({{ $invoice->tax }}%): R{{ number_format($invoice->tax_amount, 2) }}</p>
        <p class="text-xl text-gray-800 font-bold">Total: R{{ number_format($invoice->total, 2) }}</p>
    </div>

    <!-- Footer -->
    <div class="mt-8 border-t pt-4">
        <p class="text-sm ">Thank you for your business!</p>
        <p class="text-sm ">Please contact us if you have any questions regarding this invoice.</p>
    </div>
</div>

</body>
</html>
