<?php

class Slider_model extends CI_Model
{
	public function add_slider($data)
	{
		$this->db->insert('audition_slider', $data);
		return $this->db->insert_id();
	}
	public function change_slider_image($id, $data)
	{
		$image = $this->db->select('slider_photo')
			->from('audition_slider')
			->where('id', $id)
			->get()
			->result_array();
		if (!empty($image)) {
			@unlink('./audition_asset/images/slider_images/' . $image[0]['slider_photo']);
		}
		$query = $this->db
			->where('id', $id)
			->update('audition_slider', $data);
		return $query;
	}
	public function get_all_slides()
	{
		$users = $this->db->select('*')
			->from('audition_slider')
			->get()
			->result_array();
		return $users;
	}
	public function delete_slides($id)
	{
        $this->db->select('slider_photo');
		$this->db->where('id', $id);
        $slider_name = $this->db->get('audition_slider')->row_array();
        if ($slider_name) {
            @unlink('./audition_asset/images/slider_images/' . $slider_name['slider_photo']);

            $this->db->where('id', $id)
                ->delete('audition_slider');
            $result = $this->db->affected_rows();
            return $result;
        } else {
            return false;
        }
	}
}
