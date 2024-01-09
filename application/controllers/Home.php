<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PostModel');
	}
	public function index()
	{
		$data['title'] = 'Dr. Habib’s Foster CDC';
		$data['sub_title'] = 'Dr. Habib’s Foster CDC';
		$data['keywords'] = '';
		$data['description'] = '';
		$data['posts'] = $this->PostModel->getAllPost();
		// echo '<pre>';print_r($data['posts']);die;
		$this->load->view('pages/home', $data);
	}

	public function about_cdc()
	{
		$data['title'] = 'About CDC';
		$data['sub_title'] = 'About CDC';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('pages/about', $data);
	}

	public function experts()
	{
		$data['title'] = 'Experts';
		$data['sub_title'] = 'Experts';
		$data['keywords'] = 'Experts';
		$data['description'] = 'Experts';
		$this->load->view('pages/experts', $data);
	}

	public function expert($slug)
	{
		if($slug === 'dr-habib') {
			$data['title'] = 'Dr. Habib’s Pathan Khan';
			$data['sub_title'] = 'Dr. Habib’s Pathan Khan';
		} else if($slug === 'dr-sadiya') {
			$data['title'] = 'Dr. Sadiya Akhter';
			$data['sub_title'] = 'Dr. Sadiya Akhter';
		} else if($slug === 'dr-zafar') {
			$data['title'] = 'Dr. Zafar Sultana';
			$data['sub_title'] = 'Dr. Zafar Sultana';
		} else {
			$data['title'] = 'Dr. Habib’s Foster CDC';
			$data['sub_title'] = 'Dr. Habib’s Foster CDC';
		}
		$data['slug'] = $slug;
		$data['keywords'] = 'Experts';
		$data['description'] = 'Experts';
		$this->load->view('pages/profile', $data);
	}

	public function testimonials()
	{
		$data['title'] = 'Testimonials';
		$data['sub_title'] = 'Testimonials';
		$data['keywords'] = 'Testimonials';
		$data['description'] = 'Testimonials';
		$this->load->view('pages/testimonials', $data);
	}

	public function gallery()
	{
		$data['title'] = 'Gallery';
		$data['sub_title'] = 'Gallery';
		$data['keywords'] = 'Gallery';
		$data['description'] = '...';
		$this->load->view('pages/gallery', $data);
	}

	public function careers()
	{
		$data['title'] = 'Careers';
		$data['sub_title'] = 'Careers';
		$data['keywords'] = 'Careers';
		$data['description'] = 'Careers';
		$this->load->view('pages/careers', $data);
	}

	public function centers()
	{
		$data['title'] = 'Centers';
		$data['sub_title'] = 'Centers';
		$data['keywords'] = 'Centers';
		$data['description'] = 'Centers';
		$this->load->view('pages/centers', $data);
	}

	public function blogs()
	{
		$data['title'] = 'Blogs';
		$data['sub_title'] = 'Blogs';
		$data['keywords'] = 'Blogs';
		$data['description'] = 'Blogs';
		$data['posts'] = $this->PostModel->getAllPost();
		$this->load->view('pages/blogs', $data);
	}

	public function blog($slug)
	{
		$post = $this->PostModel->getPost($slug);
		$data['title'] = $post->post_title;
		$data['sub_title'] = $post->post_heading;
		$data['keywords'] = $post->post_keywords;
		$data['description'] = $post->post_description;
		$data['post'] = $post;
		$data['posts'] = $this->PostModel->getAllPostBySlug($slug);
		// echo '<pre>';print_r($data['posts']);die;
		$this->load->view('pages/single-blog', $data);
	}

	public function contact_us()
	{
		$data['title'] = 'Contact Us';
		$data['sub_title'] = 'Contact Us';
		$data['keywords'] = 'Contact Us';
		$data['description'] = 'Contact Us';
		$this->load->view('pages/contact', $data);
	}

	/****** Servies method ************/

	public function behaviour_therapy_hyderabad()
	{
		$data['title'] = 'Behaviour Therapy in Hyderabad for Children';
		$data['sub_title'] = 'Behaviour therapy in Hyderabad';
		$data['keywords'] = 'behaviour therapy in Hyderabad';
		$data['description'] = 'Behaviour therapy in Hyderabad at Dr. Habib’s Foster CDC creating the way for a brighter future with the perfect therapy and support – call now';
		$this->load->view('pages/services/behavioural_therapy', $data);
	}

	public function speech_therapy_hyderabad()
	{
		$data['title'] = 'Speech Therapy in Hyderabad at Dr. Habib’s Foster CDC';
		$data['sub_title'] = 'Speech Therapy Hyderabad';
		$data['keywords'] = 'speech therapy Hyderabad';
		$data['description'] = 'Speech therapy Hyderabad – for any type of speech difficulties, meet expert speech therapists at Dr. Habib’s Foster CDC – call for initial assessment.';
		$this->load->view('pages/services/speech_therapy', $data);
	}

	public function special_education()
	{
		$data['title'] = 'Special Education for Children';
		$data['sub_title'] = 'Special Education for Children';
		$data['keywords'] = 'Special Education for Children';
		$data['description'] = '...';
		$this->load->view('pages/services/special_education', $data);
	}

	public function best_parent_training()
	{
		$data['title'] = 'Best Parent Training Hyderabad';
		$data['sub_title'] = 'Best Parent Training Hyderabad';
		$data['keywords'] = 'best parent training Hyderabad';
		$data['description'] = 'Best parent training in Hyderabad at Dr. Habib’s Foster CDC –difficulty dealing with the challenging behaviors of your child, join our program.';
		$this->load->view('pages/services/parent_training', $data);
	}

	public function psychotherapy_and_counselling()
	{
		$data['title'] = 'Psychotherapy for Children';
		$data['sub_title'] = 'Psychotherapy for Children';
		$data['keywords'] = 'Psychotherapy for Children';
		$data['description'] = '...';
		$this->load->view('pages/services/psychotherapy_and_counselling', $data);
	}

	public function yoga_therapy()
	{
		$data['title'] = 'Yoga Therapy for Children';
		$data['sub_title'] = 'Yoga Therapy for Children';
		$data['keywords'] = 'Yoga Therapy for Children';
		$data['description'] = 'Yoga therapy for children is a holistic approach to nurturing their physical, mental, and emotional well-being. ';
		$this->load->view('pages/services/yoga_therapy', $data);
	}

	public function postural_and_mobility_therapy()
	{
		$data['title'] = 'Posture and Mobility Therapy';
		$data['sub_title'] = 'Posture and Mobility Therapy';
		$data['keywords'] = 'Posture and Mobility Therapy';
		$data['description'] = 'Children who have postural problems are prone to slow and gradual deterioration of their health over time.';
		$this->load->view('pages/services/postural_and_mobility_therapy', $data);
	}

	public function early_intervention_services()
	{
		$data['title'] = 'Early Intervention Services for Children';
		$data['sub_title'] = 'Early Intervention Services for Children';
		$data['keywords'] = 'Early Intervention Services for Children';
		$data['description'] = 'Early and effective support for young children and adolescents who are at risk of facing problems in the long run. ';
		$this->load->view('pages/services/early_intervention_services', $data);
	}

	public function cognitive_behavioural_therapy()
	{
		$data['title'] = 'Cognitive Behavioural Therapy in Hyderabad';
		$data['sub_title'] = 'Cognitive behavioural therapy in Hyderabad';
		$data['keywords'] = 'Cognitive behavioural therapy in Hyderabad';
		$data['description'] = 'Cognitive behavioural therapy in Hyderabad for children at Dr. Habib’s Foster CDC – a new approach to change the future destiny of your kid.';
		$this->load->view('pages/services/cognitive_behavioural_therapy', $data);
	}

	public function occupational_therapy_hyderabad()
	{
		$data['title'] = 'Occupational Therapy Hyderabad at Foster CDC';
		$data['sub_title'] = 'Occupational Therapy Hyderabad';
		$data['keywords'] = 'Occupational therapy Hyderabad';
		$data['description'] = 'Occupational Therapy Hyderabad at Dr. Habib’s Foster CDC – meet the best occupational therapists in Hyderabad to transform the life of your child';
		$this->load->view('pages/services/occupational_therapy', $data);
	}

	public function group_teaching()
	{
		$data['title'] = 'Group Teaching for Children';
		$data['sub_title'] = 'Group Teaching for Children';
		$data['keywords'] = 'Group Teaching for Children';
		$data['description'] = 'In an inclusive educational landscape, catering to the unique requirements of children with special needs is of utmost importance.';
		$this->load->view('pages/services/group_teaching', $data);
	}

	public function teachers_training()
	{
		$data['title'] = 'Teachers Training Programs';
		$data['sub_title'] = 'Teachers Training Programs';
		$data['keywords'] = 'Teachers Training Programs';
		$data['description'] = 'The teaching profession has become the most underrated profession in the world. For this reason, there is a dearth of qualified and trained teachers in India. ';
		$this->load->view('pages/services/teachers_training', $data);
	}

	public function certified_courses()
	{
		$data['title'] = '';
		$data['sub_title'] = '';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('pages/services/certified_courses', $data);
	}

	public function hydrotherapy()
	{
		$data['title'] = '';
		$data['sub_title'] = '';
		$data['keywords'] = '';
		$data['description'] = '';
		$this->load->view('pages/services/hydrotherapy', $data);
	}

	public function best_developmental_pediatrician_in_hyderabad()
	{
		$data['title'] = 'Best Developmental Pediatrician in Hyderabad';
		$data['sub_title'] = 'Best Developmental Pediatrician in Hyderabad';
		$data['keywords'] = 'best developmental pediatrician in Hyderabad';
		$data['description'] = 'Best developmental pediatrician in Hyderabad at Dr. Habib’s Foster CDC – meet expert specialists for thorough assessment & effective therapeutic interventions';
		$this->load->view('pages/services/developmental_therapy', $data);
	}

	public function autism_therapy()
	{
		$data['title'] = 'Autism Therapy in Hyderabad at Dr. Habib’s Foster CDC';
		$data['sub_title'] = 'Autism Therapy in Hyderabad';
		$data['keywords'] = 'autism therapy in Hyderabad';
		$data['description'] = 'Autism therapy in Hyderabad at Dr. Habib’s Foster Child Development Center (CDC) – Skilled therapists, latest techniques & interventions – book your appointment now';
		$this->load->view('pages/services/autism_therapy_in_hyderabad', $data);
	}

