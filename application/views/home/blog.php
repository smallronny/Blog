 
    <!--BLOG AND FEED AREA-->
    <section class="blog-and-feed-area section-padding white-gray-bg" id="news">
        <div class="container">
         
           <div class="row">
                
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="title-home wow fadeIn">
                        <h2 class="title-left">Blog de contenido   </h2>
                    </div>
                </div>

            </div>
            <div class="row">
                 
                      <div class="col-md-6 col-lg-12 col-sm-4 col-xs-12">
                
                
                            <div class="single-blog">
                                <div class="blog-thumb">
                                 </div>
                                 <?php if (!empty($entries)) : ?>
                                <?php foreach($entries as $entry) : ?>
                                <div class="blog-details">
                                
                                    <h4><a href="#"><?=$entry->title?></a></h4>
                                    <p><?=$entry->content
                                    ?><a href="#"> <br> Read More</a></p>


                                    <p class="blog-meta">Posteado por <a href="#"><?=$entry->author?></a> / <a href="#"><?=$entry->date?></a></p>
                                </div>
                                <?php endforeach; ?>
                                 <?php else : ?>
                                 <h1>No hay Entradas</h1>

                                <?php endif; ?>
                            </div>
                        </div>
                

                    </div>
                    <div class="right"> <?php echo anchor(base_url().'blog/entry/', 'Leer Más'); ?>  </div>
 
                 
 
                 </div>
             </section>
               <!--  <section class="blog-and-feed-area section-padding white-gray-bg" id=" ">
<div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                     <div class="title-home wow fadeIn">
                        <h2 class="title-left">Algunos de nuestros clientes
        </h2>
                    </div>
                </div>
            
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-slider wow fadeIn">
                        <div class="single-client">
                            <img src="img/client/client-1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-5.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
             
      BLOG AND FEED AREA END-->
