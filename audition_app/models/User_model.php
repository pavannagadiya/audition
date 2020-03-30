<?php

class User_model extends CI_Model
{
    public function check_email($email, $phone)
    {
        $query = $this->db->select('*')
            ->where('user_email', $email)
            ->or_where('user_contact', $phone)
            ->get('user_registration');
        $result = $query->row_array();
        return $result;
    }

    public function create_user($data)
    {
        $this->db->insert('user_registration', $data);
        return $this->db->insert_id();
    }
    public function get_all_participants()
    {
        $this->datatables->select('u.*,p.user_photo')
            ->from('user_registration u')
            ->add_column('View', '$1', 'callback_user_view(u.id)');
        echo $this->datatables->generate();
        /* $users = $this->db->select('u.*,p.user_photo')
        ->from('user_registration u')
        ->join('user_photos p', 'p.user_id = u.id')
        ->get()
        ->result_array();
        return $users; */
    }
    // public function user_image($data)
    // {
    //     $query = $this->db->insert('user_photos', $data);
    //     return $query;
    // }
    public function user_counts()
    {
        $data['user'] = $this->db->select('*')
            ->from('user_registration')
            ->get()->num_rows();
        $data['assign_date_users'] = $this->db->select('*')
			->from('user_registration')
			->where('assign_date is NOT NULL', null, false)
            ->get()->num_rows();
        $data['not_assign_date_users'] = $this->db->select('*')
			->from('user_registration')
			->where('assign_date', null)
            ->get()->num_rows();
        $data['slider'] = $this->db->select('*')
            ->from('audition_slider')
            ->get()->num_rows();
        return $data;
    }
    public function dateNotAssignIds()
    {
        $data = $this->db->select('id')
			->from('user_registration')
			->where('assign_date', null)
            ->get()->result_array();
        return $data;
    }
    public function single_user($id)
    {
        $query = $this->db->select('*')
            ->from('user_registration')
            ->where('id', $id)
            ->get();

        $result = $query->row_array();

        /* $query1 = $this->db->select('*')
            ->from('user_photos')
            ->where('user_id', $result['id'])
            ->get(); */

        // $images = $query1->result_array();
        // $result['images'] = $images;
        return $result;
    }

    public function check_login($name, $pass)
    {
        $query = $this->db->select('*')
            ->from('admin')
            ->where('email', $name)
            ->where('password', $pass)
            ->get();
        $result = $query->row_array();
        return $result;
    }
    public function checkDate($number)
    {
        $query = $this->db->select('assign_date')
            ->from('user_registration')
            ->where('user_contact', $number)
            ->get();
        $result = $query->row_array();
        return $result;
    }
    public function assign_date($id, $date)
    {
		foreach ($id as $id) {
			$this->db->set('assign_date',$date);
			$this->db->where('id',$id);
        	$this->db->update('user_registration');
		}
		return;
    }
}
?>
