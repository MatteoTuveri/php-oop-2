<div class="col-3">
    <div class="card" style="width: 18rem;">
        <img src="<?= $img ?>" class="card-img-top" alt="<?= $title ?>">
        <div class="card-body">
            <h3 class="card-title">
                <?= $title ?>
            </h3>
            <?php if(isset($playTime)) { ?>
                <p class="card-text">
                    Tempo di gioco:
                    <?= ' '.$playTime ?>
                </p>
            <?php } ?>
            <?php if(isset($overview)) { ?>
                <p class="card-text">
                    <?= $overview ?>
                </p>
            <?php } ?>
            <?php if(isset($description)) { ?>
                <p class="card-text">
                    <?= $description ?>
                </p>
            <?php } ?>
            <?php if(isset($vote)) { ?>
                <p class="card-text">
                    <?= $vote ?>
                </p>
            <?php } ?>
            <?php if(isset($pages)) { ?>
                <p class="card-text">
                    Numero di pagine:
                    <?= ' '.$pages ?>
                </p>
            <?php } ?>
            <?php if(isset($genre)) { ?>
                <p class="card-text">
                    <?= $genre ?>
                </p>
            <?php } ?>
            <?php if(isset($categories)) { ?>
                <p class="card-text">
                    <?= $categories ?>
                </p>
            <?php } ?>
            <?php if(isset($authors)) { ?>
                <p class="card-text">
                    <?= $authors ?>
                </p>
            <?php } ?>
            <div class="d-flex justify-content-between">
                <div>
                    <?php if(isset($type)) { ?>
                        <p class="card-text">
                            <?= $type ?>
                        </p>
                    <?php } ?>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <?php if(isset($prezzoPieno)) { ?>
                            <p class="card-text me-3 <?= ($sconto===0)?'':'text-decoration-line-through' ?>">
                                <?= $prezzoPieno.'$' ?>
                            </p>
                        <?php } ?>
                        <?php if(isset($sconto)) { ?>
                            <p class="card-text badge text-bg-danger <?= ($sconto===0)?'d-none':'' ?>">
                                <?='-'. $sconto.'%' ?>
                            </p>
                        <?php } ?>
                    </div>

                    <?php if(isset($prezzo)) { ?>
                        <p class="card-text <?= ($sconto===0)?'d-none':'' ?>">
                            <?= $prezzo.'$' ?>
                        </p>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>