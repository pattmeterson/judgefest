<html>
    <head>
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/judgefest.css">
        
        <script src="/vendor/jquery/dist/jquery.min.js"></script>
        <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Z-Fest Registration</h1>
            <form class="col-md-6 offset-md-3">
            <div id="school" class="form-group">
                <div class="form-group">
                    <label for="school_name">School You are Representing</label>
                    <input id="school_name" name="school_name" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="teacher_name">Teacher Contact Name</label>
                    <input type="text" id="teacher_name" name="teacher_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="teacher_phone">Teacher Contact Phone Number</label>
                    <input type="text" id="teacher_phone" name="teacher_phone" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="school_type">School Type</label>
                    <select id="school_type" name="school_type" class="form-control">
                        <option>High School</option>
                        <option>2 Year College/University</option>
                        <option>4 Year College/ University</option>
                        <option>Graduate School</option>
                    </select>
                </div>
            </div>
            
            <div id="team_leader" >
                <div class="form-group">
                    <label for="leader_firstName">Team Leader First Name</label>
                    <input id="leader_firstName" name="leader_firstName" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="leader_lastName">Team Leader Last Name</label>
                    <input id="leader_lastName" name="leader_lastName" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="leader_email">Team Leader Email Addresss</label>
                    <input id="leader_email" name="leader_email" type="email" class="form-control" />                    
                    <small id="emailHelp" class="form-text text-muted">
                        Must be unique for each team. <br />
                        If you are registering as a student, your Email must have an 
                        <a href="https://en.wikipedia.org/wiki/.edu" target="_blank"><b>.edu</b></a> address.
                    </small>
                </div>
                <div class="form-group">
                    <label for="leader_phone">Team Leader Cell Phone Number</label>
                    <input id="leader_phone" name="leader_phone" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="leader_address">Team Leader Home Address</label>
                    <input id="leader_address" name="leader_address" type="text" class="form-control" />
                </div>
            </div>
            
            <hr />
            
            <div id="team" class="form-group">
                <div class="form-group">
                    <label for="team_name">Team Name</label>
                    <input id="team_name" name="team_name" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="team_size">Approximate Team Size</label>
                    <input id="team_size" name="team_size" type="number" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="film_title">Film Title</label>
                    <input id="film_title" name="film_title" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="film_genre">Film Genere</label>
                    <select id="film_genre" class="form-control">
                		<option>Comedy</option>
                		<option>Drama</option>
                		<option>Suspense/Horror/Adventure</option>
                		<option>Fantasy/SciFi</option>
                		<option>Specialty (Music Video/Animated/Silent/Art)</option>
                		<option>Documentary</option>
                    </select>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
