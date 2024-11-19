<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f9;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 550px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        .input-group-horizontal {
            display: flex;
            gap: 10px;
        }

        .input-group-horizontal label, .input-group-vertical label {
            font-weight: bold;
            color: #555;
        }

        .input-group-horizontal input, .input-group-vertical input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .input-group-vertical {
            display: flex;
            flex-direction: column;
            margin-top: 15px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: skyblue;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Information Form</h2>
        <form action="roxine_db.php" method="POST">
            <div class="input-group-horizontal">
                <div>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div>
                    <label for="middlename">Middle Name:</label>
                    <input type="text" id="middlename" name="middlename">
                </div>
                <div>
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
            </div>

            <div class="input-group-vertical">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group-vertical">
                <label for="course_section">Course & Section:</label>
                <input type="text" id="course_section" name="course_section" required>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
