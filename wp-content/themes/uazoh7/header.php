<?php global $smof_data; ?><!DOCTYPE html><!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]--><!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]--><!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]--><!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]--><head><meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="<?php bloginfo('description'); ?>"><meta name="author" content="K | Uazoh.com"><title><?php if ( is_front_page()) { wp_title(''); }else{$str=wp_title('|',false);$str=substr($str,0,strlen($str)-2);echo $str;} ?></title><?php if(!empty($smof_data['custom_favicon']['url'])) { ?><link rel="icon" type="image/png" href="<?php echo esc_url($smof_data['custom_favicon']['url']); ?>" /><?php }else{echo '<link rel="icon" type="image/png" href="'.get_template_directory_uri().'/img/favicon/apple-touch-icon-144-precomposed.png" />';} ?><?php wp_head(); ?></head><body <?php body_class(); ?>><!--专版参数--><?php if(isset($smof_data['enable_to_the_top'])) {if($smof_data['enable_to_the_top'] != 0) { ?><div id="to-the-top" title="返回顶端"><i class="fa fa-chevron-up"></i></div><?php }} if(isset($smof_data['enable_preloader'])) {if($smof_data['enable_preloader'] != 0) { ?><div id="uazoh7-preload"><span>正在加载<br>请稍等</span><i class="fa fa-cog fa-spin"></i><p></p></div><?php }} ?><!--移动菜单--><i class="fa fa-align-justify" id="uazoh7-mobile-menu-btn"></i><div class="uazoh7-mobile-menu" id="uazoh7-mobile-menu"> <h3>菜单</h3><?php wp_nav_menu( array('theme_location' => 'top_menu','container'=> 'nav','menu_id' => 'mobile_nav','menu_class' => 'mobile-menu','sort_column' => 'menu_order','fallback_cb' => ''));?></div><?php if((is_front_page()) && (is_page_template('template-homepage.php'))) {require_once( dirname( __FILE__ ) . '/includes/header-h3.php' );}else{require_once( dirname( __FILE__ ) . '/includes/header-h1.php' );}?><?php  if(is_404()) {}else{ ?><div class="uazoh7-content"><?php } ?><?php if((is_front_page()) && (is_page_template('template-homepage.php'))) {require_once( dirname( __FILE__ ) . '/includes/header-slider.php' );}else{  if(is_404() || (is_page_template('template-page1.php')) || (is_page_template('template-page2.php')) || (is_page_template('template-about.php')) || (is_page_template('template-Foreigners.php')) || (is_page_template('template-work.php'))) {}else{ ?><?php if(!is___weixin()){ ?><section class="uazoh7-page-title-1" data-stellar-background-ratio="0.5">        <div class="container">          <div class="row">            <div class="col-lg-9 col-md-9 col-sm-9">				<!-- <?php if(is_home()) { ?><h1><?php _e("首页", "uazoh"); ?></h1><?php }?> -->				<!-- <?php if (is_category()) { ?><h1><?php _e('分类 ', 'uazoh'); ?><strong><?php single_cat_title(); ?></strong></h1> -->				<!-- <?php } elseif(is_single()) { ?><h1><?php _e('文章', 'uazoh'); ?></h1> -->				<!-- <?php } elseif(is_tag()) { ?><h1><?php _e('标签 ', 'uazoh'); ?><?php single_tag_title(); ?></h1> -->				<!-- <?php } elseif (is_day()) { ?><h1><?php _e('汇总 ', 'uazoh'); ?><?php the_time(get_option('date_format')); ?></h1> -->				<!-- <?php } elseif (is_month()) { ?><h1><?php _e('汇总 ', 'uazoh'); ?><?php the_time(get_option('date_format')); ?></h1> -->        <!-- <?php } elseif (is_year()) { ?><h1><?php _e('汇总 ', 'uazoh'); ?><?php the_time(get_option('date_format')); ?></h1> -->				<!-- <?php }  if (is_search()) { ?><h1><?php _e('关键词 ', 'uazoh'); ?> <strong> <?php the_search_query(); ?> </strong> </h1><?php }?> -->            </div>            <div class="col-lg-3 col-md-3 col-sm-3">              <?php get_search_form(); ?>            </div>          </div>        </div>      </section>      <section class="uazoh7-desktop-breadscrubs">        <div class="container">          <div class="row">            <div class="col-lg-12">              <div class="uazoh7-desktop-breadscrubs-inner">                <?php uazoh_breadcrumbs()?>              </div>            </div>          </div>        </div>      </section>      <section class="uazoh7-mobile-breadscrubs">        <div class="container">          <div class="row">            <div class="col-lg-12">              <?php uazoh_breadcrumbs()?>            </div>          </div>        </div>      </section><?php }} } ?><!-- Modified by Honlan --><?php if (is_home() || is_front_page()) { ?><style>.home_button span {  font-size: 24px;  padding: 12px 18px;  color: #363b3f;  border-radius: 5px;  border: 1px solid #363b3f;}</style><?php } ?><!-- Modified by Honlan -->