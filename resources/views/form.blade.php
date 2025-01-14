<!DOCTYPE html>
<html lang="en">

<head>
    <x-header>Form</x-header>
</head>

<body class="bg-gray-200">
    <form action="/api/comment" method="POST">
        @csrf
        <div>
            <label for="username">username:</label>
            <input type="text" name="username" placeholder="username" id="username"
                class="border-5 border-red-500 mx-2 my-2 py-2 px-3">
        </div>
        <div>
            <label for="comment">Komentar:</label>
            <input type="text" name="comment" placeholder="Komentar" id="comment"
                class="border-5 border-red-500 mx-2 my-2 py-2 px-3">
        </div>
        <button type="submit" class="bg-white m-3 p-4">Kirim</button>
    </form>

    <div class="">
        @foreach ($datas as $data)
            <div class="shadow-2xl w-max bg-white m-3 p-2">
                <div class="flex ">
                    <p class="text-3xl font-bold">{{ $data->username }}</p>
                    <p onclick="HTTPDelete('/api/comment/{{ $data['id'] }}', '{{ csrf_token() }}')"
                        class="px-5 cursor-pointer">
                        hapus</p>
                    <a href="/formUpdate/{{ $data['id'] }}" class="px-5 cursor-pointer">update</a>
                </div>
                <p>{{ $data->comment }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
