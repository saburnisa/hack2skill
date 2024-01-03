<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Sign Up</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-image: url("https://static.vecteezy.com/system/resources/thumbnails/012/105/202/small/abstract-technology-futuristic-glowing-blue-and-red-light-lines-with-speed-motion-blur-effect-on-dark-blue-background-vector.jpg");
   background-repeat: no-repeat;
   background-size:1600px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color:skyblue;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
}

input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  box-sizing: border-box;
  margin-top: 5px;
}

button {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
  <div class="container">
    <form>
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit"><a href = self.php>Login</a></button>
      <p>Not yet Signed up?Then Signup. <a href=signup1.php>Signup Here.</a></p>
    </form>
    
  </div>
  
</body>
</html>