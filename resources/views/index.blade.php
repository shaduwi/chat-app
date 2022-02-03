<!DOCTYPE html>
<html lang="en" class="overflow-hidden antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Chat</title>
</head>
<body class="bg-gray-900">
    <div class="app">
        <header class="flex top-0 flex-col place-items-center bg-gray-800 text-white p-5 drop-shadow">
            <h1 class="text-4xl mb-4">Hi!</h1>
            <input class="rounded p-2 w-1/2 text-center text-black drop-shadow-lg focus:drop-shadow" type="text" name="username" id="username" placeholder="enter your name :)" autocomplete="off">
        </header>
        <div id="messages" class="h-[72.5vh] overflow-y-auto"></div>
        <form class="bg-gray-900 bottom-0 fixed flex w-screen p-2 justify-evenly" id="messageForm">
            <input class="rounded resize-none w-screen text-center text-black drop-shadow-lg focus:drop-shadow" type="text" name="message" id="message" placeholder="write a message :)" autocomplete="off"></textarea>
            <button class="bg-gray-800 text-white py-3 px-6 hover:bg-gray-600 active:bg-gray-700 rounded drop-shadow-lg mx-3" type="submit" id="sendMessage">Send</button>
        </form>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>