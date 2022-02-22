<?php

session_start();
require_once '../PHP/config.php';

$id = $_POST['admin_product_id'];
$name = $_POST['admin_product_name'];
$quantity = $_POST['admin_product_quantity'];
$price = $_POST['admin_product_unit_price'];
$cat_id = $_POST['cat_id'];
$subcat_id = $_POST['subcat_id'];

$new_pic_path = $_FILES['new_pic_path'];
$old_pic_path = $_POST['old_pic_path'];
$pic_path;

$btn = isset($_POST['admin_btn_update']) ? $_POST['admin_btn_update'] : $_POST['admin_btn_delete'];

if ($btn == "Update") {

    if ($new_pic_path['size'] != 0) {
        $pic_path = update_dp($new_pic_path, $cat_id, $subcat_id);
    } else {
        $pic_path = $old_pic_path;
    }

    $sql = "UPDATE product SET 
            name=\"" . $name . "\",
            image=\"" . $pic_path . "\",
            unit_price=$price,
            quantity=$quantity,
            cat_id=$cat_id,
            subcat_id=$subcat_id
            WHERE product_id=$id";
    if ($conn->query($sql) === true) {
        echo '<script>sessionStorage.setItem("db_status","200");history.back();</script>';
    } else {
        echo '<script>sessionStorage.setItem("db_status","400");history.back();</script>';
    }
}
if ($btn == "Delete") {
    $sql = "DELETE FROM product WHERE product_id=$id";
    if ($conn->query($sql) === true) {
        echo '<script>sessionStorage.setItem("db_status","202");history.back();</script>';
    } else {
        echo '<script>sessionStorage.setItem("db_status","400");history.back();</script>';
    }
}

function update_dp($new_pic_path, $cat_id, $subcat_id)
{
    $pathStatus = true;

    if ($cat_id == 1) {
        if ($subcat_id == 1) {
            $target_dir  = "../Resource/product/women/clothing/";
            $target_file = $target_dir . "wc_" . rand() . ".png";
        } elseif ($subcat_id == 2) {
            $target_dir  = "../Resource/product/women/footwear/";
            $target_file = $target_dir . "wf_" . rand() . ".png";
        } elseif ($subcat_id == 3) {
            $target_dir  = "../Resource/product/women/accessories/";
            $target_file = $target_dir . "wa_" . rand() . ".png";
        } else {
            $pathStatus = false;
        }
    } elseif ($cat_id == 2) {
        if ($subcat_id == 1) {
            $target_dir  = "../Resource/product/men/clothing/";
            $target_file = $target_dir . "mc_" . rand() . ".png";
        } elseif ($subcat_id == 2) {
            $target_dir  = "../Resource/product/men/footwear/";
            $target_file = $target_dir . "mf_" . rand() . ".png";
        } elseif ($subcat_id == 3) {
            $target_dir  = "../Resource/product/men/accessories/";
            $target_file = $target_dir . "ma_" . rand() . ".png";
        } else {
            $pathStatus = false;
        }
    } elseif ($cat_id == 3) {
        if ($subcat_id == 1) {
            $target_dir  = "../Resource/product/kid/clothing/";
            $target_file = $target_dir . "kc_" . rand() . ".png";
        } elseif ($subcat_id == 2) {
            $target_dir  = "../Resource/product/kid/footwear/";
            $target_file = $target_dir . "kf_" . rand() . ".png";
        } elseif ($subcat_id == 3) {
            $target_dir  = "../Resource/product/kid/accessories/";
            $target_file = $target_dir . "ka_" . rand() . ".png";
        } else {
            $pathStatus = false;
        }
    } else {
        $pathStatus = false;
    }

    if ($pathStatus == true) {
        move_uploaded_file($new_pic_path['tmp_name'], $target_file);
        return $target_file;
    }
}

$conn->close();
