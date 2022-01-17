<html>
<head><title> useris</title></head>
<body>

<h2>Prisijungti</h2>
<form>
    <input type='email' name='email' placeholder='john@gmail.com'>
    <input type='password' name='password' placeholder='*******'>
    <input type='submit' value='Prisijungti'>
</form>
☻
<hr>
<h2>Registracijos forma</h2>
<form action="registration.php" method='post'><br>
    <input type='text' name='first_name' placeholder='first name'><br>
    <input type='text' name='last_name' placeholder='last name'><br>
    <input type='email' name='email' placeholder='email'><br>
    <input type='password' name='password1' placeholder='pass1'><br>
    <input type='password' name='password2' placeholder='pass2'><br>
    <label for='agree_terms'>Sutinku su registracijos forma</label>
    <input type='checkbox' name='agree_terms' id='agree_terms'>
    <input type='submit' value='Registruotis'>
</form>
</body>
</html>
<!-- Registruojantis pachekinti, ar emailas laisvas.
perkurti registracija, kad saugotu nickname, jai nicknamas jau yra, prideti skaiciu gale.
jei vartotojas nepazysmi sutikimo su salygomis, jo neregistruoti. -->