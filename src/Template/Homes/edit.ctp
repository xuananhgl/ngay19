

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'zogravity';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('z0gravity2.css') ?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="main">
        
          <div id ="header">
            <div class="header_menu">
                <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                    </div>
                   <div class="bar_mobile"> 
                                    <i class="fa-solid fa-bars js-open-bar"></i>
                        
                                     
                                    <div class="list_menu js-bar">
                                        <i class="fa-solid fa-xmark js-close-bar"></i>
                                        <img src="/img/logo/z0_Gravity_Logo_Couleur.png" alt="" class="none">
                                        <div class="l"><a href="">ENTREPRISES</a></div>
                                        <div class="l"><a href="">SECTEUR PUBLIC</a></div>
                                        <div class="l"><a href="">À PROPOS</a></div>
                                        <div class="l"><a href="">CONTACT</a></div>
                                        <div class="l"><a href="">BLOG</a></div>
                                        <div class="l none"><a href="">login</a>
        
                                        </div>
                            </div>
                        </div>
            </div>
            <?= $this->Html->script('slider.js') ?>
            <!-- <script>
                    const openBar = document.querySelector('.js-open-bar')
                    const closeBar = document.querySelector('.js-close-bar')
                    const listBar = document.querySelector('.js-bar')
                    function showBar (){
                        listBar.classList.add('open1')
                    }
                    function hideBar (){
                        listBar.classList.remove('open1')
                    }

                    openBar.addEventListener('click', showBar)
                    closeBar.addEventListener('click', hideBar)

            </script> -->

        </div>
        
<!-- ====================================================================================================================== -->
<div id="lider">
    <div class="list_slider">
    
    <div class="list_item">
        <div class="header_container">
            
                <?= $this->Html->image('D1.jpg') ?>
                <div class="item_mute"><i class="fa-solid fa-volume-xmark"></i></div>
  <?=  $this->Form->create($header);?>
            
                <div class="container_title">
                        <h1 class="font_blue"> <?=  $this->Form->control('title', ['rows' => '3']);?></h1>
                
                
                <div class="container_about">
                    <p>Avec zO Gravity, descouvrela simplicité et la performance d'une gestion de projet collaborative.</p>
                </div>
                <div class="container_button">
                     <a href="">Descouvrez zO Gravity</a>
                </div>
                <div class="container_item">
                    <i class="fa-solid fa-circle-play"></i><div class="item_vd"><p>voir la vidéo</p></div>
                </div>
            </div>
            
    
      




                          
            <div class="slide_box1"></div>
            <div class="slider_content">
                <div class="slider_titel"><p>PRESSE</p>
                    <div class="next_pre">
                            <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><h1>Forbes</h1></div>
                    <div class="slider_about">Il y avait tout d’abord la sécurité, 
                    l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.</div>
                    <div class="slider_note">
                        <div class="note">Stéphane Touchet<br><a>PMO service client Orange Sud-Ouest</a></div> 
                        <div class="cycle"><a>Lire l’article <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
            </div>
            
            
            
     </div>                               
    
    
    </div>

    <!-- ============== -->

    <div class="list_item br_toi">
        <div class="header_container">
            
                <?= $this->Html->image('d2.png') ?>
                <div class="item_mute"><i class="fa-solid fa-volume-xmark"></i></div>

            
                <div class="container_title ">
                    <h1 class="font_white">Fédérateur.<br>
                        Personnalisé.<br>
                        Souple & adapté.</h1>
                
                
                <div class="container_about ">
                    <p class="font_white">Avec zO Gravity, descouvrela simplicité et la performance d'une gestion de projet collaborative.</p>
                </div>
                <div class="container_button">
                     <a href="">Descouvrez zO Gravity</a>
                </div>
                <div class="container_item">
                    <i class="fa-solid fa-circle-play font_white"></i><div class="item_vd"><p class="font_white">voir la vidéo</p></div>
                </div>
            </div>
            
    
      




                          
            <div class="slide_box1"></div>
            <div class="slider_content">
                <div class="slider_titel"><p>PRESSE</p>
                    <div class="next_pre">
                            <div class="slider_next next" ><i class="fa-solid fa-angle-left"></i> </div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><h1>Forbes</h1></div>
                    <div class="slider_about">Il y avait tout d’abord la sécurité, 
                    l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.</div>
                    <div class="slider_note">
                        <div class="note">Stéphane Touchet<br><a>PMO service client Orange Sud-Ouest</a></div> 
                        <div class="cycle"><a>Lire l’article <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
            </div>
            
            
            
     </div>                               
    
    
    </div>

    <!-- ============ -->
    <div class="list_item br_blue">
        <div class="header_container">
            
                    <?= $this->Html->image('d3.jpg') ?>
                <div class="item_mute"><i class="fa-solid fa-volume-xmark"></i></div>

            
                <div class="container_title">
                        <h1 class="font_white">Fédérateur.<br>
                        Personnalisé.<br>
                        Souple & adapté.</h1>
                
                
                <div class="container_about">
                    <p class="font_white">Avec zO Gravity, descouvrela simplicité et la performance d'une gestion de projet collaborative.</p>
                </div>
                <div class="container_button">
                     <a href="">Descouvrez zO Gravity</a>
                </div>
                <div class="container_item">
                    <i class="fa-solid fa-circle-play font_white"></i><div class="item_vd"><p class="font_white">voir la vidéo</p></div>
                </div>
            </div>
            
    
      




                          
            <div class="slide_box1"></div>
            <div class="slider_content">
                <div class="slider_titel"><p>PRESSE</p>
                    <div class="next_pre">
                            <div class="slider_next next" ><i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><h1>Forbes</h1></div>
                    <div class="slider_about">Il y avait tout d’abord la sécurité, 
                    l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.</div>
                    <div class="slider_note">
                        <div class="note">Stéphane Touchet<br><a>PMO service client Orange Sud-Ouest</a></div> 
                        <div class="cycle"><a>Lire l’article <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
            </div>
            
            
            
     </div>                               
    
    
    </div>
    </div>

   
