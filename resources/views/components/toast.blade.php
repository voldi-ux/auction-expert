@props(["message"])

<div id="toast" class="fixed top-5 right-5 z-50">
    <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-4">
        <span>{{$message}}</span>
        <button class="text-white hover:text-gray-200 focus:outline-none" onclick="document.getElementById('toast').remove()">
            ✕
        </button>
    </div>
</div>