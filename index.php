<?php
include ('includes/header.php');
?>
    <h1>Newsletter Upload Page</h1>
    <div id="signIn">Sign In</div>
<?php include ('includes/footer.php'); ?>


    <!-- This code is commented out and may be deleted unless needed later
    <div class="uploadForm">
        <h2>Upload stuff in this box</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <select name="club">
                <option value="nonePicked">Which Club?</option>
                <option value="eagles">Eagles</option>
                <option value="elks">Elks</option>
                <option value="legion">Legion</option>
                <option value="moose">Moose</option>
                <option value="VFW">VFW</option>
            </select>
            <input type="text" name="number" placeholder="Club Number" />
            <select name="month">
                <option value="nonePicked">Issue Month?</option>
                <option value="jan">January</option>
                <option value="feb">February</option>
                <option value="mar">March</option>
                <option value="april">April</option>
                <option value="may">May</option>
                <option value="jun">June</option>
                <option value="jul">July</option>
                <option value="aug">August</option>
                <option value="sep">September</option>
                <option value="oct">October</option>
                <option value="nov">November</option>
                <option value="dec">December</option>
            </select>
                Select newsletter PDF to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
        </form>
        This code is commented out and may be deleted unless needed later -->