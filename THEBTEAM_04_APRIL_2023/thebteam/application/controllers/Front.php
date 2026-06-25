<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	
	public function index()
	{
		if(!empty($_POST)){
			$this->session->set_tempdata('message', 'Thank you for your message ! Our team will connect you shortly', 60);

		}else{

		}
		header("Access-Control-Allow-Origin: *");
		$this->load->view('front/index.php');
	}

	public function aboutus(){
		if(!empty($_POST)){
			$this->session->set_tempdata('message', 'Thank you for your message ! Our team will connect you shortly', 60);

		}else{

		}
		$this->load->view('front/aboutus');	
	}

	public function contactus(){
		if(!empty($_POST)){
			$this->session->set_tempdata('message', 'Thank you for your message ! Our team will connect you shortly', 60);

		}else{

		}
		$this->load->view('front/contactus');
		
	}

	public function services(){
		if(!empty($_POST)){
			$this->session->set_tempdata('message', 'Thank you for your message ! Our team will connect you shortly', 60);

		}else{

		}
		$this->load->view('front/services');
	}

	public function portfolio($slug=''){
		if(!empty($_POST)){
			$this->session->set_tempdata('message', 'Thank you for your message ! Our team will connect you shortly', 60);

		}else{

		}
		$data = array();
		if($slug==''){
			for ($i=1; $i<=8 ; $i=$i+1) {
				$log_directory = 'assets/portfolio/event-'.$i;
				foreach(glob($log_directory.'/*.*') as $file) {

   				$data['portfolio']['event-'.$i] = $file;
				}
			}
			$this->load->view('front/portfolio',$data);
		}else{
			$array = array();
			$array[0] = array(
				'event_name'=>'Launch of Globalization Foundation for Civilizational Harmony','description'=>'<p>Launch Function of “Globalization Foundation for Civilizational Harmony (India)” was organized by the company on Tuesday January 22 , 2008 at Chinmaya Mission, New Delhi. The event was chaired by former Indian President APJ Kalam who attended and addressed great religious and spiritual leaders belonging to different faiths which included His Holiness the Dalai Lama, founder of Hindu Dharma Acharya Sabha Swami Dayanand Saraswati, founder of the Art of Living Sri Sri Ravishankar, the ArchBishop of Mumbai Cardinal Oswald Gracias, the chief of Dar-ul-Uloom Deoband Moulana Mohammod Ali Madani and Rabbi Ezekiel Issac Malekar. Former Japanese Prime Minister Shinzo Abe sent a televised message on the occasion.</p>','slug'=>'launch-of-globalization-foundation-for-civilizational-harmony'
			);
			$array[1] = array('event_name'=>'Swami Vivekananda The Solo Drama','description'=>'<p>On 25th and 26th February 2007 Bharat Lok Sikhsha Parishad organized a cultural programme in Siri Fort Auditorium to spread awareness about the Ekal Movement. On the 26th, “Swami Vivekananda the Solo Drama” was enacted by Shri Shekhar Sen.</p><p> 
Shri L. K. Advani (leader of the opposition) and his wife Kamalji immensely appreciated “Swami Vivekananda the Solo Drama”. And Shri Shekhar Sen was honored for his divine performance by Shri Advaniji. On both evenings the program started with a Presentation on the Ekal Movement presented by Smt Manjushree.</p>','slug'=>'swami-vivekananda-the-solo-drama');
			$array[2]['event_name'] = 'Indo American Chamber of Commerce Fellowship Night';
			$array[2]['description'] = '<p>“Indo American Chamber of Commerce Fellowship Night” was organized on 13th APril 2007 at the Grand Hotel New Delhi. It was a cultural entertainment programme full of dance, drama, music and various entertaining acts</p>';
			$array[2]['slug'] = 'indo-american-chamber-of-commerce-fellowship-night';
			$array[3] = array(
				'event_name'=>'The Launch of Indian Cricket League',
				'description'=>'<p>The Launch event  of Indian Cricket League was managed by us in the year 2007 at the Mohali Cricket Ground. Our company took care of Stadium setup, structures, catering, production room, ticketing, visitor management and all the other event requirements.The Indian Cricket League (ICL) was a private cricket league funded by Zee Entertainment Enterprises that operated between 2007 and 2009 in India. Its two seasons included tournaments between four international teams (World XI, India, Pakistan and Bangladesh) and nine domestic teams notionally located in major Indian cities as well as Lahore, Pakistan and Dhaka Warriors based in Dhaka, Bangladesh. Later on the INdian Premier League was formed on similar lines.</p>',
				'slug'=>'the-launch-event-of-indian-cricket-league');
			$array[4] = array(
				'event_name'=>'Biggest Katha of Sri Sri Ravishankar Ji',
				'description'=>'<p>Ravi Shankar Ji Katha was organized in Delhi at Janmashtami Grounds in 2007. It was the biggest Katha event ever conducted in Delhi. Our company was responsible for the large set up that was able to accommodate such a large gathering.</p>'
				,'slug'=>'biggest-katha-of-sri-sri-ravishankar-ji');
			$array[5] = array(
				'event_name'=>'Inauguration of Shri Balaji Action Medical Institute',
				'description'=>'<p>The Inauguration Event for Shri Balaji Action Medical Institute, Paschim Vihar  New Delhi, was organized by our company on 1th April, 2005, which was established with the mission to provide world class affordable health care facilities to all sections of the society with a humanitarian touch, whilst maintaining high standards of ethical practices and professional competency with emphasis on training and education leading to research.</p>',
				'slug'=>'inauguration-of-shri-balaji-action-medical-institute');
			$array[6] = array(
				'event_name'=>"Maharaja Agrasen Institute of Technology’s inauguration",
				'description'=>'<p>Maharaja Agrasen Institute of Technology’s inauguration event was organized by our agency in 1999, in Rohini, New Delhi. The event was inaugurated by the then Prime Minister, esteemed Shri Atal Bihari Vajpayee. Maharaja Agrasen Institute of Technology is established by Maharaja Agrasen Technical Education Society promoted by a group of well known Industrialists, Businessman, Professionals and Philanthropists with an aim to promote quality education in the field of Technology.</p>',
				'slug'=>'maharaja-agrasen-institute-of-technology-inauguration');
			$array[7]=  array(
				'event_name'=>'28th Foundation Day of Maharaja Agrasen Hospital Charitable Trust','description'=>
				'<p>The 28th Founder’s Day event of Maharaja Agrasen Hospital Charitable Trust, was organized by our company in Punjabi Bagh, New Delhi in 2011. The event was graced by the presence of former President APJ Abdul Kalam. The event consisted of a large gathering and we provided entertainment for the programme through performances by Comic Artists.</p>',
				'slug'=>'28th-foundation-day-of-maharaja-agrasen-hospital-charitable-trust');
		
			foreach ($array as $key => $value) {
				$finalArr[$value['slug']] = $value;
			}
			$data = $finalArr[$slug];
			$log_directory = 'assets/portfolio/'.$slug;
			foreach(glob($log_directory.'/*.*') as $file) {

				$data['images'][] = $file;
			 }
			
			$this->load->view('front/portfolio_detail',$data);
		}

	}
}
