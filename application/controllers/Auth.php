<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth class.
 *
 * @extends CI_Controller
 */
class Auth extends CI_Controller {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('auth_model');
	}


	public function index() {}

	/**
	 * register function.
	 *
	 * @access public
	 * @return void
	 */
	public function register() {

		// create the data object
		$data = new stdClass();

    $data->title = 'Sign Up';

		// set validation rules
    $this->form_validation->set_rules('fullname', '<strong>full name</strong>', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('username', '<strong>username</strong>', 'trim|required|min_length[4]|max_length[15]|callback__username_regex_check|is_unique[users.user_name]', array('is_unique' => 'This <strong>username</strong> already exists. Please choose another one.') );
		$this->form_validation->set_rules('email', '<strong>email</strong>', 'trim|required|valid_email|max_length[30]|is_unique[users.user_email]', array('is_unique' => 'This <strong>email</strong> already exists. Please choose another one.'));
		$this->form_validation->set_rules('password', '<strong>password</strong>', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', '<strong>confirm password</strong>', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === false) {

			// validation not ok, send validation errors to the view
			$this->load->view('templates/header', $data);
			$this->load->view('pages/signup', $data);
			$this->load->view('templates/footer');

		} else {

			// set variables from the form
      $userfullname = $this->input->post('fullname');
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->auth_model->create_user($userfullname, $username, $email, $password)) {
        // user creation ok
        $data->success = "Congratulation. You've successfully registered. <a href=\"".site_url('login')."\">Login</a> to your account.";
        // send success message to the view
        $this->load->view('templates/header', $data);
  			$this->load->view('pages/signup', $data);
  			$this->load->view('templates/footer');


			} else {

				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				// send error to the view
        $this->load->view('templates/header', $data);
  			$this->load->view('pages/signup', $data);
  			$this->load->view('templates/footer');

			}

		}

	}

  /**
   * username regex check function
   *
   * @access public
   * @return boolean
   */
  public function _username_regex_check($str) {
    $regex = '/^[a-zA-Z0-9_]+$/';
    if ( preg_match($regex, $str) == TRUE ){
      return true;
    } else {
      $this->form_validation->set_message('_username_regex_check', 'The <strong>{field}</strong> must only contain letters, numbers, and/or underscores.');
      return false;
    }
  }

	/**
	 * login function.
	 *
	 * @access public
	 * @return void
	 */
	public function login() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

    $data->title = 'Sign In';

		// set validation rules
		$this->form_validation->set_rules('username', 'username', 'required|callback_username_regex_check',  array('username_regex_check' => 'The <strong>username</strong> must only contain letters, numbers, and/or underscores.') );
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == false) {

			// validation not ok, send validation errors to the view
			$this->load->view('templates/header', $data);
			$this->load->view('pages/login', $data);
			$this->load->view('templates/footer');

		} else {

			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($this->auth_model->resolve_user_login($username, $password)) {

				$user_id = $this->auth_model->get_user_id_from_username($username);
				$user    = $this->auth_model->get_user($user_id);

				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				// $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				// $_SESSION['is_admin']     = (bool)$user->is_admin;

				// user login ok
				$this->load->view('templates/header');
				$this->load->view('pages/login', $data);
				$this->load->view('templates/footer');

			} else {

				// login failed
				$data->error = 'Wrong username or password.';

				// send error to the view
        $this->load->view('templates/header');
				$this->load->view('pages/login', $data);
				$this->load->view('templates/footer');

			}

		}

	}

	/**
	 * logout function.
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {

		// create the data object
		$data = new stdClass();

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			// user logout ok
      $this->load->view('templates/header');
      $this->load->view('pages/login', $data);
      $this->load->view('templates/footer');

		} else {

			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');

		}

	}

}
