<div class=content>
        <div class=contentHead>
                <h2>Top Rated</h2>
                <form action="<?=BASE_URL?>/home" method="post" id=movieSearch>
                        <label for="page">Page :</label>
                        <select name="page" id="page">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                        </select>
                        <label for="type">Media Type :</label>
                        <select name="type" id="type">
                                <option value="movie">Movie</option>
                                <option value="tv">Tv</option>
                        </select> 
                        <input type="submit" form=movieSearch name=movieSearch>
                </form>
        </div>
        <?php $i=0 ?>
        <?php foreach($data['api']['results'] as $datas) : ?>
                <div class=data>
                        <?php if($datas['poster_path'] == null) :?>
                        <img src="https://source.unsplash.com/random/403x40<?=$i?>" alt="">
                        <?php $i++ ?>
                        <?php else :?>
                        <img src="<?=IMG_URL.'/'.$datas['poster_path']?>" alt="">
                        <?php endif ;?>
                        <div class="percent">
                                <svg>
                                        <circle cx=17 cy=17 r=17></circle>
                                        <circle  cx=17 cy=17 r=17></circle>
                                </svg>
                                <div class="number">
                                        <p class=vote><?= $datas['vote_average']?></p>
                                </div>
                        </div>
                        <div class=desc>
                                <?php if(array_key_exists('title',$datas)) : ?>
                                <h4><?= $datas['title']?></h4>
                                <?php elseif(array_key_exists('name',$datas)) :?>
                                <h4><?= $datas['name']?></h4>
                                <?php endif; ?>
                                <?php if(array_key_exists('release_date',$datas)) : ?>
                                <p><?= $datas['release_date']?></p>
                                <?php elseif(array_key_exists('first_air_date',$datas)) :?>
                                <p><?= $datas['first_air_date']?></p>
                                <?php endif; ?>
                        </div>
                        <p><?php  //$datas['overview']?></p>
                        
                </div>
        <?php endforeach;?>
        <div class="lightbox">
                <div class="lightportContent" style="background-image: url(<?=IMG_URL.'/'.$datas['backdrop_path']?>)">
                        <div class="lightportClose" onclick="togglelightbox()"></div>
                        <img src="<?php// IMG_URL.'/'.$datas['poster_path']?>" alt="lighbox-img" onclick="nextport()">
                        <div class="lightportCaption">
                                <p class="text">Web Development</p>
                                <p class="counter">1 of 6</p>
                        </div>
                </div>
                <div class="lightportControl">
                        <div class="prev" onclick="prevport()">&#8678;</div>
                        <div class="next" onclick="nextport()">&#8680;</div>
                </div>
        </div>
</div>