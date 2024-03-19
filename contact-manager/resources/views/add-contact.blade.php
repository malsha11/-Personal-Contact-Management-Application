<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Add New Contact</h1>
    <form id="add-contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <label for="note">Note:</label>
        <textarea id="note" name="note"></textarea><br><br>
        <button type="submit">Add Contact</button>
    </form>
    <script src="/js/app.js"></script>
</body>
</html>
