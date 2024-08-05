<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDS BLACK List ACC</title>
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
            animation: colorChange 1s infinite alternate;
        }
        @keyframes colorChange {
            0% { color: #0000ff; }
            100% { color: #4b0082; }
        }
        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .search-container input {
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: none;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .account {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 150px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .account:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .account img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            background-color: #0000ff;
        }
        .account-name {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        .description {
            display: none;
            background-color: #fff;
            color: #333;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>this web for aids acc</h1>
        <h1>
            <span style="color: purple;">status</span> 
            <span style="color: red; animation: blink 3s infinite;">OcTo Offline</span>
        </h1>
        <style>
        @keyframes blink {
            0% { color: green; }
            50% { color: blue; }
            100% { color: green; }
        }
        </style>
        <h1>admin is Offline : Kabos💤 </h1>
        <h1>admin is Offline : @xyd_💤 </h1>
    </div>
    <div class="search-container">
        <input type="text" id="search" placeholder="search PSN aids - البحث عن اسم الحساب" onkeyup="filterAccounts()">
    </div>
    <div class="container" id="account-container">
        <?php
        $accounts = json_decode(file_get_contents('accounts.json'), true);
        foreach ($accounts as $account) {
            echo '<div class="account" data-name="' . $account['name'] . '" data-description="' . $account['description'] . '" onclick="showDescription(this)">
                    <img src="https://logos-world.net/wp-content/uploads/2020/11/PlayStation-Logo.png" alt="PSN Logo">
                    <div class="account-name">' . $account['name'] . '</div>
                </div>';
        }
        ?>
    </div>
    <div id="description" class="description"></div>

    <script>
        function filterAccounts() {
            const searchValue = document.getElementById('search').value.toLowerCase();
            const accounts = document.querySelectorAll('.account');

            accounts.forEach(account => {
                const name = account.getAttribute('data-name').toLowerCase();
                if (name.includes(searchValue)) {
                    account.style.display = 'block';
                } else {
                    account.style.display = 'none';
                }
            });
        }

        function showDescription(account) {
            const descriptionText = account.getAttribute('data-description');
            const description = document.getElementById('description');
            description.innerText = descriptionText;
            description.style.display = 'block';
        }
    </script>
</body>
</html>