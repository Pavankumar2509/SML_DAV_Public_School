<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";
$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) 
{
    $name1 = $_POST["name1"];
    $email = $_POST["email"];
    $subject1 = $_POST["subject1"];
    $message1 = $_POST["message1"];
    $sql = "INSERT INTO users(name1,email,subject1,message1) VALUES ('$name1', '$email', '$subject1', '$message1')";
    if ($conn->query($sql) === TRUE) {
        echo "Form data successfully stored in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>School</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div><img width=70 height=70 align=left src="DAV logo.jpg" alt="img"></div>
        <h1>S.M.L D.A.V PUBLIC SCHOOL</h1>
        <h4>Annavaram, Palakonda-532440</h4>
    </header>
    <nav>
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="facilies.html">Our Facilities</a></li>
            <li><a href="faculty.html">Faculty</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.php">Contact Us </a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
  <main>
    <section class="contact">
      <h2>Contact Information</h2>
      <ul>
        <li style="font-size: 20px;"><strong>Address: </strong>Guru Nanak Colony, Vijayawada, Andhar Pradesh</li><br>
        <li style="font-size: 20px;"><strong>Phone: </strong>+91 7842848479</li><br>
        <li style="font-size: 20px;"><strong>Email: </strong>xavion6369@gmail.com</li><br>
      </ul>
    </section>
    <section class="con">
      <h2>If you wish, send us a Message</h2>
      <form method="post">
        <label for="name1">Name :</label>
        <input type="text" id="name1" name="name1" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="subject1">Subject :</label>
        <input type="text" id="subject1" name="subject1" required>

        <label for="message1">Message :</label>
        <textarea id="message1" name="message1" rows="5" required></textarea>

        <button type="submit" name="submit">Send</button>
      </form>
    </section>
  </main>
  <footer>
        <h3>Address</h3><br>
        <p>S.M.L DAV PUBLIC SCHOOL<br>
            Annavaram, Palakonda<br>
            Dist. -Srikakulam<br>
            Andhra Pradesh -532440<br>
            Contact No. : 8712162932<br>
            E-Mail : pavankumar@gmail.com<br>
            Website : www.smldav.com<br>
            <strong>21BCE9307</strong>
        </p>
    </footer>
</body>

</html>

