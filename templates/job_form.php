<ul class="nav nav-pills nav-justified">
    <li><a href="index.php">Home</a></li>
    <li><a href="get.php">Printer</a></li>
    <li class="active"><a href="job.php">Job</a></li>
    <li><a href="files.php">Files</a></li>
    <li><a href="live.php">Live</a></li>
</ul>

<br />

<table class="table table-striped">
    <tbody>
        <br />
        <br />
        <?php
            echo '<ul>';
            //print("<td>" . $position["symbol"] . "</td>");
            echo "My current job Estimated Print Time:     ";
            echo("<li>" . var_export($_SESSION['job']['job']['estimatedPrintTime']) . "</li>");
            echo "My current job Last Print Time:        ";
            echo("<li>" . var_export($_SESSION['job']['job']['lastPrintTime']) . "</li>");
            echo "My current job is Completed:        ";
            echo("<li>" . var_export($_SESSION['job']['progress']['completion']) . "</li>");
            echo "My current job Print Job:        ";
            print("<li>" . var_export($_SESSION['job']['progress']['printTime']) . "</li>");
            echo "My current job Print Time Left:        ";
            print("<li>" . var_export($_SESSION['job']['progress']['printTimeLeft']) . "</li>");
            // echo "My printer is currently ready:        ";
            // print("<li>" . var_export($_SESSION['job']['state']['flags']['ready']) . "</li>");
            // echo "My printer is currently in operation:        ";
            // print("<li>" . var_export($_SESSION['printer_state']['temperature']['bed']['actual']) . "</li>");
            // var_export($_SESSION['printer_state']['state']['flags']['error']);
            // var_export($_SESSION['printer_state']['state']['flags']['operational']);
            // var_export($_SESSION['printer_state']['state']['flags']['paused']);
            // var_export($_SESSION['printer_state']['state']['flags']['printing']);
            // var_export($_SESSION['printer_state']['state']['flags']['ready']);
            //var_export($_SESSION['printer_state']['state']['flags']['sdready']);
            //JSON.stringify($_SESSION['printer_state']['state']['flags']['error']);
            //echo print_r($_SESSION['printer_state']);
            echo '</ul>';
            // echo '<ul>';
            // echo print_r($_SESSION['job'], true);
            // echo '</ul>';
        ?>
        <br />
        <br />
    </tbody>

        <fieldset>
            <div class="control-group">
                <input autofocus name="email:" placeholder="Email:" type="text"/>
            </div>
            <br/>
            <div class="control-group">
                <button type="submit" class="btn btn-success">Send Email</button>
            </div>
        </fieldset>
        <br />
        <br />
    
</table>