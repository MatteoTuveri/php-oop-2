<div class="col-3">
    <div class="card" style="width: 18rem;">
<<<<<<< HEAD
        <img src="<?= $item['img'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
=======
        <img src="<?= $img ?>" class="card-img-top" alt="<?= $title ?>">
>>>>>>> 5abdbb4bf282bbfa932328d901865e516cc5e5d9
        <div class="card-body">
            <h3 class="card-title">
                <?= $item['title'] ?>
            </h3>
<<<<<<< HEAD
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
=======
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
>>>>>>> 5abdbb4bf282bbfa932328d901865e516cc5e5d9
                </p>
            <?php } ?>
            <div class="d-flex justify-content-between">
                <div>
<<<<<<< HEAD
                    <?php if(isset($item['type'])) { ?>
                        <p class="card-text">
                            <?= $item['type'] ?>
=======
                    <?php if(isset($type)) { ?>
                        <p class="card-text">
                            <?= $type ?>
>>>>>>> 5abdbb4bf282bbfa932328d901865e516cc5e5d9
                        </p>
                    <?php } ?>
                </div>
                <div>
                    <div class="d-flex align-items-center">
<<<<<<< HEAD
                        <?php if(isset($item['prezzoPieno'])) { ?>
                            <p class="card-text me-3 <?= ($item['sconto']===0)?'':'text-decoration-line-through' ?>">
                                <?= $item['prezzoPieno'].'$' ?>
                            </p>
                        <?php } ?>
                        <?php if(isset($item['sconto'])) { ?>
                            <p class="card-text badge text-bg-danger <?= ($item['sconto']===0)?'d-none':'' ?>">
                                <?='-'. $item['sconto'].'%' ?>
=======
                        <?php if(isset($prezzoPieno)) { ?>
                            <p class="card-text me-3 <?= ($sconto===0)?'':'text-decoration-line-through' ?>">
                                <?= $prezzoPieno.'$' ?>
                            </p>
                        <?php } ?>
                        <?php if(isset($sconto)) { ?>
                            <p class="card-text badge text-bg-danger <?= ($sconto===0)?'d-none':'' ?>">
                                <?='-'. $sconto.'%' ?>
>>>>>>> 5abdbb4bf282bbfa932328d901865e516cc5e5d9
                            </p>
                        <?php } ?>
                    </div>

<<<<<<< HEAD
                    <?php if(isset($item['prezzo'])) { ?>
                        <p class="card-text <?= ($item['sconto']===0)?'d-none':'' ?>">
                            <?= $item['prezzo'].'$' ?>
=======
                    <?php if(isset($prezzo)) { ?>
                        <p class="card-text <?= ($sconto===0)?'d-none':'' ?>">
                            <?= $prezzo.'$' ?>
>>>>>>> 5abdbb4bf282bbfa932328d901865e516cc5e5d9
                        </p>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>