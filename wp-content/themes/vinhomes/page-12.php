<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vinhomes
 */

get_header();
?>

<div id="main" class="all_colors" data-scroll-offset="88">

	<div class="stretch_full container_wrap alternate_color light_bg_color title_container">
		<div class="container">
			<h1 class="main-title entry-title "><a href="https://vinhomesland.vn/lien-he/" rel="bookmark" title="Permanent Link: Liên hệ" itemprop="headline">Liên hệ</a></h1>
		</div>
	</div>
	<div class="main_color container_wrap_first container_wrap fullsize" style=" ">
		<div class="container">
			<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
				<div class="post-entry post-entry-type-page post-entry-20967">
					<div class="entry-content-wrapper clearfix">
						<div class="flex_column av_one_half  flex_column_div av-zero-column-padding first  avia-builder-el-0  el_before_av_one_half  avia-builder-el-first  " style="border-radius:0px; ">
							<section class="av_textblock_section " itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
								<div class="avia_textblock  " itemprop="text">
									<p>Vinhomes Land – Đơn vị phân phối bất động sản Vingroup</p>
									<p>Địa chỉ : R3 Royal City, số 72 Nguyễn Trãi, phường Thượng Đình, quận Thanh Xuân, Hà Nội</p>
									<p>Hotline: <a class="text-is-phone-number">0986 315 597</a></p>
									<p>Email: info@vinhomesland.vn</p>
									<p>Website: https://vinhomesland.vn</p>
									<p>Bạn hãy vui lòng để lại thông tin cá nhân theo Form đăng ký sau để được chúng tôi hỗ trợ tốt nhất:</p>
								</div>
							</section>
						</div>
						<div class="flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-2  el_after_av_one_half  avia-builder-el-last  " style="border-radius:0px; ">
							<form action="https://vinhomesland.vn/lien-he/" method="post" class="avia_ajax_form av-form-labels-hidden   avia-builder-el-3  avia-builder-el-no-sibling   " data-avia-form-id="1" data-avia-redirect="">
								<fieldset>
									<p class="  first_form  form_element form_element_third" id="element_avia_1_1"><label for="avia_1_1">Họ và tên <abbr class="required" title="required">*</abbr></label> <input name="avia_1_1" class="text_input is_empty" type="text" id="avia_1_1" value="" placeholder="Họ và tên*"></p>
									<p class="  form_element form_element_third" id="element_avia_2_1"><label for="avia_2_1">Số điện thoại <abbr class="required" title="required">*</abbr></label> <input name="avia_2_1" class="text_input is_empty" type="text" id="avia_2_1" value="" placeholder="Số điện thoại*"></p>
									<p class="  form_element form_element_third" id="element_avia_3_1"><label for="avia_3_1">Email</label> <input name="avia_3_1" class="text_input " type="text" id="avia_3_1" value="" placeholder="Email"></p>
									<p class="  first_form  form_element form_fullwidth av-last-visible-form-element" id="element_avia_4_1"><label for="avia_4_1" class="textare_label hidden textare_label_avia_4_1">Nhu cầu quan tâm</label><textarea placeholder="Nhu cầu quan tâm" name="avia_4_1" class="text_area " cols="40" rows="7" id="avia_4_1"></textarea></p>
									<p class="hidden"><input type="text" name="avia_5_1" class="hidden " id="avia_5_1" value=""></p>
									<p class="form_element "><input type="hidden" value="1" name="avia_generated_form1"><input type="submit" value="ĐĂNG KÝ" class="button" data-sending-label="Sending"></p>
								</fieldset>
							</form>
							<div id="ajaxresponse_1" class="ajaxresponse ajaxresponse_1 hidden"></div>
						</div>
						<p></p>
					</div>
				</div>
			</main><!-- close content main element -->
			<!-- section close by builder template -->
		</div>
		<!--end builder template-->
	</div><!-- close default .container_wrap element -->
	
	<?php
	 	get_template_part("template-parts/content", "listProjectByYear"); 
	?>

	<!-- end main -->
</div>


<?php
get_footer();
