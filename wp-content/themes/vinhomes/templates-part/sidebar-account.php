<?php
/**
 * Template part for displaying a list product bt address
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VinHomes
 */

?>

<section id="text-4" class="widget clearfix widget_text FixedWidget__fixed_widget">
    <div class="textwidget">
        <div style="padding: 20px; margin-bottom: 20px; background-color: #345574;">
            <p style="text-align: center;"><span style="font-size: 20px; text-transform: uppercase; color: #fff;">Đăng
                    ký tư
                    vấn</span></p>
            <form action="<?php home_url(); ?>/vinhomes-symphony/" method="post"
                class="avia_ajax_form av-form-labels-hidden    " data-avia-form-id="2" data-avia-redirect="">
                <fieldset>
                    <p class="  first_form  form_element form_fullwidth" id="element_avia_1_2">
                        <label for="avia_1_2">Họ và tên</label> <input name="avia_1_2" class="text_input " type="text"
                            id="avia_1_2" value="" placeholder="Họ và tên">
                    </p>
                    <p class="  first_form  form_element form_fullwidth" id="element_avia_2_2">
                        <label for="avia_2_2">Số điện thoại</label> <input name="avia_2_2" class="text_input "
                            type="text" id="avia_2_2" value="" placeholder="Số điện thoại">
                    </p>
                    <p class="  first_form  form_element form_fullwidth" id="element_avia_3_2">
                        <label for="avia_3_2">Email</label> <input name="avia_3_2" class="text_input " type="text"
                            id="avia_3_2" value="" placeholder="Email">
                    </p>
                    <p class="  first_form  form_element form_fullwidth" id="element_avia_4_2">
                        <label for="avia_4_2">Dự án quan tâm</label> <input name="avia_4_2" class="text_input "
                            type="text" id="avia_4_2" value="" placeholder="Dự án quan tâm">
                    </p>
                    <p class="  first_form  form_element form_fullwidth av-last-visible-form-element"
                        id="element_avia_5_2"><label for="avia_5_2"
                            class="textare_label hidden textare_label_avia_5_2">Nhu cầu quan
                            tâm</label><textarea placeholder="Nhu cầu quan tâm" name="avia_5_2" class="text_area "
                            cols="40" rows="7" id="avia_5_2"></textarea></p>
                    <p class="hidden"><input type="text" name="avia_6_2" class="hidden " id="avia_6_2" value=""></p>
                    <p class="form_element "><input type="hidden" value="1" name="avia_generated_form2"><input
                            type="submit" value="ĐĂNG KÝ" class="button" data-sending-label="Sending"></p>
                </fieldset>
            </form>
            <div id="ajaxresponse_2" class="ajaxresponse ajaxresponse_2 hidden"></div>
        </div>
    </div>
    <span class="seperator extralight-border"></span>
</section>