<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <style>
        form{
            width: 50%;
            display: inline-block;
        }
        .results{
            width: 45%;
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <main>
        <form name="CVForm" id="CVForm" method="post" action="_5_CVGenerator.php">
            <fieldset>
                <legend>Personal information</legend>
                <input type="text" name="FirstName" value="Dimitar" placeholder="FirstName" /><br />
                <input type="text" name="LastName" value="Bonev" placeholder="LastName" /><br />
                <input type="text" name="Email" value="dbonev91@gmail.com" placeholder="Email" /><br />
                <input type="text" name="PhoneNumber" value="12345678901" placeholder="Phone Number" /><br />
                <label for="female">Female</label><input name="Gender" id="female" type=radio value="Female" />
                <label for="male">Male</label><input name="Gender" id="male" checked type=radio value="Male" /><br />
                <label for="birth"></label><br />
                <input type="date" id="birth" value="01/10/1991" name="BirthDate" /><br />
                <label for="Nationality">Nationality</label><br />
                <select name="Nationality" id="Nationality">
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="English" selected>English</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Last work position</legend>
                <label for="company">Company name: </label><input id="company" value="SoftUni" type="text" name="CompanyName" placeholder="Company name" /><br />
                <label for="dateFrom">From: </label><input type="date" value="11/1/1992" id="dateFrom" name="From" /><br />
                <label for="dateTo">To: </label><input type="date" value="1/12/2009" id="dateTo" name="To" />
            </fieldset>
            <fieldset>
                <legend>Computer Skills</legend>
                <label for="compSkills">Programming languages: </label><br />
                <input type="text" value="PHP" id="compSkills" name="CompSkills" />
                <select name="level" id="level">
                    <option value="Beginner">Beginner</option>
                    <option value="Programmer">Programmer</option>
                    <option value="Ninja">Ninja</option>
                </select><br />
                <input type="button" id="removeLang" value="Remove Language" />
                <input type="button" id="addLang" value="Add Language" />
            </fieldset>
            <fieldset>
                <legend>Other skills</legend>
                <label for="talkLang">Languages</label><br /><input name="Languages" type="text" id="talkLang" /><br />
                <select name="comprehension" id="comprehension">
                    <option value="comprehension">-Comprehension-</option>
                    <option value="intermediate">intermediate</option>
                    <option value="beginner">beginner</option>
                    <option value="advanced">advanced</option>
                </select>
                <select name="reading" id="reading">
                    <option value="reading">-Reading-</option>
                    <option value="intermediate">intermediate</option>
                    <option value="beginner">beginner</option>
                    <option value="advanced">advanced</option>
                </select>
                <select name="writing" id="writing">
                    <option value="writing">-Writing-</option>
                    <option value="intermediate">intermediate</option>
                    <option value="beginner">beginner</option>
                    <option value="advanced">advanced</option>
                </select><br />
                <input type="button" id="removeLang" value="Remove Language" />
                <input type="button" id="addLang" value="Add Language" /><br />
                <label for="driving">Driving License</label><br />
                <label for="driveB">B</label><input name="Driver'sLicense" type="checkbox" id="driveB" value="B" />
                <label for="driveA">A</label><input name="Driver'sLicense" type="checkbox" id="driveA" value="A" />
                <label for="driveC">C</label><input name="Driver'sLicense" type="checkbox" id="driveC" value="C" />
            </fieldset>
            <input type="submit" name="submit" value="Generate CV" />
        </form>
        <div class="results">
            <?php
                if($_POST){
                    makeTheInfo('First Name', 'Last Name', 'Email', 'Phone Number', 'Gender', 'Birth Date', 'Nationality', 'Personal Information');
                    makeTheInfo('Company Name', 'From', 'To', 'Last work position');
                    makeTheInfo('Comp Skills', 'level', 'Computer Skills');
                    makeTheInfo('Languages', 'Driver\'s License', 'Other Skills');
                }
            ?>
        </div>
    </main>
</body>
</html>
<?php
function makeTheInfo(){
    ?>
    <table border="1"><tr>
            <td colspan="2"><?php echo func_get_args()[func_num_args()-1]; ?>: </td>
        </tr><tr>
            <?php
            for($i=0; $i<func_num_args()-1; $i++){
            $currentWord=explode(' ', func_get_args()[$i]);
            ?>
        <tr>
            <td><?php echo func_get_args()[$i]; ?></td>
            <?php
            if(count($currentWord)>1){
                ?>
                <td><?php echo $_POST[$currentWord[0].$currentWord[1]]; ?></td>
            <?php
            }
            else{
                ?>
                <td><?php echo $_POST[func_get_args()[$i]]; ?></td>
            <?php
            }
            ?>
        </tr>
        <?php
        }
        ?>
        </tr></table>
<?php
}
?>