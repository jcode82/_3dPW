<ul class="nav nav-pills nav-justified">
    <li><a href="index.php">Home</a></li>
    <li><a href="get.php">Printer</a></li>
    <li><a href="job.php">Job</a></li>
    <li class="active"><a href="files.php">Files</a></li>
    <li><a href="live.php">Live</a></li>
</ul>

<br />

<table class="table table-striped">
    <tbody>
        <br />
        <br />
        <?php
            echo '<ul>';
            echo "My current job file:     ";
            echo("<li>" . var_export($_SESSION['files']['files']) . "</li>");
            echo '</ul>';
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