<script>
$(document).ready(function(){
$('.list_slider').slick({
 prevArrow: $('.prev'),
  nextArrow: $('.next'),
}

);
});;
</script>

</div>

   
         

     <!-- ========================================================================================================================================    -->
         
        <div id="content">
            <div class="content_pfc">
                <div class="content_pfc_titel">POUR FAIRE COURT.</div>
                <div class="content_pfc_text">
                <h4>    Z0 Gravity est un logiciel de gestion multi-projets : </h4>
                    quelle que soit leur complexité,
                     vous gérez facilement les plannings,
                     les budgets et les ressources humaines de vos projets par un 
                     usage transversal et collaboratif.</div>
            </div>
            <div class="content_layout">
                <div class="content_layot_text">
                    <div class="fr"><h1>Notre engagement:</h1></div>
                    <div class="p"><p>C'est aider tout type d'oranisation á resaliser ses projest avec un seul mot d'order :</p></div>
                    <div class="last"><h1>sim-pli-ci-té!</h1></div>
                    
                </div>
                <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                <div class="content_layot_img"><?= $this->Html->image('m1.jpg') ?></div>
            </div>
            <div class="content_about">
                <div class="content_about_title">Découvrez l’univers z0 Gravity</div>
                <div class="content_about_text">Plannings, budgets, calendriers…
                     En un clin d'œil, vous avez une vision globale et stratégique 
                    de l'avancée de vos projets en temps réel !
                </div>
                <div class="conteant_about_button"><i class="fa-solid fa-play"></i> <a href="">Présentation vidéo</a></div>
            </div>
            <div class="content_app">
            <?= $this->Html->image('app.jpg') ?>
            </div>   

        </div>



        <div id="news">
            <div class="news1">
                <div class="news_vous_title">Vous êtes…</div>
                <div class="news_vous">
                
                    <div class="news_vous_go">
                        <div class="vous_go_item"><i class="fa-solid fa-file-signature" style="color:#049BF7 ;"></i></div>
                        <div class="vous_go_about"><h2>Une entreprise</h2><p> Jouez collectif :<br> fédérez vos équipes autour d'un objectif commun.</p></div>
                        <div class="vous_go_button"><a href="" style="color: #fff; text-decoration: none;">3,2,1… Go !</a></div>
                    </div>
                    <div class="news_vous_comment">
                        <div class="vous_comment_item"><i class="fa-solid fa-hospital" style="color:#FF7D66 ;"></i></div>
                        <div class="vous_comment_about"><h2>Une collectivité</h2><p>Rassemblez les acteurs de <br>votre projet via un logiciel commun !</p></div>
                        <div class="vous_comment_button"><a href="" style="color: #fff; text-decoration: none;">Découvrez comment</a></div>
                    </div>
                    <div class="news_vous_commemcons">
                        <div class="vous_commemcons_item"><i class="fa-solid fa-map-location-dot" style="color:#FFD051 ;"></i></div>
                        <div class="vous_commemcons_about"><h2>Un promeneur</h2><p>égaré Bienvenue !<br> Installez-vous et laissez-vous guider.</p></div>
                        <div class="vous_commemcons_button"><a href="" style="color: #fff; text-decoration: none;">Commençons par ici</a></div>
                    </div>
                </div>
            </div>
            <div class="news_nos">
                <div class="nos_title"><h1>Nos articles</h1></div>
                <div class="nos_content">
                    <div class="conten_nos1">
                        <div class="conten_nos1_img"><?= $this->Html->image('new2.jpg') ?></div>
                        <div class="conten_nos1_caption">Comment choisir<br> votre logiciel de<br> gestion de projet</div>
                        
                        <div class="conten_nos1_time">
                            <div class="conten_nos1_note">ENTREPRISES</div>15 min
                        </div>
                        <div class="conten_nos1_about">Bien choisir son logiciel de
                             gestion de projet ou son outil de gestion de projet est une question cruciale pour les entreprises.</div>
                        <div class="conten1 nos_btn"><a href="">Lire l’article</a></div>
                    </div>
                    <div class="conten_nos2">
                        <div class="conten_nos2_img"><?= $this->Html->image('news3.jpg') ?></div>
                        <div class="conten_nos2_char">
                            <div class="conten_nos2_caption">Logiciel de gestion de projet secteur public</div>
                            
                            <div class="conten_nos2_time">
                                <div class="conten_nos2_note">SECTEUR PUBLIC</div>10 min
                            </div>
                            <div class="conten_nos2_about">z0 Gravity est un logiciel de gestion de projet développé avec et pour des collectivités territoriales. Grâce à son interface simple et son tableau de bord embarqué, ce logiciel de gestion de projet secteur public permet de répondre efficacement aux contraintes de temps et de budget des collectivités territoriales.</div>
                            <div class="conten2 nos_btn"><a href="">Lire l’article</a></div>
                        </div>
                    </div>
                    <div class="conten_nos4">
                        <div class="conten_nos4_img"></div>
                        <div class="conten_nos4_caption">Logiciel de gestion de projet en ligne SaaS</div>
                        
                        <div class="conten_nos4_time">
                            <div class="conten_nos4_note">PMO</div>8 min
                            
                        </div>
                        <div class="conten_nos4_about">La gestion d’un projet implique en réalité de réaliser une succession de tâches très différentes pour l’entreprise et qu’il faut, bien souvent, mener de front : planification, répartition des ressources, des tâches, activités de reporting, suivi de l’avancée des projets, de la consommation des budgets, etc.</div>
                        <div class="conten4 nos_btn"><a href="">Lire l’article</a></div>
                    </div>

                    <div class="conten_nos3">
                        <div class="conten_nos3_img"></div>
                        <div class="conten_nos3_caption">7 conseils clés pour bien s’équiper d’un outil de gestion de projet</div>
                        
                        <div class="conten_nos3_time">
                            <div class="conten_nos3_note">CLIENT</div>12 min
                        </div>
                        <div class="conten_nos3_about">Vous avez décidé qu’il était temps d’investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivité et en efficacité dans la gestion de vos affaires courantes et, par la même occasion, en faire profiter tous les services ? C’est une très bonne idée.</div>
                        <div class="conten3 nos_btn"><a href="">Lire l’article</a></div>
                    </div>
                </div>
                <div class="button_content1 button"><a href="">Voir tous les articles</a></div>
                <div class="conten_titlel_last">
                    <h1>Assez parlé de nous.</h1>
                      <p>Parlez-nous de vous !</p>
                </div>
                <div class="button_content2 button"><a href="">On discute !</a></div>
            </div>
        </div>


        <div id="footer">
            <div class="footer_menu">
                <div class="footer_logo">
                    <div class="logo_img"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt=""></div>
                    <div class="logo_slogan">Ensemble, on va plus loin.</div>
                </div>
                <div class="footer_list">
                    <ul>
                        <li>Entreprises</li>
                        <li>Collectivités</li>
                        <li>À propos</li>
                        <li>Contact</li>
                        <li>Blog</li>
                    </ul>
                </div>
                <div class="footr_infor">
                    <div class="infor_img">
                        <div class="information">SUIVEZ-NOUS</div>
                        <div class="img_info"><i class="fa-brands fa-facebook-f"></i>
                                              <i class="fa-brands fa-twitter"></i>
                                              <i class="fa-brands fa-vimeo-v"></i>
                        </div>
                    </div>
                    <div class="setting button "><button href="" class="js-open-model"><i class="fa-solid fa-earth-asia"> </i>changer de région</button></div>
                </div>
            </div>
            <div class="footer_last">
                
                    <a>© 2019 Globalsi SAS</a>
                     <a>Plan du site</a>
                    <a>Contactez-nous</a>
                    <a>Mentions légale</a>
            </div>
    </div>
        <div class="model js-model">
            <div class="set_changer">
                <div class="chenger_tille">
                    <h2>Changer de région</h2>
                    <i class="fa-solid fa-xmark js-close-model" style="cursor: pointer;"></i>
                </div>
                <div class="chenger_about">
                    Si vous sélectionnez une autre région,
                     la langue et le contenu de z0gravity.com changeront.
                </div>
                <div class="langue">
                    <ul>
                    <div class="ul">
                        <li>Deutsch </li>     
                        <li>English </li>
                        <li>Español </li>
                    </div>
                    <div class="ul">
                        <li>Français </li>
                        <li>Nederlands</li>
                        <li>Polski </li>
                        
                    </div>
                    <div class="ul">
                        <li>Русский</li>
                        <li>Bokmål</li>
                        <li>Ελληνικά </li>
                    </div>
                    <div class="ul">
                        <li>Português </li>
                        <li>日本語</li>
                        <li>繁體中文</li>
                    </div>
                    </ul>
                </div>
            </div>

        </div>
        <?= $this->Html->script('changer.js') ?>
        <!-- <script>
                const openMdal = document.querySelector('.js-open-model')
                const settingChanger = document.querySelector('.js-model')
                const closeMdal = document.querySelector('.js-close-model')
                function showChanger(){
                    settingChanger.classList.add('open')
                }
                function hideChanger(){
                    settingChanger.classList.remove('open')
                }
                openMdal.addEventListener('click', showChanger)
                closeMdal.addEventListener('click', hideChanger)

        </script> -->
  
</body>
</html>

</nav>
<div class="articles form large-9 medium-8 columns content">
  <?= $this->Form->create($header) ?>
  <fieldset>
    <legend><?= __('Edit header') ?></legend>
    
    <?=  $this->Form->create($header);?>
     <?=  $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
              <legend>Display</legend>
  
      <?=  $this->Form->control('bnt');?>
     <?=  $this->Form->control('bnt_video');?>
             <legend>Dynamic-content</legend>
  
     <?=  $this->Form->input('about', ['rows' => '1']);?>
             
    
</fieldset>
 
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>

                                        
  <?= $this->Form->create($article) ?>
  <fieldset>
    <legend><?= __('Edit article') ?></legend>
    
    <?=  $this->Form->create($article);?>
   
     
             <legend>Dynamic-content</legend>
<?=  $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
     <?=  $this->Form->control('title');?>

     <?=  $this->Form->input('img');?>
     <?=  $this->Form->input('body');?>
     <?=  $this->Form->input('about');?>
     
    
</fieldset>

      
   
  
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>