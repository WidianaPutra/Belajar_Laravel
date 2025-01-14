<!DOCTYPE html>
<html lang="en">

<head>
    <x-header>Form data</x-header>
</head>

<body>
    <form action="/api/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-2">
            <label for="file">Data</label>
            <input type="file" id="file" name="file" class="border-2 border-green-500">
        </div>
        <div class="my-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border-2 border-green-500">
        </div>
        <button type="submit" class="border-2 border-green-600">Submit</button>
    </form>

    <img src="{{ asset('storage/uploads/20250114023342-th.jpeg') }}" class="w-[100px] h-[100px]" alt="">
</body>

</html>
