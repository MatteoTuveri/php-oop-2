<div class="col-3">
    <div class="card" style="width: 18rem;">
        <img src="<?= $item['img'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
        <div class="card-body">
            <h3 class="card-title">
                <?= $item['title'] ?>
            </h3>
            <?php if(isset($item['playTime'])) { ?>
                <p class="card-text">
                    Tempo di gioco:
                    <?= ' '.$item['playTime'] ?>
                </p>
            <?php } ?>
            <?php if(isset($item['overview'])) { ?>
                <p class="card-text">
                    <?= $item['overview'] ?>
                </p>
            <?php } ?>
            <?php if(isset($item['description'])) { ?>
                <p class="card-text">
                    <?= $item['description'] ?>
                </p>
            <?php } ?>
            <?php if(isset($item['vote'])) { ?>
                <p class="card-text">
                    <?= $item['vote'] ?>
                </p>
            <?php } ?>
            <?php if(isset($item['pages'])) { ?>
                <p class="card-text">
                    Numero di pagine:
                    <?= ' '.$item['pages'] ?>
                </p>
            <?php } ?>
            <?php if(isset($item['genre'])) { ?>
                <p class="card-text">
                    <?= $item['genre'] ?>
                </p>
            <?php } ?>
            <?php if(isset($item['categories'])) { ?>
                <p class="card-text">
                <?php foreach($item['categories'] as $categorie){
                        echo '<span class="me-1">'.$categorie.','.'</span>';
                    }
                    ?>
                </p>
            <?php } ?>
            <?php if(isset($item['authors'])) { ?>
                <p class="card-text">
                    <?php foreach($item['authors'] as $author){
                        echo '<span class="me-1">'.$author.','.'</span>';
                    }
                    ?>
                </p>
            <?php } ?>
            <div class="d-flex justify-content-between">
                <div>
                    <?php if(isset($item['type'])) { ?>
                        <p class="card-text">
                            <?= $item['type'] ?>
                        </p>
                    <?php } ?>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <?php if(isset($item['prezzoPieno'])) { ?>
                            <p class="card-text me-3 <?= ($item['sconto']===0)?'':'text-decoration-line-through' ?>">
                                <?= $item['prezzoPieno'].'$' ?>
                            </p>
                        <?php } ?>
                        <?php if(isset($item['sconto'])) { ?>
                            <p class="card-text badge text-bg-danger <?= ($item['sconto']===0)?'d-none':'' ?>">
                                <?='-'. $item['sconto'].'%' ?>
                            </p>
                        <?php } ?>
                    </div>

                    <?php if(isset($item['prezzo'])) { ?>
                        <p class="card-text <?= ($item['sconto']===0)?'d-none':'' ?>">
                            <?= $item['prezzo'].'$' ?>
                        </p>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>