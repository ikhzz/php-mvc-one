<div class=content>

  <div class=contentHead>

    <h2>Up Coming</h2>
    <form action="<?=BASE_URL?>/home/upcoming" method="post" id=movieSearch>

      <label for="page">Page :</label>
      <select name="page" id="page">
        <?php if((isset($data['page']))) : ?>
          <option value="<?=$data['page']?>"><?=$data['page']?></option>
        <?php endif;  ?>
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
          <date><?= $datas['release_date']?></date>
        <?php elseif(array_key_exists('first_air_date',$datas)) :?>
          <date><?= $datas['first_air_date']?></date>
        <?php endif; ?>
      </div>
      <input type="hidden" class="backdrop" data-img="<?=IMG_URL.'/'.$datas['backdrop_path']?>">
      <input type="hidden" class="overview" data-ovw="<?=$datas['overview']?>">
                        
    </div>
  <?php endforeach;?>

    <div class="lightbox">

      <div class="lightboxContent">
        <div class="lightback" ></div>
        <div class="lightboxClose" onclick="togglelightbox()"></div>
        <div class="lightImg"><img src="" alt="lighbox-img" onclick="nextport()"></div>
        <div class="lightboxCaption">
          <h2></h2>
          <date></date>
          <div class="lightPerc">
            <svg>
              <circle cx=50 cy=50 r=40></circle>
              <circle  cx=50 cy=50 r=40></circle>
            </svg>
            <div class="number">
              <p class=vote><?= $datas['vote_average']?></p>
            </div>
          </div>
          <p>Overview</p>
          <overview></overview>
        </div>
      </div>

    </div>

</div>