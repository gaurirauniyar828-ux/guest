<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>

        <h2>Guest Book Entry</h2>
                <div class="form-container"></div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        </div>
                <div class="form-container">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        </div>
                <div class="form-container">
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea>
        </div>
         <input type="hidden" name="add_guest" value="1">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
