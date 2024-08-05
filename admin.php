<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 20px;
            color: #fff;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 2em;
            color: #4b0082;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-container input, .form-container textarea {
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            border-radius: 5px;
            border: none;
        }
        .form-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4b0082;
            color: #fff;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0000ff;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Add Account</h1>
    </div>
    <div class="form-container">
        <form action="admin.php" method="post">
            <input type="text" name="accountName" placeholder="Account Name" required>
            <textarea name="accountDescription" placeholder="Account Description" required></textarea>
            <button type="submit">Add Account</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $accountName = $_POST['accountName'];
        $accountDescription = $_POST['accountDescription'];

        $accounts = json_decode(file_get_contents('accounts.json'), true);
        $accounts[] = ['name' => $accountName, 'description' => $accountDescription];
        file_put_contents('accounts.json', json_encode($accounts));

        echo '<div style="text-align:center; margin-top:20px;">Account added successfully!</div>';
    }
    ?>
</body>
</html>