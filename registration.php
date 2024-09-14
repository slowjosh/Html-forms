<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        * {
          padding: 0;
          margin: 0;  
        }

        body {
            background-color: #f8f7ff;
            height: 100%;
            padding-block: 5%;
            
        }

        main {
            margin: auto;
            height: 30rem;
            width: 60%; 
            background-color: #b8b8ff;
            border-radius: 1rem;
            padding-block: 2rem;
        }

        h1 {
            text-align: center; 
            color: #4a34c8; 
            padding-block: 2rem;
            font-size: 2.5rem;
        }

        .form-title {
            margin: auto;
        }
        
        input[type="radio"]{
            color: white;
        }

        .flex-field {
            display: grid;
            grid-template-columns: 25% 75%;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
            padding-inline: 1.3rem;
            margin-bottom: 2rem;
            
        }

        .grid-input {
            flex-grow: 1;
            font-size: 12px;
            padding-block: 6px;
            padding-inline: 4px;
            box-sizing: border-box;
            border-color: beige;
            background-color: transparent;
            border-color: transparent transparent black transparent;
            

        }

        .grid-label {
            text-align: right;
            
        }

        .grid-select {
            font-size: 12px;
            padding-block: 6px 4px;
            line-height: 4px;    
        }

        .checkbox-form {
            padding-inline: 4rem;
            margin-bottom: 2.5rem;
        }
        
        .form-button {
            background-color: #f8f7ff;
            color: #9381ff;
            border: 0px;
            border-radius: 4px;
            padding: 1rem 2.4rem
        }
    </style>
</head>
<body>
    <main>
        <form action="submit.php" method="post">
            <input type="text" name="fullname" placeholder="first_name" class="grid-input" required>
            <input type="text" name="last_name" placeholder="last_name" class="grid-input" required>
            <input type="email" name="email" placeholder="user email"  class="grid-input" required>
            <input type="password" name="password" placeholder="user password"  class="grid-input" required>

            <input type="date" name="date" placeholder="date" class="grid-input" min="<?php ?> echo date('Y-m-d'); ?>" required>

            <input type="submit" value="click me">
            <input type="button" value="this is button">
            <input type="reset" value="this is reset">

            <br>
            <input type="checkbox" name="checkbox[]" value="java"><label for="checkbox">java</label>
            <input type="checkbox" name="checkbox[]" value="c++"><label for="checkbox">c++</label>
            <input type="checkbox" name="checkbox[]" value="c#"><label for="checkbox">c#</label>
            <input type="checkbox" name="checkbox[]" value="php"><label for="checkbox">php</label>

            <br>
            <input type="radio" name="year-level" value="1"><label for="year-level">1styr</label>
            <input type="radio" name="year-level" value="2"><label for="year-level">2ndyr</label>
            <input type="radio" name="year-level" value="3"><label for="year-level">3rdyr</label>
        </form>
    </main>
    
</body>
</html> 