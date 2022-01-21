<!DOCTYPE html>
<html lang="en">

<head>
    <title>Uploaded Images</title>
    
</head>

<body>
    <p class="btnNavi"><?= anchor('upload', 'Upload File') ?></p>

    <?php foreach ($result->getResult() as $image) :
        //$file = $this->request->getFile($image->Title); 
    ?>
        <div class="imageDiv">
            <a target="_blank" href="<?php echo base_url($image->image); ?>">
                <img height="100px" width="100px" src="<?php echo base_url($image->image); ?>">
            </a>
            
        </div>
    <?php endforeach; ?>

</body>

</html>