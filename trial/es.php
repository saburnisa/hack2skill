<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat Bot</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.chat-container {
  max-width: 400px;
  margin: 20px auto;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
}

.chat-box {
  max-height: 300px;
  overflow-y: scroll;
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

.chat-message {
  margin-bottom: 10px;
}

.bot-message {
  background-color: #f2f2f2;
  padding: 10px;
  border-radius: 5px;
  margin-right: 50px;
}

.user-message {
  background-color: #e2f7f2;
  padding: 10px;
  border-radius: 5px;
  margin-left: 50px;
}

input[type="text"] {
  width: 70%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px 20px;
  border: none;
  background-color: #007bff;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}

</style>
<body>
  <div class="chat-container">
    <div class="chat-box" id="chatBox">
      <div class="chat-message bot-message">Hello! How can I help you today?</div>
    </div>
    <input type="text" id="userInput" placeholder="Type your message...">
    <button id="sendButton">Send</button>
  </div>
  <script>
    document.getElementById('sendButton').addEventListener('click', function() {
  const userInput = document.getElementById('userInput').value;
  if (userInput) {
    appendUserMessage(userInput);
    // Call a function to process the user input and generate a bot response
    // For example: generateBotResponse(userInput);
    document.getElementById('userInput').value = '';
  }
});

function appendUserMessage(message) {
  const chatBox = document.getElementById('chatBox');
  const userMessage = document.createElement('div');
  userMessage.classList.add('chat-message', 'user-message');
  userMessage.textContent = message;
  chatBox.appendChild(userMessage);
}
  </script>
</body>
</html>