// --------------------------------------------------------

	// public function appointment()
	// {
	// 	$data['title'] = 'Appointment';
	// 	$data['sub_title'] = 'Appointment';
	// 	$this->load->view('pages/appointment', $data);
	// }

	// public function editor()
	// {
	// 	$data['title'] = 'Contact us';
	// 	$data['sub_title'] = 'Contact us';
	// 	$this->load->view('pages/editor', $data);
	// }
	
	// public function appointment_enquiry()
	// {
	//     $this->load->library('email_library');
	//     $arr = array( 
	//         'name' => $_POST['apt_name'],
	//         'email' => $_POST['apt_email'],
	//         'phone' => $_POST['apt_phone'],
	//         'date' => $_POST['apt_date'],
	//         'msg' => isset($_POST['apt_message']) ? $_POST['apt_message'] : "",
	//     );
    //     if($this->email_library->appointment_enquiry($arr))
    //     {
    //         $this->email_library->patient_confirmation_email($arr);
    //         $data['status'] = 200;
    //         $data['message'] = "Your appintment has been received, we will contact you shortly...";
    //         echo json_encode($data);
    //     } 
    //     else 
    //     {
    //         $data['status'] = 404;
    //         $data['message'] = "Something went wrong, please try again...";
    //         echo json_encode($data);
    //     }
	// }
	
	// public function contact_enquiry()
	// {
	//     $this->load->library('email_library');
	//     $arr = array( 
	//         'name' => $_POST['name'],
	//         'email' => $_POST['email'],
	//         'msg' => $_POST['message'],
	//     );
    //     if($this->email_library->contact_enquiry($arr))
    //     {
    //         $this->email_library->confirmation_email($arr);
    //         $data['status'] = 200;
    //         $data['message'] = "Your enquiry has been received, we will contact you shortly...";
    //         echo json_encode($data);
    //     } 
    //     else 
    //     {
    //         $data['status'] = 404;
    //         $data['message'] = "Something went wrong, please try again...";
    //         echo json_encode($data);
    //     }
	// }

}
