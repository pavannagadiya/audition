<?php
defined('BASEPATH') or exit('No direct script access allowed');
function callback_user_view($id)
{
	$edit_url = site_url('admin/participants/single_user?id=' . $id);
	return '<a href="' . $edit_url . '"  type="button" class="clickable" data-id=' . $id . '><i class="fa fa-eye" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}
function callback_slider_change($id)
{
	return '<a  type="button" data-toggle="modal" data-target="#change_slider_modal" class="slider-edit clickable" data-id=' . $id . '><i class="fa fa-pencil" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}
function callback_slider__button_link_title($id)
{
    $edit_url = site_url('admin/slider/buttons?id=' . $id);
	return   '<a href="' . $edit_url . '"  type="button" class="clickable" data-id=' . $id . '><i class="fa fa-pencil" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}
function callback_slider_delete($id)
{
	return '<a  type="button" class="slider-delete clickable" data-id=' . $id . '><i class="fa fa-trash" aria-hidden="true" aria-hidden="true" style="font-size:20px;color:#f44336"></i></a>';
}
function callback_user_image($src)
{
	$img_url = "";
	$img_url = BASE_URL('audition_asset/images/user_images/' . $src);
	return '<img src="' . $img_url . '" alt="sorry" hight="100" width="100">';
}
function callback_slider_image($src)
{
	$img_url = "";
	$img_url = BASE_URL('audition_asset/images/slider_images/' . $src);
	return ' <img src="' . $img_url . '" alt="sorry" hight="100" width="100%"><hr style="margin-top: 20px;margin-bottom: 20px;border: 0;border-top: 1px solid #000;">';
}