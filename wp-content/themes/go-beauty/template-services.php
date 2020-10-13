<?php 

/* Template Name: Services
*/

?>

<?php get_header();?>
<section class="page-wrap">
    <div class="container">

        <h1> <?php the_title();?> </h1>

        <section class="services">


            <div class="services-content">
                <?php get_template_part('includes/section','content');?>
            </div>


            <ul class="services-list">
                <li>
                    <div class="services-list-item">
                    <div class="services-item-name">Acrylics</div>
                    <div class="services-item-price">£39</div>
                    </div>
                </li>
                <li>
                    <div class="services-list-item">
                    <div class="services-item-name">Gels</div>
                    <div class="services-item-price">£45</div>
                    </div>
                </li>
                <li>
                    <div class="services-list-item">
                    <div class="services-item-name">Hybrids</div>
                    <div class="services-item-price">£35</div>
                    </div>
                </li>
                <li>
                    <div class="services-list-item">
                    <div class="services-item-name">Fillers</div>
                    <div class="services-item-price">£25</div>
                    </div>
                </li>
                <li>
                    <div class="services-list-item">
                    <div class="services-item-name">Conditioning</div>
                    <div class="services-item-price">£29</div>
                    </div>
                </li>
                
            </ul>   
        </section>


    </div>
</section>


<?php get_footer();?>