<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            text-transform: uppercase;
            color: #333;
            font-weight: 800;
            margin-bottom: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .submit-btn {
            background-color:rgb(80, 1, 87);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color:rgb(107, 2, 168);
        }
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>

        <?php
            $name = $email = $phone = $gender = $subject = '';
            $students = [];
            $errors = [];
            $success = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $gender = htmlspecialchars($_POST['gender'] ?? '');
                $subject = htmlspecialchars($_POST['subject'] ?? '');

                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                if (!isset($_SESSION['students'])) {
                    $_SESSION['students'] = [];
                }

                if (empty($name)) {
                    $errors['name'] = "Name is required";
                }
                if (empty($email)) {
                    $errors['email'] = "Email is required";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Invalid email format";
                }
                if (empty($phone)) {
                    $errors['phone'] = "Phone number is required";
                }
                if (empty($gender)) {
                    $errors['gender'] = "Gender is required";
                }
                if (empty($subject)) {
                    $errors['subject'] = "Subject is required";
                }

                if (empty($errors)) {
                    $newStudent = [
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'gender' => $gender,
                        'subject' => $subject
                    ];
                    array_push($_SESSION['students'], $newStudent);
                    $success = "New student added successfully!";
                }

                if (isset($_SESSION['students'])) {
                    $students = $_SESSION['students'];
                }
            } else {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if (isset($_SESSION['students'])) {
                    $students = $_SESSION['students'];
                }
            }
        ?>

        <div class="form-container">
            <?php if (!empty($success)): ?>
                <p style="color: green;"><?php echo $success ?></p>
            <?php endif; ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                    <?php if (isset($errors['name'])): ?>
                        <p style="color: red;"><?php echo $errors['name']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                    <?php if (isset($errors['email'])): ?>
                        <p style="color: red;"><?php echo $errors['email']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                    <?php if (isset($errors['phone'])): ?>
                        <p style="color: red;"><?php echo $errors['phone']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label>Gender:</label>
                    <label><input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female</label>
                    <?php if (isset($errors['gender'])): ?>
                        <p style="color: red;"><?php echo $errors['gender']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select name="subject" id="subject">
                        <option value="">Select Subject</option>
                        <option value="Science" <?php if ($subject == "Science") echo "selected"; ?>>Science</option>
                        <option value="Arts" <?php if ($subject == "Arts") echo "selected"; ?>>Arts</option>
                        <option value="Commerce" <?php if ($subject == "Commerce") echo "selected"; ?>>Commerce</option>
                    </select>
                    <?php if (isset($errors['subject'])): ?>
                        <p style="color: red;"><?php echo $errors['subject']; ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <h3>Submitted Data:</h3>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($students)): ?>
                    <tr>
                        <td colspan="5">No student data submitted yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($students as $student): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['phone']); ?></td>
                            <td><?php echo htmlspecialchars($student['gender'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($student['subject'] ?? ''); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
