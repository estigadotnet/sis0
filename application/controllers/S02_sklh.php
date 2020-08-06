<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class S02_sklh extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('S02_sklh_model');
        $this->load->library('form_validation');
        if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 's02_sklh/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 's02_sklh/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 's02_sklh/index.html';
            $config['first_url'] = base_url() . 's02_sklh/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->S02_sklh_model->total_rows($q);
        $s02_sklh = $this->S02_sklh_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            's02_sklh_data' => $s02_sklh,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
          );
        $data['_view']    = 's02_sklh/s02_sklh_list';
        $data['_caption'] = 'Sekolah';
        $this->load->view('_layout', $data);
    }

    public function read($id)
    {
        $row = $this->S02_sklh_model->get_by_id($id);
        if ($row) {
            $data = array(
            		'idsklh' => $row->idsklh,
            		'Kode' => $row->Kode,
            		'Nama' => $row->Nama,
              );
            $data['button']   = 'Read';
            $data['_view']    = 's02_sklh/s02_sklh_read';
            $data['_caption'] = 'Sekolah';
            $this->load->view('_layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('s02_sklh'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('s02_sklh/create_action'),
      	    'idsklh' => set_value('idsklh'),
      	    'Kode' => set_value('Kode'),
      	    'Nama' => set_value('Nama'),
          );
        $data['_view']    = 's02_sklh/s02_sklh_form';
        $data['_caption'] = 'Sekolah';
        $this->load->view('_layout', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              	'Kode' => $this->input->post('Kode',TRUE),
              	'Nama' => $this->input->post('Nama',TRUE),
              );
            $this->S02_sklh_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('s02_sklh'));
        }
    }

    public function update($id)
    {
        $row = $this->S02_sklh_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('s02_sklh/update_action'),
            		'idsklh' => set_value('idsklh', $row->idsklh),
            		'Kode' => set_value('Kode', $row->Kode),
            		'Nama' => set_value('Nama', $row->Nama),
              );
            $data['_view']    = 's02_sklh/s02_sklh_form';
            $data['_caption'] = 'Sekolah';
            $this->load->view('_layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('s02_sklh'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idsklh', TRUE));
        } else {
            $data = array(
            		'Kode' => $this->input->post('Kode',TRUE),
            		'Nama' => $this->input->post('Nama',TRUE),
              );
            $this->S02_sklh_model->update($this->input->post('idsklh', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('s02_sklh'));
        }
    }

    public function delete($id)
    {
        $row = $this->S02_sklh_model->get_by_id($id);

        if ($row) {
            $this->S02_sklh_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('s02_sklh'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('s02_sklh'));
        }
    }

    public function _rules()
    {
      	$this->form_validation->set_rules('Kode', 'kode', 'trim|required');
      	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');

      	$this->form_validation->set_rules('idsklh', 'idsklh', 'trim');
      	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "Sekolah.xls";
        $judul = "Sekolah";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
      	xlsWriteLabel($tablehead, $kolomhead++, "Kode");
      	xlsWriteLabel($tablehead, $kolomhead++, "Nama");

      	foreach ($this->S02_sklh_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->Kode);
      	    xlsWriteLabel($tablebody, $kolombody++, $data->Nama);

      	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=Sekolah.doc");

        $data = array(
            's02_sklh_data' => $this->S02_sklh_model->get_all(),
            'start' => 0
        );

        $this->load->view('s02_sklh/s02_sklh_doc',$data);
    }

    // aktifkan sekolah sesuai pilihan user
    public function set_aktif($idsklh) {
      // simpan session data sekolah
      $s02_sklh = $this->S02_sklh_model->get_by_id($idsklh);
      $this->session->set_userdata('idsklh', $idsklh);
      $this->session->set_userdata('kode_sklh', $s02_sklh->Kode);
      $this->session->set_userdata('nama_sklh', $s02_sklh->Nama);
      redirect('/');
    }

}

/* End of file S02_sklh.php */
/* Location: ./application/controllers/S02_sklh.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-08-05 09:21:40 */
/* http://harviacode.com */
