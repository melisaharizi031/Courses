<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Center</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="index-page">


 <div id="wellcome">

    <h1>Wellcome to our Training Center</h1>
    <p>Professional courses to boost your career</p>
 </div>



 <div class="index-course">

    <h2 class="section-title">Our Courses</h2>

        <div class="courses-section">

            <div class="courses-grid">

                <div class="course-card">
                    <img src="img/backend.jpg" alt="Backend Development">
                    <h3>Backend Development</h3>
                </div>

                <div class="course-card">
                    <img src="img/data.jpg" alt="Data Science">
                    <h3>Data Science</h3>
                </div>

                <div class="course-card">
                    <img src="img/marketing.jpg" alt="Digital Marketing">
                    <h3>Digital Marketing</h3>
                </div>

                <div class="course-card">
                    <img src="img/fullstack.jpg" alt="Full Stack Development">
                    <h3>Full Stack Development</h3>
                </div>

                <div class="course-card">
                    <img src="img/graphic.jpg" alt="Graphic Design">
                    <h3>Graphic Design</h3>
                </div>

                <div class="course-card">
                    <img src="img/mobile.jpg" alt="Mobile App Development">
                    <h3>Mobile App Development</h3>
                </div>

                <div class="course-card">
                    <img src="img/web.jpg" alt="Web Development">
                    <h3>Web Development</h3>
                </div>
                
                <div class="course-card">
                    <img src="img/cybersecurity.jpg" alt="Cybersecurity">
                    <h3>Cybersecurity</h3>
                </div>

            </div>
        </div>

    <a href="courses.php" class="btn btn-danger">View More</a>

 </div>


 <?php
include 'includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name   = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $course = trim($_POST['course']);

    if ($name && $email && $course) {
        $stmt = mysqli_prepare(
            $conn,
            "INSERT INTO applications (name, email, course) VALUES (?, ?, ?)"
        );
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $course);
        mysqli_stmt_execute($stmt);

        $message = "Application submitted successfully!";
    } else {
        $message = "Please fill in all fields.";
    }
}
?>


<div class="index-apply">

<h2>Apply for a Course</h2>

<?php if ($message): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" id="applyform">
    <input type="text" name="name" placeholder="Full Name" class="form-control mb-3" required>
    <input type="email" name="email" placeholder="Email Address" class="form-control mb-3" required>

    <select name="course" required>
        <option value="">Select a course</option>
        <option value="Artificial Intelligence">Artificial Intelligence</option>
        <option value="Backend Developer">Backend Developer</option>
        <option value="Cloud Computing">Cloud Computing</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Data Science">Data Science</option>
        <option value="Digital Marketing">Digital Marketing</option>
        <option value="Full Stack Development">Full Stack Development</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="Information Technology">Information Technology</option>
        <option value="iOS Development">iOS Development</option>
        <option value="Mobile Developer">Mobile App Developer</option>
        <option value="Robotics and Automation">Robotics and Automation</option>
        <option value="Software Engineering">Software Engineering</option>
        <option value="Web Development">Web Development</option>
    </select>

    <div class="buttons">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>

</div>



 <div class="contact">

    <h2 class="section-title">Contact Us</h2>

    <p>Have questions? We're here to help! Reach out to us through any of the following methods:</p>

        <strong>Email:</strong> <a href="mailto:contact@trainingcenter.com">contact@trainingcenter.com</a>
        <strong>Phone:</strong> <a href="tel:+1 (555) 123-4567">+1 (555) 123-4567</a>
        <strong>Address:</strong><a> 123 Education Street, Learning City</a>

 </div>


</body>
</html>