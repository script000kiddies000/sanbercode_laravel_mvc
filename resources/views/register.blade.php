<!DOCTYPE html>
<html>
<head>
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h2>Sign Up Form</h2>

    <form method="POST" action="{{route('welcome')}}">
        @csrf
        <p>First name:</p>
        <input type="text" name="first_name" required>

        <p>Last name:</p>
        <input type="text" name="last_name" required>

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br>

        <p>Nationality:</p>
        <select name="nationality" required>
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysia">Malaysian</option>
            <option value="australia">Australian</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" id="bahasa_indonesia" name="bahasa_indonesia" value="bahasa_indonesia">
        <label for="bahasa_indonesia"> Bahasa Indonesia</label>
        <br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="english"> English</label>
        <br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other"> Other</label>
        <br>

        <p>Bio:</p>
        <textarea name="bio" required rows=10></textarea>
        <br>

        <button type="submit">Sign Up</button>


    </form>

</body>
</html>
