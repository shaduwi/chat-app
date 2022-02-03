<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://shaduwi-chat.herokuapp.com/css/app.css">
    <title>Chat</title>
</head>
<body>
    <div class="app">
        <header class="flex flex-col place-items-center bg-gray-800 text-white p-5 shadow">
            <h1 class="text-4xl mb-4">Hi!</h1>
            <input class="border-2 border-gray-200 rounded p-2 w-1/2 text-center text-black shadow-lg focus:shadow" type="text" name="username" id="username" placeholder="enter your name :)" autocomplete="off">
        </header>
        <div id="messages" class="overflow-y-scroll"></div>
        <form class="bottom-0 fixed flex w-screen m-2 justify-evenly" id="messageForm">
            <input class="border-2 border-gray-900 rounded p-2 w-screen text-center text-black shadow-lg focus:shadow" type="text" name="message" id="message" placeholder="write a message :)" autocomplete="off">
            <button class="bg-gray-800 text-white py-3 px-6 hover:bg-gray-600 active:bg-gray-700 rounded shadow-lg mx-3" type="submit" id="sendMessage">Send</button>
        </form>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>