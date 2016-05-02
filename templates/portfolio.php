<ul class="nav nav-pills nav-justified">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="get.php">Printer</a></li>
    <li><a href="job.php">Job</a></li>
    <li><a href="files.php">Files</a></li>
    <li><a href="live.php">Live</a></li>
</ul>

<br />
<br />

<table class = "table table-bordered"></table>

<br />

<?php
        $printvar0 = var_export($_SESSION['printer_state']['state']['flags']['closedOrError'], true);
        $printvar1 = var_export($_SESSION['printer_state']['state']['flags']['error'], true);
        $printvar2 = var_export($_SESSION['printer_state']['state']['flags']['operational'], true);
        $printvar3 = var_export($_SESSION['printer_state']['state']['flags']['paused'], true);
        $printvar4 = var_export($_SESSION['printer_state']['state']['flags']['printing'], true);
        $printvar5 = var_export($_SESSION['printer_state']['state']['flags']['ready'], true);


        print "<table class = "table table-bordered">roboBeta is closed or in error:
        <li>" . $printvar0."</li>
        My printer is currently in error:
        <li>" . $printvar1. "</li>
        My printer is currently operational:
        <li>" . $printvar2. "</li>
        My printer is currently paused:
        <li>" . $printvar3. "</li>
        My printer is currently printing:
        <li>" . $printvar4. "</li>
        My printer is currently ready:
        <li>" . $printvar5. "</li></table>";

//<table class = "table table-bordered"></table>


        $_SESSION['email_body'] = "<ul id='statustable'>My printer is closed or in error:
        <li>" . $printvar0."</li>
        My printer is currently in error:
        <li>" . $printvar1. "</li>
        My printer is currently operational:
        <li>" . $printvar2. "</li>
        My printer is currently paused:
        <li>" . $printvar3. "</li>
        My printer is currently printing:
        <li>" . $printvar4. "</li>
        My printer is currently ready:
        <li>" . $printvar5. "</li></ul>";
?>

<br />
<br />
    
     <form action="/emailprinter_form.php" method="post">
        <fieldset>
            <div class="control-group">
                <input autofocus name="email" placeholder="Email:" type="text"/>
            </div>
            <br/>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Email setting
              <span class="caret"></span></button>
              <ul class="dropdown-menu centerDropdown">
                <li><a href="#">send one email</a></li>
                <li><a href="#">send every 15 minutes</a></li>
                <li><a href="#">send every 30 min</a></li>
              </ul>
            </div>
            <br />
            <div class="control-group">
                    <button type="submit" class="btn btn-success">Send Email</button>
                </div>
                                     
        </fieldset>

    </form>
        <br />
            <div>
                    <?php
                        if(isset($_SESSION['email_sent'])){
                        echo $_SESSION['email_sent'];
                        }
                    ?>
                </div> 
        <br />
 