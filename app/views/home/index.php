
<h1>Hello world</h1>
<button class=btn>boom</button>
<?php var_dump($data) ?>
<?php foreach($data['results'] as $datas) : ?>
        <?php //if(array_key_exists('title',$datas)) : ?>
        <h4><?php// 'helelele'?></h4>
        <?php //elseif(array_key_exists('name',$datas)) :?>
        <h4><?php //$datas['name']?></h4>
        <?php //endif; ?>
<?php endforeach;?>
<div class=test></div>