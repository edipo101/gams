<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('crud_mdl');
	}

	public function index()
	{
		$this->load->view('page/web_header');
		$this->load->view('web_form');
		$this->load->view('page/web_footer');
	}

	public function result(){
		$this->load->view('page/web_header');
		$this->load->view('form_result');
		$this->load->view('page/web_footer');
	}

	public function get_cedula(){
		$cedula = $this->input->post('cedula');
		$persona = $this->crud_mdl->fetch_by_field('personas', 'carnet', $cedula);
		if ($persona){
			$date = $persona->fecha_nacimiento;
			$new_date = new DateTime($date);
			$persona->fecha_nacimiento = $new_date->format('d/m/Y');
			echo json_encode($persona);
			// var_dump($persona);
		}

	}

	public function get_placa(){
		$placa = $this->input->post('placa');
		$movilidad = $this->crud_mdl->fetch_by_field('movilidads', 'placa', $placa);
		if ($movilidad){
			echo json_encode($movilidad);
		}
	}

	public function insert(){
		// var_dump($this->input->post());	
		// var_dump($_FILES);
		$id_persona = $this->input->post('id_persona');

		if ($id_persona == ''){ //Persona no registrada
			$persona = array(
				'carnet' => $this->input->post('cedula'),
				'exp' => $this->input->post('lugar_exp'),
				'nombres' => $this->input->post('nombres'),
				'apellidos' => $this->input->post('apellidos'),
				'sexo' => $this->input->post('genero'),
				'celular' => $this->input->post('telef_contacto'),
				'email' => $this->input->post('email'),
				'fecha_nacimiento' => date('Y-m-d', strtotime($this->input->post('fecha_nac'))),
				'direccion' => $this->input->post('direccion'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			);
			// var_dump($persona);

			$id_persona = $this->crud_mdl->create('personas', $persona);

			$licencia = array(
				'categoria' => $this->input->post('categoria'),
				'numero' => $this->input->post('licencia'),
				'persona_id' => $id_persona,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			);
			// var_dump($licencia);

			$id_licencia = $this->crud_mdl->create('licencias', $licencia);
		}		

		$movilidad = array(
			'clase' => $this->input->post('clase'),
			'marca' => $this->input->post('marca'),
			'tipo' => $this->input->post('tipo'),
			'modelo' => $this->input->post('modelo'),
			'color' => $this->input->post('color'),
			'servicio' => $this->input->post('servicio'),
			'placa' => $this->input->post('placa'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		);

		$id_movilidad = $this->crud_mdl->create('movilidads', $movilidad);

		// Cargar los documentos
		$config['upload_path'] = base_url().'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		// if ( ! $this->upload->do_upload('doc_licencia')){
		// 	$error = array('error' => $this->upload->display_errors());
		// }
		// else{
		// 	$data_licencia = array('upload_data' => $this->upload->data());
		// 	echo "success";
		// }

		$permiso = array(
			// 'motivo_descripcion' => $this->input->post('motivo_desc'),
			'tipo_id' => $this->input->post('tipo_permiso'),
			'motivo' => $this->input->post('motivo'),
			'propietario' => $id_persona,
			'conductor' => $id_persona,
			'movilidad_id' => $id_movilidad,
			'ruat' => NULL,
			// 'licencia' => $data_licencia['upload_data']['file_name'],
			'licencia' => NULL,
			'otro1' => NULL,
			'otro2' => NULL,
			'otro3' => NULL,
			'protocolo' => NULL,
			'protocolo_bioseguridad' => NULL,
			'fecha_solicitud' => date('Y-m-d H:i:s'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		);

		$id_permiso = $this->crud_mdl->create('permisos', $permiso);

		// var_dump($permiso);		

		header("Location: ".base_url()."form/result");
	}

}
