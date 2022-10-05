
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (title) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (title) Cake Software Foundation, Inc. (https://cakefoundation.org)
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

        </div>




<!-- ====================================================================================================================== -->
<div id="lider">
    <div class="list_slider">

                        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



  <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>

   <script>
$(".ui-widget-content").ready(function(){
    $(".ui-widget-content").mouseup(function(event){
        $(".sp1").text(event.pageY);

      });

  $(".ui-widget-content").mouseup(function(event){
    $(".sp3").text(event.pageX);
  });

});
  </script>
   <script>
  $( function() {
    $( "#draggable2" ).draggable();
  } );
  </script>

   <script>
$(".ui-widget-content2").ready(function(){
    $(".ui-widget-content2").mouseup(function(event){
        $(".sp5").text(event.pageY);

      });

  $(".ui-widget-content2").mouseup(function(event){
    $(".sp4").text(event.pageX);
  });

});
  </script>






                        <div class="header_container">

                            <p id="aa"></p>

                                <?= $this->Html->image('D1.jpg') ?>
                                <div class="item_mute"><i class="fa-solid fa-volume-xmark"></i></div>











                                <div class="container_title" >
                                     <div id="draggable" class="ui-widget-content" style="background:#FFF; width:0px;   height: 250px;">


                                        <h1 class="font_blue"> <p id="dd"></p></h1>

                               </div>
                                <div id="draggable2" class="ui-widget-content2" style="background:#FFF; width:0px;   height: -100px;">
                                <div class="container_about"><p id="ss"></p>



                                </div>

                                </div>
                                <div class="container_button">
                                 <p id="ff"></p>
                                </div>
                                <div class="container_item">
                                    <i class="fa-solid fa-circle-play"></i><div class="item_vd"><p id="gg"></p></div>
                                </div>

                                <div class="fom2">
                                <h2>From HEADERS</h2>

                                <form >
                                <input type="text"  name="id_headers" placeholder="id"><br>
                                <input type="text"  name="title"  placeholder="title"><br>
                                <input type="text"  name="about"  placeholder="about"><br>
                                <input type="text"  name="button"  placeholder="button"><br>
                                <input type="text"  name="button_video"  placeholder="button_video"><br>
                                <button id="create">add</button>
                                <button id="creat">edit</button>
                                <button onclick ="deleteData()">delete</button>
                                </form >

                                </div>





                                <script>

                                var courseApi ='http://localhost:8765/headersapi.json';
                                function start(){
                                      getPosts(renderPosts);
                                      createForm();
                                      editForm();

                                }
                                start();
                                function getPosts(callback){
                                      fetch(courseApi)
                                      .then(function(response){
                                          return response.json();

                                      })
                                      .then(callback);
                                }
                                function renderPosts(courses){
                                console.log(courses);
                                    document.getElementById("aa").innerHTML = courses.headers[0].id_headers;
                                    document.getElementById("ss").innerHTML = courses.headers[0].about;
                                    document.getElementById("dd").innerHTML = courses.headers[0].title;
                                    document.getElementById("ff").innerHTML = courses.headers[0].button;
                                    document.getElementById("gg").innerHTML = courses.headers[0].button_video;

                                      return;
                                }
                                function createForm(){
                                var createBtn = document.querySelector('#create');
                                createBtn.onclick =function(){

                                  var button = document.querySelector('input[name ="button"]').value;
                                  var button_video = document.querySelector('input[name ="button_video"]').value;
                                  var title = document.querySelector('input[name="title"]').value;
                                  var about = document.querySelector('input[name ="about"]').value;
                                  var id_headers = document.querySelector('input[name="id_headers"]').value;
                                  var data = {
                                      about:about,
                                      title:title,
                                      id_headers:id_headers,
                                      button:button,
                                      button_video:button_video,
                                  };
                                      var url = 'http://localhost:8765/headersapi.json';
                                  postData(url, data);
                                }
                                }
                                async function postData(url, data) {
                                const response = await fetch(url, {
                                      method: 'POST',
                                      headers: {
                                        'Content-Type': 'application/json'
                                      },
                                      body: JSON.stringify(data)
                                });
                                return response.json();
                                }
                                async function deleteData(id) {
                                      var id =  document.getElementById('aa').innerHTML;
                                      console.log(id);
                                      var url1 = 'http://localhost:8765/headersapi/'+ id +'.json';
                                      console.log(url1);

                                      const response = await fetch(url1, {
                                      method: 'DELETE',
                                      headers: {
                                        'Content-Type': 'application/json'
                                      },
                                });
                                       return response.json();

                                  }
                                function editForm(){
                                var createBtn = document.querySelector('#creat');
                                createBtn.onclick =function(){

                                  var button = document.querySelector('input[name ="button"]').value;
                                  var button_video = document.querySelector('input[name ="button_video"]').value;
                                  var title = document.querySelector('input[name="title"]').value;
                                  var about = document.querySelector('input[name ="about"]').value;
                                  var id_headers = document.querySelector('input[name="id_headers"]').value;
                                  var data = {
                                      about:about,
                                      title:title,
                                      id_headers:id_headers,
                                      button:button,
                                      button_video:button_video,


                                  };
                                console.log(data);
                                       var id =  document.getElementById('aa').innerHTML;
                                      var url = 'http://localhost:8765/headersapi/'+ id +'.json';
                                  editData(url, data);
                                }
                                }
                                async function editData(url, data) {
                                const response = await fetch(url, {
                                      method: 'PUT',
                                      headers: {
                                        'Content-Type': 'application/json'
                                      },
                                      body: JSON.stringify(data)
                                });
                                return response.json();
                                }

                                </script>

                            </div>









</div>



        <div class="slide_box1"></div>




            <div class="slider_content" ><p id="demo3"></p>
                <div class="slider_titel" id="demo1"> </p>

                    <div class="next_pre">
                            <div class="slider_next next" ><i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><p id="demo"></p></div>
                    <div class="slider_about"><p id="demo2"></p></div>
                    <div class="slider_note">
                        <div class="note"><p id="demo4"></p><br><p id="demo5"></p></div>
                        <div class="cycle"><a>Lire l’article <i class="fa-solid fa-arrow-up-right-from-square"></i></a><br> <p id="demo6"></p></div>
                     </div>



            </div>
            <div class="from1">




            <h2>From PRESS</h2>
            <form >
             <input type="text"  name="id" placeholder="id"><br>
             <input type="text"  name="title_pres"  placeholder="title"><br>
             <input type="text"  name="about_pres"  placeholder="about"><br>
             <input type="text"  name="author"  placeholder="author"><br>
             <input type="text"  name="dress"  placeholder="dress"><br>
             <input type="text"  name="link"  placeholder="link"><br>

             <button id="pres">add</button>
             <button id="pre">edit</button>
             <button onclick ="deletePres()">delete</button>
            </form >


            </div>
            <script>


            var presApi ='http://localhost:8765/homes.json';
            function start(){
                   getPre(renderPres);
                   createPres();
                   editPres();
            }
            start();
            function getPre(callback){
                   fetch(presApi)
                   .then(function(response){
                       return response.json();

                   })
                   .then(callback);
            }
            function renderPres(pre){
             console.log(pre);
                 document.getElementById("demo3").innerHTML = pre.pres[0].id;
                 document.getElementById("demo2").innerHTML = pre.pres[0].about_pres;
                 document.getElementById("demo1").innerHTML = pre.pres[0].title_pres;
                 document.getElementById("demo4").innerHTML = pre.pres[0].author;
                 document.getElementById("demo5").innerHTML = pre.pres[0].dress;
                 document.getElementById("demo6").innerHTML = pre.pres[0].link;

            }
            function createPres(){
            var presBtn = document.querySelector('#pres');
            presBtn.onclick =function(){

               var author = document.querySelector('input[name ="author"]').value;
               var dress = document.querySelector('input[name ="dress"]').value;
               var link = document.querySelector('input[name ="link"]').value;
               var title_pres = document.querySelector('input[name="title_pres"]').value;
               var about_pres = document.querySelector('input[name ="about_pres"]').value;
               var id = document.querySelector('input[name="id"]').value;
               var data = {
                   about_pres:about_pres,
                   title_pres:title_pres,
                   id:id,
                   author:author,
                   dress:dress,
                   link:link,
               };
                   var url = 'http://localhost:8765/homes/.json';
               postPres(url, data);
            }
            }
            async function postPres(url, data) {
             const response = await fetch(url, {
                   method: 'POST',
                   headers: {
                     'Content-Type': 'application/json'
                   },
                   body: JSON.stringify(data)
             });
             return response.json();
             }
             async function deletePres(id) {
                   var id =  document.getElementById('demo3').innerHTML;
                   console.log(id);
                   var url = 'http://localhost:8765/homes/'+ id +'.json';
                   const response = await fetch(url, {
                   method: 'DELETE',
                   headers: {
                     'Content-Type': 'application/json'
                   },
             });
                    return response.json();

               }
             function editPres(){
            var preBtn = document.querySelector('#pre');
            preBtn.onclick =function(){

               var author = document.querySelector('input[name ="author"]').value;
               var dress = document.querySelector('input[name ="dress"]').value;
               var link = document.querySelector('input[name ="link"]').value;
               var title_pres = document.querySelector('input[name="title_pres"]').value;
               var about_pres = document.querySelector('input[name ="about_pres"]').value;
               var id = document.querySelector('input[name="id"]').value;
               var data = {
                   about_pres:about_pres,
                   title_pres:title_pres,
                   id:id,
                   author:author,
                   dress:dress,
                   link:link,
               };

                    var id =  document.getElementById('demo3').innerHTML;
                   var url = 'http://localhost:8765/homes/'+ id +'.json';
               presData(url, data);
            }
            }
            async function presData(url, data) {
             const response = await fetch(url, {
                   method: 'PUT',
                   headers: {
                     'Content-Type': 'application/json'
                   },
                   body: JSON.stringify(data)
             });
             return response.json();
             }

            //  </script>

     </div>


    </div>
    </div>





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
                    <div class="p"><p>C'est aider tout type body'oranisation á resaliser ses projest avec un seul mot body'order :</p></div>
                    <div class="last"><h1>sim-pli-ci-té!</h1></div>

                </div>
                <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                <div class="content_layot_img"><?= $this->Html->image('m1.jpg') ?></div>
            </div>
            <div class="content_about">
                <div class="content_about_title">Découvrez l’univers z0 Gravity</div>
                <div class="content_about_text">Plannings, budgets, calendriers…
                     En un clin body'œil, vous avez une vision globale et stratégique
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
                        <div class="vous_go_about"><h2>Une entreprise</h2><p> Jouez collectif :<br> fédérez vos équipes autour body'un objectif commun.</p></div>
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


                    <div class="conten_nos1"><p id="id_article"></p>
                        <div class="conten_nos1_img"><?= $this->Html->image('new2.jpg') ?></p></div>
                        <div class="conten_nos1_caption"><p id="about"></p></div>

                        <div class="conten_nos1_time">
                            <div class="conten_nos1_note"><p id="title"></p></div>15 min
                        </div>
                        <div class="conten_nos1_about"><p id="body"></p></div>
                        <div class="conten1 nos_btn"><a href="">Lire l’article</a></div><br></p>
                    </div>
                    <div class="conten_nos2"><p id="id_article1"></p>
                        <div class="conten_nos2_img"><?= $this->Html->image('news3.jpg') ?></div>
                        <div class="conten_nos2_char">
                            <div class="conten_nos2_caption"><p id="about1"></p></div>

                            <div class="conten_nos2_time">
                                <div class="conten_nos2_note"><p id="title1"></p></div>10 min
                            </div>
                            <div class="conten_nos2_about"><p id="body1"></p></div>
                            <div class="conten2 nos_btn"><a href="">Lire l’article</a></div>
                        </div>
                    </div>
                    <div class="conten_nos4">
                        <div class="conten_nos4_img"><p id="id_article2"></div>
                        <div class="conten_nos4_caption"><p id="about2"></p></div>

                        <div class="conten_nos4_time">
                            <div class="conten_nos4_note"><p id="title2"></p></div>8 min

                        </div>
                        <div class="conten_nos4_about"><p id="body2"></p></p></div>
                        <div class="conten4 nos_btn"><a href="">Lire l’article</a></div>
                    </div>

                    <div class="conten_nos3"><p id="id_article3"></p>




                        <div class="conten_nos3_img"></div>
                        <div class="conten_nos3_caption"><p id="about3"></p></div>

                        <div class="conten_nos3_time">
                            <div class="conten_nos3_note"><p id="title3"></p></div>12 min
                        </div>
                        <div class="conten_nos3_about"><p id="body3"></p></div>
                        <div class="conten3 nos_btn"><a href="">Lire l’article</a></div>
                    </div>
                </div>

                <form >
                   <!-- <label for="cars">danh sach bai viet</label>
                //   <select name="link1" id="cars">
                //     <option value="1">bai so1</option>
                //     <option value="2">bai so 2</option>
                //     <option value="3">bai so 3</option>
                //     <option value="4">bai so4</option>
                //   </select> -->
                  <!-- <form >
                //   <input type="text"  name="link"  placeholder="link"><br>
                //   <button id="creat">edit</button> -->

               <!-- </form >
                //   <br><br>
                //   <input type="submit" value="Submit" id="m">
                // </form> -->














                <!-- <form >
                   <input type="text"  name="id_article" placeholder="id"><br>
                   <input type="text"  name="title"  placeholder="title"><br>
                   <input type="text"  name="about"  placeholder="about"><br>
                   <input type="text"  name="body"  placeholder="body"><br>
                   <input type="text"  name="img"  placeholder="img"><br>
                   <input type="text"  name="link"  placeholder="link"><br>

                   <button id="articles">add</button>
                   <button id="article">edit</button>
                   <button onclick ="deleteArticles()">delete</button>
                 </form >


                 </div>



                  <script>
                 var index =  document.getElementById('a').innerHTML;
                 console.log(index);

                var articleAPi ='http://localhost:8765/articlesapi/'+ index +'.json';
                var articleAPi2 ='http://localhost:8765/articlesapi/7.json';
                var articleAPi3 ='http://localhost:8765/articlesapi/11.json';
                var articleAPi4 ='http://localhost:8765/articlesapi/12.json';
                function start(){
                        // getArticles(renderArticles);
                        // getArticles2(renderArticles2);
                        // getArticles3(renderArticles3);
                        // getArticles4(renderArticles4);
                        createArticles();
                        editArticles();

                }
                start();

                function getArticles(callback){
                        fetch(articleAPi)
                        .then(function(response){
                            return response.json();

                        })
                        .then(callback);
                }
                function renderArticles(courses){

                                // document.getElementById("id_article").innerHTML = courses.article.id_article;
                                // document.getElementById("about").innerHTML = courses.article.about;
                                // document.getElementById("title").innerHTML = courses.article.title;
                                //     document.getElementById("body").innerHTML = courses.article.body;
                                //     document.getElementById("img").innerHTML = courses.article.img;
                                //     document.getElementById("link").innerHTML = courses.article.link;

                                //     document.getElementById("id_article1").innerHTML = courses.articles.id_article;
                                // document.getElementById("about1").innerHTML = courses.articles[1].about;
                                // document.getElementById("title1").innerHTML = courses.articles[1].title;
                                //     document.getElementById("body1").innerHTML = courses.articles[1].body;
                                //     document.getElementById("l").innerHTML = courses.articles[1].img;
                                //     document.getElementById("n").innerHTML = courses.articles[1].link;

                                //     document.getElementById("id_article2").innerHTML = courses.articles[2].id_article;
                                // document.getElementById("about2").innerHTML = courses.articles[2].about;
                                // document.getElementById("title2").innerHTML = courses.articles[2].title;
                                //     document.getElementById("body2").innerHTML = courses.articles[2].body;
                                //     document.getElementById("u").innerHTML = courses.articles[2].img;
                                //     document.getElementById("i").innerHTML = courses.articles[2].link;
                                //     document.getElementById("id_article3").innerHTML = courses.articles[3].id_article;
                                // document.getElementById("about3").innerHTML = courses.articles[3].about;
                                // document.getElementById("title3").innerHTML = courses.articles[3].title;
                                //     document.getElementById("body3").innerHTML = courses.articles[3].body;
                                //     document.getElementById("a").innerHTML = courses.articles[3].img;
                                //     document.getElementById("b").innerHTML = courses.articles[3].link;
                }
                function getArticles2(callback){
                        fetch(articleAPi2)
                        .then(function(response){
                            return response.json();

                        })
                        .then(callback);
                }
                function renderArticles2(courses){

                                //
                                //     document.getElementById("id_article1").innerHTML = courses.article.id_article;
                                // document.getElementById("about1").innerHTML = courses.article.about;
                                // document.getElementById("title1").innerHTML = courses.article.title;
                                //     document.getElementById("body1").innerHTML = courses.article.body;
                                //     document.getElementById("l").innerHTML = courses.article.img;
                                //     document.getElementById("n").innerHTML = courses.article.link;


                }
                function getArticles3(callback){
                        fetch(articleAPi3)
                        .then(function(response){
                            return response.json();

                        })
                        .then(callback);
                }
                function renderArticles3(courses){

                                //
                                //     document.getElementById("id_article2").innerHTML = courses.article.id_article;
                                // document.getElementById("about2").innerHTML = courses.article.about;
                                // document.getElementById("title2").innerHTML = courses.article.title;
                                //     document.getElementById("body2").innerHTML = courses.article.body;
                                //     document.getElementById("u").innerHTML = courses.article.img;
                                //     document.getElementById("i").innerHTML = courses.article.link;

                }
                function getArticles4(callback){
                        fetch(articleAPi4)
                        .then(function(response){
                            return response.json();

                        })
                        .then(callback);
                }
                function renderArticles4(courses){


                                //     document.getElementById("id_article3").innerHTML = courses.article.id_article;
                                // document.getElementById("about3").innerHTML = courses.article.about;
                                // document.getElementById("title3").innerHTML = courses.article.title;
                                //     document.getElementById("body3").innerHTML = courses.article.body;
                                //     document.getElementById("a").innerHTML = courses.article.img;
                                //     document.getElementById("b").innerHTML = courses.article.link;
                }
                function createArticles(){
                var articlesBtn = document.querySelector('#articles');
                articlesBtn.onclick =function(){

                    var body = document.querySelector('input[name ="body"]').value;
                    var img = document.querySelector('input[name ="img"]').value;
                    var link = document.querySelector('input[name ="link"]').value;
                    var title = document.querySelector('input[name="title"]').value;
                    var about = document.querySelector('input[name ="about"]').value;
                    var id_article = document.querySelector('input[name="id_article"]').value;
                    var data = {
                        about:about,
                        title:title,
                        id_article:id_article,
                        body:body,
                        img:img,
                        link:link,
                    };
                        var url = 'http://localhost:8765/articlesapi.json';
                        console.log(data);
                        console.log(url);
                    postArticles(url, data);
                }
                }
                async function postArticles(url, data) {
                  const response = await fetch(url, {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                  });
                  return response.json();
                  }
                  async function deleteArticles(id) {
                        var id =  document.getElementById('id_article').innerHTML;
                        console.log(id);
                        var url1 = 'http://localhost:8765/articlesapi/'+ id +'.json';
                        console.log(url1);

                        const response = await fetch(url1, {
                        method: 'DELETE',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                  });
                         return response.json();

                    }
                  function editArticles(){
                var articleBtn = document.querySelector('#article');
                articleBtn.onclick =function(){

                    var body = document.querySelector('input[name ="body"]').value;
                    var img = document.querySelector('input[name ="img"]').value;
                    var link = document.querySelector('input[name ="link"]').value;
                    var title = document.querySelector('input[name="title"]').value;
                    var about = document.querySelector('input[name ="about"]').value;
                    var id_article = document.querySelector('input[name="id_article"]').value;
                    var data = {
                        about:about,
                        title:title,
                        id_article:id_article,
                        body:body,
                        img:img,
                        link:link,
                    };

                          var id = id_article;
                        var url = 'http://localhost:8765/articlesapi/'+ id +'.json';
                    articleData(url, data);
                }
                }
                async function articleData(url, data) {
                  const response = await fetch(url, {
                        method: 'PUT',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                  });
                  return response.json();
                  }
                 </script> -->
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
                        <div class="img_info"><i class="fa-brands fa-facebook-link"></i>
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

        <div class="form3">
           <?php foreach ($posts as $post): ?>
            <p id="a"><?= h($post->article1) ?></p>
             <p id="b"><?= h($post->article2) ?></p>
              <p id="c"><?= h($post->article3) ?></p>
               <p id="d"><?= h($post->article4) ?></p>
               <?php endforeach; ?>
               <div style ="  width: 450px;
                             height: 450px;
                             border: 1px solid #000;
                             overflow: scroll;
                             position: relative;
top: -1830px;
left: 772px;
                             margin: auto;" class="list">
                             <p id="e"></p>
              </div>
             </div>
        <script type="text/javascript">

        var index =  document.getElementById('a').innerHTML -1;
        console.log(index);
        var index1 =  document.getElementById('b').innerHTML-1;
        console.log(index1);
        var index2 =  document.getElementById('c').innerHTML-1;
        console.log(index2);
        var index3 =  document.getElementById('d').innerHTML-1;
        console.log(index3);

        var articleAPi ='https://jsonplaceholder.typicode.com/posts';

        function start(){
              getPosts(renderPosts);
                getPosts(listPosts);




        }
        start();

        function getPosts(callback){
              fetch(articleAPi)
              .then(function(response){
                  return response.json();

              })
              .then(callback);
        }
        function listPosts(courses){
          console.log(courses);
        document.getElementById("e").innerHTML = courses.map(function(course){
            return`
            <div>
            <div style ="  width: 400px;
                          height: 150px;
                          border: 1px solid #000;
                          margin: auto;
                          overflow: scroll;
                          border-radius: 4px;">
            <h4>article: ${course.id}</h4>
            <h4>title: ${course.title}</h4>
            <p>body: ${course.body}</p>
            </div>
            `;

          });
      }
        function renderPosts(courses){
        //   console.log(courses);
        // document.getElementById("e").innerHTML = courses.map(function(course){
        //     return`
        //     <li>
        //     ${course.body}
        //     </li>
        //
        //     `;
        //   });
        console.log(courses[index].id);
                      document.getElementById("id_article").innerHTML = courses[index].id;
                      document.getElementById("about").innerHTML = courses[index].title;
                      document.getElementById("title").innerHTML = 'aaaa';
                          document.getElementById("body").innerHTML = courses[index].body;
        //                   // document.getElementById("img").innerHTML = courses.article.img;
        //                   // document.getElementById("link").innerHTML = courses.article.link;
        //
                          document.getElementById("id_article1").innerHTML = courses[index1].id;
                      document.getElementById("about1").innerHTML = courses[index1].title;
                      document.getElementById("title1").innerHTML = 'bbb';
                          document.getElementById("body1").innerHTML = courses[index1].body;
        //                   // document.getElementById("l").innerHTML = courses.articles[1].img;
        //                   // document.getElementById("n").innerHTML = courses.articles[1].link;

                          document.getElementById("id_article2").innerHTML = courses[index2].id;
                      document.getElementById("about2").innerHTML = courses[index2].title;
                      document.getElementById("title2").innerHTML = 'ccc';
                          document.getElementById("body2").innerHTML = courses[index2].body;
        //                   // document.getElementById("u").innerHTML = courses.articles[2].img;
        //                   // document.getElementById("i").innerHTML = courses.articles[2].link;
                          document.getElementById("id_article3").innerHTML = courses[index3].id;
                      document.getElementById("about3").innerHTML = courses[index3].title;
                      document.getElementById("title3").innerHTML = 'ccc';
                          document.getElementById("body3").innerHTML = courses[index3].body;
                          // document.getElementById("a").innerHTML = courses.articles[3].img;
                          // document.getElementById("b").innerHTML = courses.articles[3].link;
        }


        </script>
        <h2>From POST</h2>
        <style>
input[type=text], select {
  width: 400px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button{
  width: 100px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

</style>
<div class="form5">


        <form >
         <input class="input" type="text"  name="id_posts" placeholder="id" style=""><br>
         <input class="input" type="text"  name="article1"  placeholder="article1"><br>
         <input class="input" type="text"  name="article2"  placeholder="article2"><br>
         <input class="input" type="text"  name="article3"  placeholder="article3"><br>
         <input class="input" type="text"  name="article4"  placeholder="article4"><br>


         <button id="posts" style="  display: none;">add</button>
         <button id="post">edit</button>
         <button onclick ="deletePosts()" style="  display: none;">delete</button>
        </form >


        </div>

                                        <script>

                                        var postApi ='http://localhost:8765/posts.json';
                                        function start(){
                                              getPosts(renderPosts);
                                              createPosts();
                                              editPosts();

                                        }
                                        start();
                                        function getPosts(callback){
                                              fetch(postApi)
                                              .then(function(response){
                                                  return response.json();

                                              })
                                              .then(callback);
                                        }
                                        function renderPosts(courses){


                                        // for (const [key, value] of formData) {

                                        //   var output = `${key}: ${value}, \n `;
                                        //   console.log(output);

                                        }
                                        function createPosts(){
                                        var postsBtn = document.querySelector('#posts');
                                        postsBtn.onclick =function(){

                                          var article1 = document.querySelector('input[name ="article1"]').value;
                                          var article2 = document.querySelector('input[name ="article2"]').value;
                                          var article3 = document.querySelector('input[name="article3"]').value;
                                          var article4 = document.querySelector('input[name ="article4"]').value;
                                          var id_posts = document.querySelector('input[name="id_posts"]').value;
                                          var data = {
                                              article1:article1,
                                              article2:article2,
                                              article3:article3,
                                              article4:article4,
                                              id_posts:id_posts,
                                          };
                                              var url = 'http://localhost:8765/posts.json';
                                          postData(url, data);
                                        }
                                        }
                                        async function postData(url, data) {
                                        const response = await fetch(url, {
                                              method: 'POST',
                                              headers: {
                                                'Content-Type': 'application/json'
                                              },
                                              body: JSON.stringify(data)
                                        });
                                        return response.json();
                                        }
                                        async function deletePosts(id) {
                                              var id =  document.getElementById('aa').innerHTML;
                                              console.log(id);
                                              var url1 = 'http://localhost:8765/posts/'+ id +'.json';
                                              console.log(url1);

                                              const response = await fetch(url1, {
                                              method: 'DELETE',
                                              headers: {
                                                'Content-Type': 'application/json'
                                              },
                                        });
                                               return response.json();

                                          }
                                        function editPosts(){
                                        var postBtn = document.querySelector('#post');
                                        postBtn.onclick =function(){

                                          var article1 = document.querySelector('input[name ="article1"]').value;
                                          var article2 = document.querySelector('input[name ="article2"]').value;
                                          var article3 = document.querySelector('input[name="article3"]').value;
                                          var article4 = document.querySelector('input[name ="article4"]').value;
                                          var id_posts = document.querySelector('input[name="id_posts"]').value;
                                          var data = {
                                              article1:article1,
                                              article2:article2,
                                              article3:article3,
                                              article4:article4,
                                              id_posts:id_posts,


                                          };


                                              var url = 'http://localhost:8765/posts/'+ 1 +'.json';
                                          postsEdit(url, data);
                                        }
                                        }
                                        async function postsEdit(url, data) {
                                        const response = await fetch(url, {
                                              method: 'PUT',
                                              headers: {
                                                'Content-Type': 'application/json'
                                              },
                                              body: JSON.stringify(data)
                                        });
                                        return response.json();
                                        }

                                        </script>

</body>
</html>
