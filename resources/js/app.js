require("./bootstrap");

const usernameInput = document.getElementById("username");
const messageInput = document.getElementById("message");
const messages = document.getElementById("messages");
const form = document.getElementById("messageForm");

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

    //sets options for axios
    const options = {
        method: "post",
        url: "/sendMessage",
        data: {
            username: usernameInput.value,
            message: messageInput.value,
        },
    };
    //resets value of messageInput after sending message
    messageInput.value = "";
    axios(options);
});

//adds messages to chat
window.Echo.channel("chat").listen(".message", (e) => {
    messages.innerHTML +=
        '<div class="shadow bg-gray-200 border-gray-800 border-2 p-1 rounded m-4 w-max"><strong>' +
        e.username +
        "</strong>: " +
        e.message +
        "</div>";
});
