<?php
// du_an Description
$id = get_the_ID();
$ten_du_an = get_field('ten_du_an', $id);
$chu_dau_tu = get_field('chu_dau_tu', $id);
$tong_dien_tich = get_field('tong_dien_tich', $id);
$mat_do_xay_dung = get_field('mat_do_xay_dung', $id);
$quy_mo_phat_trien = get_field('quy_mo_phat_trien', $id);
$loai_hinh_phat_trien = get_field('loai_hinh_phat_trien', $id);
$thoi_diem_khoi_cong = get_field('thoi_diem_khoi_cong', $id);
$thoi_diem_ban_giao = get_field('thoi_diem_ban_giao', $id);
$du_an_thumbnail = get_field('du_an_thumbnail', $id);
?>

<h2><span id="Tong_quan_Vinhomes_Symphony_Riverside"><?php echo $ten_du_an ;?></span></h2>
<p><strong>Chủ đầu tư:</strong>&nbsp;<?php echo $chu_dau_tu ;?></p>
<p><strong>Tổng diện tích đất dự án:</strong>&nbsp;<?php echo $tong_dien_tich ;?></p>
<p><strong>Mật độ xây dựng:</strong>&nbsp;<?php echo $mat_do_xay_dung ;?></p>
<p><strong>Quy mô phát triển:</strong>&nbsp<?php echo $quy_mo_phat_trien ;?></p>
<p><strong>Loại hình phát triển:</strong>&nbsp;<?php echo $loai_hinh_phat_trien ;?></p>
<p><strong>Thời điểm khởi công:&nbsp;</strong><?php echo $thoi_diem_khoi_cong ;?></p>
<p><strong>Thời điểm bàn giao:</strong>&nbsp;<?php echo $thoi_diem_ban_giao ;?></p>
<div style="width: 810px" class="wp-caption alignnone"><img
        aria-describedby="caption-attachment-21018" class="wp-image-21018 size-full"
        src="<?php echo $du_an_thumbnail['url'] ;?>" alt="vinhomes-smart-city"
        width="800" height="450"
        srcset="<?php echo $du_an_thumbnail['url'] ;?> 800w, <?php echo $du_an_thumbnail['url'] ;?>  768w, <?php echo $du_an_thumbnail['url'] ;?> 705w"
        sizes="(max-width: 800px) 100vw, 800px">
    <p class="wp-caption-text"><?php echo $du_an_thumbnail['caption'] ;?></p>
</div>