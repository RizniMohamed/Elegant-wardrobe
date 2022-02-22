<?php

session_start();
require_once '../PHP/config.php';

$name = $_POST['productAdd_product_name'];
$quantity = $_POST['productAdd_product_quantity'];
$price = $_POST['productAdd_product_unit_price'];
$cat_id = $_POST['productAdd_cat_id'];
$subcat_id = $_POST['productAdd_subcat_id'];
$image = $_FILES['productAdd_new_pic_path'];

$sql = "INSERT INTO product( name, image, unit_price, quantity, cat_id, subcat_id) 
        VALUES ('$name','" . upload_image($image, $cat_id, $subcat_id) . "',$price,$quantity,$cat_id,$subcat_id)";

if ($conn->query($sql) === true) {
    echo '<script>sessionStorage.setItem("db_status","200");history.back();</script>';
} else {
    echo '<script>sessionStorage.setItem("db_status","400");history.back();</script>';
}

function upload_image($new_pic_path, $cat_id, $subcat_id)
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
