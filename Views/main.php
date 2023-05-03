<div id="card-container" class="container">
    <?php
        foreach($movies as $singleMovie){
            ?>
            <div class="container">
            <div class="card" style="width: 18rem;">
            <div class="card-body">

                <img class="card-cover" src="<?php echo $singleMovie->img?>" alt="cover">
                <h5 class="card-title">
                    <?php echo $singleMovie->title ?>
                </h5>
                <h6>
                    <?php echo $singleMovie->director ?>
                </h6>
                <p class="card-text">
                    <?php echo $singleMovie->year ?> 
                </p>
                <strong>Cast:</strong> <br>
                <p>
                    <?php echo $singleMovie->actors ?>
                </p>
                <p>
                    <?php echo $singleMovie->duration ?>
                </p>
                <p>
                    <?php echo implode(', ', $singleMovie->genres) ?>
                </p>
                <p>
                    <?php echo $singleMovie->audience ?>
                </p>
                
                <a href="#" class="btn btn-primary">Go to details</a>
            </div>
            </div>
            </div>
            <?php
        }
    ?>
</div>

