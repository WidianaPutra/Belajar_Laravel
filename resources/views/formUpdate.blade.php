<!DOCTYPE html>
<html lang="en">

<head>
    <x-header>Form Update</x-header>
</head>

<body class="bg-gray-200">
    <form action="/api/comment/{{ $datas['id'] }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="username">username:</label>
            <input type="text" name="username" placeholder="username" id="username" value="{{ $datas['username'] }}"
                class="border-5 border-red-500 mx-2 my-2 py-2 px-3">
        </div>
        <div>
            <label for="comment">Komentar:</label>
            <input type="text" name="comment" placeholder="Komentar" id="comment"
                class="border-5 border-red-500 mx-2 my-2 py-2 px-3" value="{{ $datas['comment'] }}">
        </div>
        <button type="submit" class="bg-white m-3 p-4">Perbaharui</button>
    </form>
</body>

</html>
