<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Form</title>
    
</head>

<body>
    <p class="btnNavi"><?= anchor('viewimages', 'View Uploaded Images') ?></p><br>


    <?php foreach ($errors as $error) : ?>
        <li><?= esc($error) ?></li>
    <?php endforeach ?>

    <?= form_open_multipart('upload/upload') ?>

    
    <label>Image: </label>
    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="Upload" />

    </form>

</body>

</html>