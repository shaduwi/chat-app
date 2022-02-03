require("./bootstrap");

const usernameInput = document.getElementById("username");
const messageInput = document.getElementById("message");
const messages = document.getElementById("messages");
const form = document.getElementById("messageForm");
const WelcomeMsgCont = document.getElementById("welcomeMessage");

function randomIndexer(array) {
    return array[Math.floor(Math.random() * array.length)];
}

//creates array for colors
const colorArr = [
    "red",
    "blue",
    "teal",
    "green",
    "yellow",
    "orange",
    "pink",
    "purple",
];

//sets variable color to a random index of the colorArr
color = randomIndexer(colorArr);

form.addEventListener("submit", function (e) {
    //prevents page from refreshing
    e.preventDefault();

    //checks if username or message is empty, null or a whitespace
    if (usernameInput.value == null || usernameInput.value.trim() === "") {
        alert("You need to enter a username");
        return;
    }
    if (messageInput.value == null || messageInput.value.trim() === "") {
        alert("You need to enter a message");
        return;
    }

    //sets data options for axios
    const options = {
        method: "post",
        url: "/sendMessage",
        data: {
            username: usernameInput.value,
            message: messageInput.value,
            color: color,
        },
    };

    //resets value of messageInput after sending message
    messageInput.value = "";
    axios(options);
});

const msgArr = ["Hi!", "Welcome!", "How are you?"];
WelcomeMsg = randomIndexer(msgArr);
WelcomeMsgCont.innerHTML =
    '<h1 class="text-[4rem] mb-4">' + WelcomeMsg + "</h1>";

function newMessage(e) {
    let currTime = new Date().toTimeString().slice(0, 5);
    messages.innerHTML +=
        '<div class="drop-shadow bg-white bg-opacity-20 border-gray-800 border-2 p-1 rounded m-4 w-max text-white flex flex-row items-center"> <span class="text-white text-opacity-50 text-[.6rem] mr-1">[' +
        currTime +
        ']</span> <strong style="color:' +
        e.color +
        '";">' +
        e.username +
        "</strong>: " +
        e.message +
        "</div>";
}

function testMessage(amount) {
    for (i = 0; i < amount; i++) {
        newMessage("");
    }
}

//adds messages to chat
window.Echo.channel("chat").listen(".message", (e) => {
    newMessage(e);
});
