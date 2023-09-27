<!DOCTYPE html>
<html>
  <head>
    <title>Programa para Draft Survey</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <form action="{{route('register')}}" method="post">
        @csrf
        <center><img src="assets/IMG/logo2.png" alt="Logo de la página" width="100"></center>
        <h1>Draft Survey App</h1>
        <center><p>"Measure, Verify and Sail."</p></center>
        <div class="form-group">
          <label for="username">Name</label>
          <input type="mail" id="username" name="name" required>
        </div>
        <div class="form-group">
          <label for="username">Mail</label>
          <input type="mail" id="username" name="email" required>
        </div>
        <div class="form-group">
          <label for="username">Verify Mail</label>
          <input type="mail" id="username" name="email_confirmation" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="password-field">
            <input type="password" id="password" name="password" placeholder="" required>
          </div>   
        <div class="form-group">
          <label for="password">Confirm Password</label>
          <div class="password-field">
            <input type="password" id="password" name="password_confirmation" placeholder="" required>
        </div>                 
        </div>
        <button type="submit">Register</button>

        <div class="enlace-olvidaste">
          </div>
      </form>
    </div>
    <footer class="footer">
        <p>© 2023 - Luis Villatoro</p>
      </footer>
  </body>
  <script src="script.js"></script>
</html>
