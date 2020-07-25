<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->datetime = date('Y-m-d H:i:s');
	}

	public function index()
	{
		if ($this->session->userdata('token')!=NULL) {
			redirect('home');
		}

		$data['authUrl'] = $this->googleLogin();
		$data['loginUrl'] = $this->fbLogin();

		$this->load->view('authentication/login', $data);
	}

	function googleLogin()
	{
		include_once APPPATH . "libraries/google-api-php-client/Google_Client.php";
		include_once APPPATH . "libraries/google-api-php-client/contrib/Google_Oauth2Service.php";

    // Google Client Configuration
		$gClient = new Google_Client();
		$gClient->setApplicationName('Google Login');
		//ganti dengan client id
		$gClient->setClientId("");
		//ganti dengan client secret
		$gClient->setClientSecret("");
		//ganti dengan redirectUri
		$gClient->setRedirectUri("");
		
		$google_oauthV2 = new Google_Oauth2Service($gClient);

		if (isset($_REQUEST['code'])) {
			$gClient->authenticate();
			$this->session->set_userdata('token', $gClient->getAccessToken());
		}

		$token = $this->session->userdata('token');
		if (!empty($token)) {
			$gClient->setAccessToken($token);
		}

		if ($gClient->getAccessToken()) {
			$userProfile = $google_oauthV2->userinfo->get();
      //data session dan data utk insert database
			$userData = array(
				'oauth_provider' => 'Google',
				'oauth_uid'=>$userProfile['id'],
				'first_name' => $userProfile['given_name'],
				'last_name' => $userProfile['family_name'],
				'email' => $userProfile['email'],
				'locale' => $userProfile['locale'],
				'picture_url' => $userProfile['picture']
			);
			
			$this->session->set_userdata($userData);
			redirect("home");
		} else {
			return $gClient->createAuthUrl();
		}
		
	}

	function fbLogin()
	{
		require_once APPPATH . "libraries/Facebook/autoload.php";
		$fb = new Facebook\Facebook([
            'app_id' => "", // ganti dengan id app di facebook dev
            'app_secret' => "", //ganti dengan secret key di facebook dev
            'default_graph_version' => 'v2.8',
          ]);
		//ganti dengan redirecturl
		$redirectUrl = "";
		$permissions = ['email'];
		$helper = $fb->getRedirectLoginHelper();

		if (isset($_REQUEST['code'])) {
			$this->session->set_userdata('token', $helper->getAccessToken());
		}

		$accessToken = $this->session->userdata('token');
		if (!empty($accessToken)) {
			$response = $fb->get('/me?fields=id,name,gender,email,birthday', $accessToken);
			$pic= $fb->get('/me/picture?type=large', $accessToken);
			$oAuth2Client = $fb->getOAuth2Client();
			$tokenMetadata = $oAuth2Client->debugToken($accessToken);
			$tokenMetadata->validateAppId("998815773872659"); // ganti dengan id app di facebook dev
			$tokenMetadata->validateExpiration();

			if ($response) {
				$userProfile=$response->getDecodedBody();
				$userData['oauth_provider'] = 'Facebook';
				$userData['oauth_uid'] = $userProfile['id'];
				$userData['first_name'] = $userProfile['name'];
				$userData['last_name'] = '';
				$userData['email'] = $userProfile['email'];
				$userData['profile_url'] = '';
				$userData['picture_url'] = $pic->getHeaders()['Location'];
				
				$this->session->set_userdata($userData);
				redirect('home','refresh');
			}
		}else{
			$loginUrl = $helper->getLoginUrl($redirectUrl, $permissions);
			return $loginUrl;
		}
	}

	public function logout() {
		// echo "<pre>";print_r($this->session);die;
		$this->session->unset_userdata('token');
		$this->session->unset_userdata('userData');
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */