<?php 

    if( isset($_GET['accept_cookie']) ) {
        setcookie('cookie_accepted', 'yes', time() + ( 86400 * 30 ), "/");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #f0f4f8;
      padding: 40px 15px;
      position: relative;
    }
    .cookie-box {
        width: 400px;
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        position: fixed;
        right: 30px;
        bottom: 30px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }
    .cookie-box p {
        margin-bottom: 20px;
        line-height: 25px;
    }
    button {
        background: #ebab49;
        border: none;
        padding: 10px 25px;
        cursor: pointer;
        border-radius: 5px;
    }
    .container {
      max-width: 1000px;
      margin: auto;
      background: #ffffff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .header h2 {
      text-align: center;
      color: #2d2d2d;
      margin-bottom: 40px;
      font-weight: 700;
      font-size: 28px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #444;
      font-weight: 600;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ccc;
      background: #fafafa;
      font-size: 15px;
      transition: border 0.3s;
    }

    input:focus,
    textarea:focus,
    select:focus {
      border-color: #7b3fe4;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-group-inline {
      display: flex;
      gap: 20px;
    }

    .form-group-inline .form-group {
      flex: 1;
    }

    .radio-group label {
      display: inline-block;
      margin-right: 15px;
      font-weight: 500;
      color: #333;
    }

    .submit-btn {
      background-color: #7b3fe4;
      color: white;
      padding: 14px 32px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #5d2fc0;
    }

    p.error {
      color: #e74c3c;
      font-size: 14px;
      margin-top: 5px;
    }

    p.success {
      color: #2ecc71;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .table-wrapper {
      overflow-x: auto;
      margin-top: 40px;
    }

    .table-wrapper table {
      width: 100%;
      min-width: 900px;
      border-collapse: collapse;
      font-size: 15px;
    }

    table th,
    table td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: center;
    }

    table th {
      background-color: #f5f5f5;
      font-weight: 600;
    }

    img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 6px;
    }

    @media (max-width: 600px) {
      .form-group-inline {
        flex-direction: column;
      }

      .submit-btn {
        width: 100%;
      }

      table, th, td {
        font-size: 13px;
      }
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Student Registration Form</h2>
        </div>

        <?php
            $name = $email = $phone = $student_id = $dob = $gender = $subject = $address = $photo = '';
            $students = [];
            $errors = [];
            $success = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $student_id = htmlspecialchars($_POST['student_id']);
                $dob = htmlspecialchars($_POST['dob']);
                $gender = htmlspecialchars($_POST['gender'] ?? '');
                $subject = htmlspecialchars($_POST['subject'] ?? '');
                $address = htmlspecialchars($_POST['address']);

                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                if (!isset($_SESSION['students'])) {
                    $_SESSION['students'] = [];
                }

                if ( empty($name) ) $errors['name'] = "Name is required";
                if ( empty($email) ) $errors['email'] = "Email is required";
                elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) $errors['email'] = "Invalid email format";
                if ( empty($phone) ) $errors['phone'] = "Phone number is required";
                if ( empty($gender) ) $errors['gender'] = "Gender is required";
                if ( empty($subject) ) $errors['subject'] = "Subject is required";

                if (!empty($_FILES['photo']['name'])) {
                    $targetDir = "uploads/";
                    if (!is_dir($targetDir)) {
                        mkdir($targetDir);
                    }
                    $photo = basename($_FILES['photo']['name']);
                    $targetFile = $targetDir . $photo;

                    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                        $errors['photo'] = "Photo upload failed";
                    }
                }

                if (empty($errors)) {
                    $newStudent = [
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'student_id' => $student_id,
                        'dob' => $dob,
                        'gender' => $gender,
                        'subject' => $subject,
                        'address' => $address,
                        'photo' => $photo
                    ];
                    array_push($_SESSION['students'], $newStudent);
                    $success = "New student added successfully!";
                }

                $students = $_SESSION['students'];
            } else {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $students = $_SESSION['students'] ?? [];
            }
        ?>

        <?php if (!empty($success)): ?>
            <p class="success"><?php echo $success ?></p>
        <?php endif; ?>

        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" value="<?php echo $name ?>">
                <?php if (isset($errors['name'])): ?><p class="error"><?php echo $errors['name']; ?></p><?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" value="<?php echo $email ?>">
                <?php if (isset($errors['email'])): ?><p class="error"><?php echo $errors['email']; ?></p><?php endif; ?>
            </div>

            <div class="form-group-inline">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" value="<?php echo $phone ?>">
                    <?php if (isset($errors['phone'])): ?><p class="error"><?php echo $errors['phone']; ?></p><?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" name="student_id" value="<?php echo $student_id ?>">
                </div>
            </div>

            <div class="form-group-inline">
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" value="<?php echo $dob ?>">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <div class="radio-group">
                    <label><input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female</label>
                    </div>
                    <?php if (isset($errors['gender'])): ?><p class="error"><?php echo $errors['gender']; ?></p><?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <select name="subject">
                    <option value="">-- Select Subject --</option>
                    <option value="Science" <?php if ($subject == "Science") echo "selected"; ?>>Science</option>
                    <option value="Arts" <?php if ($subject == "Arts") echo "selected"; ?>>Arts</option>
                    <option value="Commerce" <?php if ($subject == "Commerce") echo "selected"; ?>>Commerce</option>
                </select>
                <?php if (isset($errors['subject'])): ?><p class="error"><?php echo $errors['subject']; ?></p><?php endif; ?>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address"><?php echo $address ?></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo">
                <?php if (isset($errors['photo'])): ?><p class="error"><?php echo $errors['photo']; ?></p><?php endif; ?>
            </div>

            <button class="submit-btn" type="submit" name="submit">Submit</button>
        </form>

        <h3 style="margin-top: 50px; margin-bottom: 10px;">Submitted Students</h3>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>ID</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Subject</th>
                    <th>Address</th>
                    <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($students)): ?>
                    <tr><td colspan="9">No student data available.</td></tr>
                    <?php else: ?>
                    <?php foreach ($students as $student): ?>
                        <tr>
                        <td><?php echo htmlspecialchars($student['name']); ?></td>
                        <td><?php echo htmlspecialchars($student['email']); ?></td>
                        <td><?php echo htmlspecialchars($student['phone']); ?></td>
                        <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                        <td><?php echo htmlspecialchars($student['dob']); ?></td>
                        <td><?php echo htmlspecialchars($student['gender']); ?></td>
                        <td><?php echo htmlspecialchars($student['subject']); ?></td>
                        <td><?php echo htmlspecialchars($student['address']); ?></td>
                        <td>
                            <?php if (!empty($student['photo'])): ?>
                            <img src="uploads/<?php echo htmlspecialchars($student['photo']); ?>" alt="Photo">
                            <?php else: ?>
                            No Photo
                            <?php endif; ?>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>


    <?php if( !isset($_COOKIE['cookie_accepted']) ): ?>  
        <!-- Cookie Box: ক্লায়েন্টের সাইডে ছোট তথ্য সংরক্ষণের জন্য ব্যবহৃত হয়, যেগুলো পরবর্তী ভিজিটে ইউজারকে বেটার এক্সপেরিয়েন্স দিতে সাহায্য করে।  -->
        <div class="cookie-box" id="cookieBox">
            <div>
                <p>আমরা Cookie ব্যবহার করি যাতে আপনি আমাদের ওয়েবসাইটে ভালো পান। আপনি কি সম্মতি দিচ্ছেন?</p>
            </div>
            <div>
                <button onclick="acceptCookie()">Allow</button>
            </div>
        </div> 
    <?php endif; ?>

    <script>
        function acceptCookie() {
            fetch('?accept_cookie=true').then(() => {
                document.getElementById('cookieBox').style.display = 'none';
            });
        }
    </script>

</body>
</html>
