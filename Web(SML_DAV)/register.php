<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "School";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $occ = $_POST["occ"];
    $height = $_POST["height"];
    $weight1 = $_POST["weight1"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

  $sql = "INSERT INTO customers (first_name, last_name, dob, gender, father_occ, aadhar, email, phone, address) 
   VALUES ('$first_name', '$last_name', '$dob', '$gender', '$father_occ', '$aadhar', '$email', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Your admission is under progress, please wait for 2 days.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
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
    <section class="form">
      <h2>Registration Form</h2>
      <form action="#" method="post">
        <label for="first_name">First Name :</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name :</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="dob">Date of Birth :</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender :</label>
        <select id="gender" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>

        <label for="father_occ"> Father Occupation :</label>
        <input type="text" id="father_occ" name="father_occ" required>

        <label for="aadhar">Aadhar No. :</label>
        <input type="number" id="aadhar" name="aadhar" min="35" max="150" required>


        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone :</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Address :</label>
        <textarea id="address" name="address" required></textarea>

        <button type="submit">Register</button>
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