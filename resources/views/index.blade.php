<!DOCTYPE html>
<html lang="en" class="overflow-hidden antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Chat</title>
</head>
<body class="bg-gray-900">
    <div class="app flex flex-col justify-between h-screen">
        <header class="flex flex-col place-items-center bg-gray-800 text-white p-4 drop-shadow">
            <span id="welcomeMessage"></span>
            <input class="rounded p-2 w-72 text-center text-black drop-shadow-lg focus:drop-shadow" type="text" name="username" id="username" placeholder="enter your name :)" autocomplete="off">
        </header>
        <div id="messages" class="overflow-y-auto flex-grow"></div>
        <form class="bg-gray-900 flex w-screen p-2 justify-evenly" id="messageForm">
            <input class="rounded resize-none w-screen text-center text-black drop-shadow-lg focus:drop-shadow" type="text" name="message" id="message" placeholder="write a message :)" autocomplete="off"></input>
            <button class="bg-gray-800 text-white py-3 px-6 hover:bg-gray-600 active:bg-gray-700 rounded drop-shadow-lg ml-3" type="submit" id="sendMessage">Send</button>
        </form>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>