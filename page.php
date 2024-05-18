<?php get_header(); // load header ?>
 <!-- Header-->
 <!-- condition for header 1  -->
 <?php if( pods_field_display('enable_header_1') == 'Yes') : ?>

 <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <!-- for heading  -->
                                <!-- heading 1  -->
                                <?php if (pods_field_display('heading')); ?>

                                <h1 class="display-5 fw-bolder text-white mb-2"><?php echo pods_field_display('heading'); ?>
                            </h1> <?php endif; ?>

                         <?php if (pods_field_display('sub_heading')); ?>                                 
                                <p class="lead fw-normal text-white-50 mb-4"><?php echo pods_field_display('sub_heading'); ?>
                            </p> 
                            <?php endif; ?>
                                
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <!-- button 1 -->

                                  <?php if (pods_field_display('button_1_text')); ?>
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="<?php echo pods_field_display('button_1_url'); ?>"><?php echo pods_field_display('button_1_text'); ?>
                                </a> <?php endif; ?>
                                      <!-- button 2 -->
                                    <?php if (pods_field_display('button_2_text')); ?>
                                    <a class="btn btn-outline-light btn-lg px-4" href="<?php echo pods_field_display('button_2_url'); ?>"><?php echo pods_field_display('button_2_text'); ?>
                                </a> <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if (echo pods_image_url(pods_field('right_image'))); ?>                        
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo pods_image_url(pods_field('right_image')); ?>" alt="..."></div>
                        <?php endif; ?>
                    </div>
                </div>
            </header>
            <?php endif; ?>
            <!-- condition end above  -->

            <!-- header 2 for about page  -->
            <?php if (pods_field_display('enable_header_2') == 'Yes'): ?>
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3"><?php echo pods_field_display('heading_2'); ?></h1>

                                <p class="lead fw-normal text-muted mb-4"><?php echo pods_field_display('sub_heading_2'); ?></p>

                                <a class="btn btn-primary btn-lg" href="<?php echo pods_field_display('button_3_url'); ?>"><?php echo pods_field_display('button_3_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <?php endif; ?>
<?php get_footer(); // load footer ?>
