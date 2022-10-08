<?php
// du_an Description
$id = get_the_ID();
$mo_ta_heading = get_field('mo_ta_heading', $id);
$chu_dau_tu = get_field('chu_dau_tu', $id);
$tong_dien_tich = get_field('tong_dien_tich', $id);
$mat_do_xay_dung = get_field('mat_do_xay_dung', $id);
$quy_mo_phat_trien = get_field('quy_mo_phat_trien', $id);
$loai_hinh_phat_trien = get_field('loai_hinh_phat_trien', $id);
$thoi_diem_khoi_cong = get_field('thoi_diem_khoi_cong', $id);
$thoi_diem_ban_giao = get_field('thoi_diem_ban_giao', $id);
$du_an_thumbnail = get_field('du_an_thumbnail', $id);
?>

<h2><span id="Tong_quan_Vinhomes_Symphony_Riverside"><?php echo $mo_ta_heading ;?></span></h2>
<p><strong>Chủ đầu tư:</strong>&nbsp;<?php echo $chu_dau_tu ;?></p>
<p><strong>Tổng diện tích đất dự án:</strong>&nbsp;<?php echo $tong_dien_tich ;?></p>
<p><strong>Mật độ xây dựng:</strong>&nbsp;<?php echo $mat_do_xay_dung ;?></p>
<p><strong>Quy mô phát triển:</strong>&nbsp<?php echo $quy_mo_phat_trien ;?></p>
<p><strong>Loại hình phát triển:</strong>&nbsp;<?php echo $loai_hinh_phat_trien ;?></p>
<p><strong>Thời điểm khởi công:&nbsp;</strong><?php echo $thoi_diem_khoi_cong ;?></p>
<p><strong>Thời điểm bàn giao:</strong>&nbsp;<?php echo $thoi_diem_ban_giao ;?></p>
<div style="width: 810px" class="wp-caption alignnone"><img
        aria-describedby="caption-attachment-21018" class="wp-image-21018 size-full"
        
        srcset="<?php the_post_thumbnail(); ?>">
    <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
</div>