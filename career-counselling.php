<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Counselling</title>
</head>
<body>
    <h1>Career Counselling</h1>
    
    <p>Tired of binge-watching TV series? Your online counselling session is just a click away!</p>
    <p>You can now get full 1 to 1 support from IDP counsellors through video calls from the convenience of your home. Book an appointment now and our counsellors will contact you at the time that best suits your schedule.</p>
    <p>You can discuss with them your study options and find the best country, university and course that fits your needs, and also assist you with your application submissions – all online!</p>
    
    <h2>Book Your Counselling Session</h2>
    <form action="submit_booking.php" method="POST">
        <label for="name">First name:</label><br>
        <input type="text" id="name" name="first_name" required><br>
    
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br>
    
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
    
        <label for="mobile">Mobile Number:</label><br>
        <input type="tel" id="mobile" name="mobile" required><br>
    
        <label for="mode">Preferred Mode of Counselling:</label><br>
        <select id="mode" name="mode" required>
            <option value="video_call">Video Call</option>
            <option value="phone_call">Phone Call</option>
            <option value="chat">Chat</option>
            <option value="physical">Physical</option>
        </select><br>
    
        <label for="study_level">Preferred Study Level:</label><br>
        <select id="study_level" name="study_level" required>
            <option value="undergraduate">Undergraduate</option>
            <option value="postgraduate">Postgraduate</option>
            <option value="diploma">Diploma</option>
            <option value="certificate">Certificate</option>
        </select><br>
    
        <label for="study_destination">Preferred Study Destination:</label><br>
        <input type="text" id="study_destination" name="study_destination" required><br><br>
    
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
