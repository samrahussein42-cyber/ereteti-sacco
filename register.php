<?php
$page_title = 'Welcome to Ereteti';
include 'includes/header.php';
?>
    <main>
        <p>
            Any dairy farmer within reach of one of our three routes
              may apply to join Ereteti. You will need your national ID
              number and a phone we can reach you on. Once your
              membership number is issued you may deliver from that day,
              and you are paid once a month for the litres we accept 
        </p>
        <form action="process-register.php" method="post">
            <fieldset>
                <legend>Your details</legend>
            
            <label for="fname">First Name </label>
                <input type="text" id="fname" name = "first_name" required>
                <br>
            <label for="lname">Last Name </label>
                <input type="text" id="lname" name="last_name" required>
                <br>
            <label for="id">National ID </label>
                <input type="text" id="id" name = "national_id" required>
                <br>
            <label for="phone">Phone </label>

                <input 
                    type="tel" 
                    id="phone" 
                    name="phone"
                    placeholder="07xxxxxxxx"
                    pattern="07[0-9]{8}"
                    title="Ten digits, starting 07"
                    required
                >
                <br>
           </fieldset>
           <fieldset>
            <legend>Your Route</legend>
            <label for="routeslabel">
            <select name="route" id="routes">
                <option value="">Choose a route</option>
                <option value="Kiserian">Kiserian</option>
                <option value="Kiserian">Ngong</option>
                <option value="Kiserian">Rongai</option>
            </select>
            <br>
            <label for="date">Date Of Joining</label>
            <br>
            <input type="date" id="date" max="2026-09-24" name="date_joined">
           </fieldset>
           <label for="rules">
            <input type="checkbox" id="rules" name="rules" required>
            I accept the sacco's rules
            </label>
        <button type="submit">Apply to join</button>

        </form>
    </main>
<?php include 'includes/footer.php'; ?>