<div class=content>
        <div class=contentHead>
                <button>Boom</button>
                <button>Boom 2</button>
                <div class="percent">
                    <svg>
                        <circle cx=40 cy=40 r=40></circle>
                        <circle  cx=40 cy=40 r=40></circle>
                    </svg>
                    <div class="number">
                        <h2>90<span>%</span></h2>
                    </div>
                </div>
        </div>
        <?php $i=0 ?>
        <?php foreach($data['api']['results'] as $datas) : ?>
                <div class=data>
                        <?php if(array_key_exists('title',$datas)) : ?>
                        <h4><?= $datas['title']?></h4>
                        <?php if($datas['poster_path'] == null) :?>
                        <img src="https://source.unsplash.com/random/403x40<?=$i?>" alt="">
                        <?php $i++ ?>
                        <?php else :?>
                        <img src="<?=IMG_URL.'/'.$datas['poster_path']?>" alt="">
                        <?php endif ;?>
                        <?php elseif(array_key_exists('name',$datas)) :?>
                        <h4><?= 'helelele'?></h4>
                        <img src="<?=IMG_URL.'/'.$datas['poster_path']?>" alt="">
                        <?php endif; ?>
                        <p><?= $datas['release_date']?></p>
                        <p><?php  //$datas['overview']?></p>
                        <p><?= $datas['vote_average']?></p>
                </div>
        <?php endforeach;?>
</div>