<?php include("top.html"); ?>
    <!-- Form for user registration input -->
    <form action="http://localhost/NerdLuv/signup-submit.php" method="post">
        <fieldset>
            <legend>New User Signup:</legend>

            <p>
                <strong>Name:</strong>
                <input type="text" name="name" size="16" />
            </p>

            <p>
                <strong>Gender:</strong>
                <label><input type="radio" name="gender" value="M"/> Male</label>
                <label><input type="radio" name="gender" value="F" checked="checked" /> Female</label>
            </p>

            <p>
                <strong>Age:</strong>
                <input type="text" name="age" size="6" maxlength="2" />
            </p>

            <p>
                <strong>Personality Type:</strong>
                <input type="text" name="personality" size="6" maxlength="4" />
                (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
            </p>

            <p>
                <strong>Favorite OS:</strong> 
                <select name="OS">
                    <option>Windows</option>
                    <option>Mac OS X</option>
                    <option>Linux</option>
                </select>
            </p>

            <p>
                <strong>Seeking age:</strong>
                <input type="text" name="min_age" size="5" maxlength="2" placeholder="min"/> to
                <input type="text" name="max_age" size="5" maxlength="2" placeholder="max" />
            </p>

            <p>
                <input type="submit" value="Sign Up"  />
            </p>
        
        </fieldset>
    </form>  
    <br />
<?php include("bottom.html"); ?>