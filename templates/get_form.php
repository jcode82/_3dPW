<ul class="nav nav-pills nav-justified">
    <li class="active"><a href="index.php">Home</a></span></li>
    <li><a href="get.php">Printer</a></li>
    <li><a href="job.php">Job</a></li>
    <li><a href="files.php">Files</a></li>
    <li><a href="live.php">Live</a></li>
</ul>

<br />

<form action="get.php" method="post">
    <fieldset>
        <br/>
        <div class="control-group">
            <button type="submit" class="btn">Get Printer State</button>
        </div>
         <form action="get.php" method="post">
        </form>
        <br />
        <br />
         <form action="job.php" method="post">
            <div class="control-group">
                <button type="submit" class="btn">Current Job</button>
            </div>
        </form>
        <br />
        <br />
        <form action="files.php" method="post">
            <div class="control-group">
            <button type="submit" class="btn">Get My Files</button>
        </div>
        </form>
        <br />
        <br />

    <!--     <fieldset>
            <div class="control-group">
                <input autofocus name="email:" placeholder="Email:" type="text"/>
            </div>
            <br/>
            <div class="control-group">
                <button type="submit" class="btn btn-success">Send Email</button>
            </div>
        </fieldset>
     -->

    </fieldset>
    <br />
</form>
