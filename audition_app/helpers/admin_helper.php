<?php
defined('BASEPATH') or exit('No direct script access allowed');
/* function callback_user_block($id, $isactive)
{
    $class = 'btn-block';
    $class1 = 'fa-ban';
    if ($isactive) {

        $class = 'btn-unblock';
        $class1 = 'fa-plus-circle';
    }
    return "<button type='button' class='btn {$class}' data-id='{$id}'><i class='fa {$class1}' style='font-size:20px;color:#f44336'></i></button>";
}
 */
function callback_user_view($id)
{
    /* return '<button type="button" class="btn btn-delete" data-id=' . $id . '><i class="fa fa-eye" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></button>'; */

    $edit_url = site_url('admin/participants/single_user?id=' . $id);
    return '<a href="' . $edit_url . '"  type="button" class="btn btn-edit" data-id=' . $id . '><i class="fa fa-eye" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}
function callback_user_image($src)
{
    $img_url = "";
    $img_url = BASE_URL('audition_asset/images/user_images/' . $src);
    return '<img src="' . $img_url . '" alt="sorry" hight="100" width="100">';
}

/* function callback_user_image($src)
{
    $img_url = "";
    $img_url = base_url('mp_asset/images/product/' . $src);
    return '<img src="' . $img_url . '" alt="sorry" hight="100" width="100">';
}

function callback_user_edit($id)
{
    $edit_url = site_url('admin/user_data?id=' . $id);
    return '<a href="' . $edit_url . '"  type="button" class="btn btn-edit" data-id=' . $id . '><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}

function callback_product_edit($id)
{
    $edit_url = site_url('admin/prod_data?id=' . $id);
    return '<a href="' . $edit_url . '"  type="button" class="btn btn-edit" data-id=' . $id . '><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}

function callback_product_see($id)
{
    $edit_url = site_url('admin/product_by_catagory?id=' . $id);
    return '<a href="' . $edit_url . '"  type="button" class="btn btn-edit" data-id=' . $id . '><i class="fa fa-eye" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}

function callback_admin_edit($id)
{
    $edit_url = site_url('admin/admin_data?id=' . $id);
    return '<a href="' . $edit_url . '"  type="button" class="btn btn-edit" data-id=' . $id . '><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}
 */