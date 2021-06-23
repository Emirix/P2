<?php


class Admin extends MyController
{
	var $bildirimler;
	var $user;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("dbx");

		if ($this->session->userdata('rank') == "admin" && $this->session->userdata('rank')) {
		} else {
			echo "Erişim izni yok";
			die();
		}


		$this->bildirimler = $this->db->order_by('id', 'DESC');
		$this->bildirimler = $this->db->get("staff_bildirim")->result_array();


		$this->user = $this->db->where("id", $this->session->userdata("admin_id"));
		$this->user = $this->db->get("admin")->result_array();
	}

	public function index()
	{
	

		$smcount = $this->db->query('SELECT * FROM sm_hesap')->num_rows();
		$resellercount = $this->db->query('SELECT * FROM reseller_hesap')->num_rows();
		$staffcount = $this->db->query('SELECT * FROM staff_hesap')->num_rows();
		$toplam = $smcount + $resellercount + $staffcount;

		$beklemedekiSiparisler = $this->db->where("durum", "beklemede");
		$beklemedekiSiparisler = $this->db->get("siparisler")->result_array();



		$iptalSiparisler = $this->db->where("durum", "iptal");
		$iptalSiparisler = $this->db->get("siparisler")->result_array();

		$tamamSiparisler = $this->db->where("durum", "tamam");
		$tamamSiparisler = $this->db->get("siparisler")->result_array();

		$hazirlSiparisler = $this->db->where("durum", "hazirlaniyor");
		$hazirlSiparisler = $this->db->get("siparisler")->result_array();

		$kargoSiparisler = $this->db->where("durum", "kargo");
		$kargoSiparisler = $this->db->get("siparisler")->result_array();

		$onay = $this->db->where("durum", "onay_beklemede");
		$onay = $this->db->get("siparisler")->result_array();



		$hesap = $this->db->get("sm_hesap")->result_array();
		$toplamBorc = 0;
		foreach ($hesap as $borc) {
			$toplamBorc += $borc["borc"];
		}

		$toplamUrunler = $this->db->query("SELECT * FROM urunler")->num_rows();

		$this->load->view('Admin/index', [
			"toplam_hesap" => $toplam,
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"toplam_urun" => $toplamUrunler,
			"toplamBorc" => $toplamBorc,
			"bk" => $beklemedekiSiparisler,
			"iptal" => $iptalSiparisler,
			"tamam" => $tamamSiparisler,
			"hazirl" => $hazirlSiparisler,
			"kargo" => $kargoSiparisler,
			"o" => $onay
		]);
	}

	public function createaccount()
	{
		$this->load->view('Admin/hesap-olustur', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function createreseller()
	{
		$this->load->view('Admin/reseller-hesap', [
			"magazalar" => $this->db->get("sm_hesap")->result_array(),
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}
	public function createstaff()
	{
		$this->load->view('Admin/staff-hesap', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function createmanager()
	{
		$this->load->view('Admin/shopmanager-hesap', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function allaccount()
	{
		$reseller_hesaplar = $this->dbx->tumHesaplarReseller();
		$this->load->view('Admin/tum-hesaplar', [
			"res" => $reseller_hesaplar,
			"sm" => $this->db->get("sm_hesap")->result_array(),
			"staff" => $this->db->get("staff_hesap")->result_array(),
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function ioproducts()
	{
		$orders = $this->db->get("siparisler")->result_array();

		$aldiklari = [];
		$magazalar = [];

		foreach ($orders as $id) {
			$i = $this->db->where("id", $id["aldigi_urun"]);
			$i = $this->db->get("urunler")->result_array();
			array_push($aldiklari, $i);
		}

		foreach ($orders as $x) {
			$i = $this->db->where("id", $id["alan"]);
			$i = $this->db->get("sm_hesap")->result_array();
			array_push($magazalar, $i);
		}


		$this->load->view('Admin/islemdeki-siparisler', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"orders" => $orders,
			"urunler" => $aldiklari,
			"magazalar" => $magazalar
		]);
	}

	public function orderdetail($id, $urunId)
	{
		$product = $this->db->where("id", $urunId);
		$product = $this->db->get("urunler")->result_array();

		$order = $this->db->where("id", $id);
		$order = $this->db->get("siparisler")->result_array();

		$this->load->view('Admin/siparis-detay', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"urun" => $product,
			"order" => $order,
			"id" => $id,
			"urunId" => $urunId,
		]);
	}


	public function siparisfatura($id, $urunId)
	{
		$product = $this->db->where("id", $urunId);
		$product = $this->db->get("urunler")->result_array();

		$order = $this->db->where("id", $id);
		$order = $this->db->get("siparisler")->result_array();

		$alan = $this->db->where("id", $order[0]["alan"]);
		$alan = $this->db->get("sm_hesap")->result_array();

		$borc = $this->db->where("fatura", $id);
		$borc = $this->db->get("borclar")->result_array();

		/** SONRADAN EKLENEN KDV KODLARI  */




		$this->load->view('Admin/siparis-fatura', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"order" => $order,
			"borclar" => $borc,
			"alan" => $alan,
			"urun" => $product,
		]);
	}

	public function tumsiparisler()
	{

		$orders = $this->db->get("siparisler")->result_array();


		$urunler = $this->db->get("urunler")->result_array();


		$magazalar = $this->db->get("sm_hesap")->result_array();

		$alanlar = [];
		$alinanlar = [];

		foreach ($orders as $o) {

			$i = $this->db->where("id", $o["alan"]);
			$i = $this->db->get("sm_hesap")->result_array();
			array_push($alanlar, $i);
		}

		foreach ($orders as $o) {

			$i = $this->db->where("id", $o["aldigi_urun"]);
			$i = $this->db->get("urunler")->result_array();
			array_push($alinanlar, $i);
		}

		$this->load->view('Admin/tum-siparisler', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"orders" => $orders,
			"urunler" => $alinanlar,
			"magazalar" => $alanlar
		]);
	}

	public function urunduzenle()
	{
		if (!isset($_GET["urunId"])) {
			echo "hata";
			die();
		}
		$urun = $this->db->where("id", $_GET["urunId"]);
		$urun = $this->db->get("urunler")->result_array();

		$this->load->view('Admin/urun-duzenle', [
			"urun" => $urun,
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}
	public function addproduct()
	{
		$this->load->view('Admin/urun-ekle', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function alltickets()
	{
		$tickets = $this->db->order_by("guncelleme", "DESC");
		$tickets = 	$this->db->get("ticket")->result_array();

		$this->load->view('Admin/tum-talepler', [
			"tickets" => $tickets,
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function productlist()
	{
		$urunler = $this->db->order_by("id", "DESC");

		$urunler = $this->db->get("urunler")->result_array();

		$this->load->view('Admin/urun-liste', [
			"urunler" => $urunler,
			"bildirimler" => $this->bildirimler,
			"user" => $this->user
		]);
	}

	public function viewticket()
	{
		if (!isset($_GET["ticketId"])) {
			echo "hata";
			die();
		}

		$cevaplar = $this->db->where("to_id", $_GET["ticketId"]);
		$cevaplar = $this->db->order_by('id', 'DESC');
		$cevaplar = $this->db->get("ticket_yanit")->result_array();

		$ticketInfo = $this->db->where("id", $_GET["ticketId"]);
		$ticketInfo = $this->db->get("ticket")->result_array();


		/*** */


		$this->load->view('admin/viewticket', [
			"cevaplar" => $cevaplar,
			"ticketx" => $ticketInfo,
			"user" => $this->user,
			"bildirimler" => $this->bildirimler,

		]);
	}




	function kapat()
	{
		$this->db->set("durum", "Kapalı");
		$this->db->where("id", $_GET["id"]);
		$this->db->update("ticket");


		$u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
		$u = $this->db->where('id', $_GET["id"]);
		$u = $this->db->update('ticket');
		header("Location: " . base_url("/admin/alltickets"));
	}

	function urunekle()
	{

		if (empty($_POST["val-marka"])) {
			echo "Boş alan bırakmayınız";
			die();
		}

		if (empty($_POST["val-urunad"])) {
			echo "Boş alan bırakmayınız";
			die();
		}

		if (empty($_POST["val-kod"])) {
			echo "Boş alan bırakmayınız";
			die();
		}

		if (empty($_POST["val-aciklama"])) {
			echo "Boş alan bırakmayınız";
			die();
		}

		if (empty($_POST["val-fiyat"])) {
			echo "Boş alan bırakmayınız";
			die();
		}

		if(!isset($_POST["val-matrasmi"]) && !isset($_POST["val-toppermi"])){
			echo "Matras yada topper seçimini yapınız";
			die();
		}
		

		echo "KATEGORI:".$_POST["val-kategori"];
		

		
	

		$countfiles = count($_FILES['files']['name']);

		$upload_location = "assets/urun/";

		$files_arr = array();

		// Loop all files
		for ($index = 0; $index < $countfiles; $index++) {

			if (isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '') {
				// File name
				$filename = "urun_" . rand(0, 9000) . rand(0, 9000) . $_FILES['files']['name'][$index];

				// Get extension
				$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

				// Valid image extension
				$valid_ext = array("png", "jpeg", "jpg");

				// Check extension
				if (in_array($ext, $valid_ext)) {

					// File path
					$path = $upload_location . $filename;

					// Upload file
					if (move_uploaded_file($_FILES['files']['tmp_name'][$index], $path)) {
						$files_arr[] = $path;
					}
				}
			}
		}

		$stok = null;
		if($_POST["val-stoknp"] == "true"){
			$stok = 9999999;
		}else{
			$stok = $_POST["val-stok"];
		}



		$this->db->insert("urunler", [
			"marka" => $_POST["val-marka"],
			"ad" => $_POST["val-urunad"],
			"urun_kodu" => $_POST["val-kod"],
			"aciklama" => $_POST["val-aciklama"],
			"stok" => $stok,
			"stoknp" => $_POST["val-stoknp"],
			"fiyat" => $_POST["val-fiyat"],
			"fotograflar" => implode(",", $files_arr),
			"topper" => $_POST["val-topper"],
			"matras" => $_POST["val-matras"],
			"bekleme" => $_POST["val-surevarmi"],
			"bekleme_suresi" => $_POST["val-sureler"],
			"kategori"=>$_POST["val-kategori"]


		]);
	}

	function urunsil()
	{
		if (!isset($_GET["urun"])) {
			echo "hata";
		}
		$this->db->where("id", $_GET["urunId"]);
		$this->db->delete("urunler");
		header("Location: " . base_url("admin/productlist"));
	}


	public function urunupdate()
	{

		if (isset($_FILES["files"])) {

			$countfiles = count($_FILES['files']['name']);
			$upload_location = "assets/urun/";
			$files_arr = array();
			for ($index = 0; $index < $countfiles; $index++) {

				if (isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '') {
					$filename = "urun_" . rand(0, 9000) . rand(0, 9000) . $_FILES['files']['name'][$index];
					$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
					$valid_ext = array("png", "jpeg", "jpg");
					if (in_array($ext, $valid_ext)) {
						$path = $upload_location . $filename;

						// Upload file
						if (move_uploaded_file($_FILES['files']['tmp_name'][$index], $path)) {
							$files_arr[] = $path;
						}
					}
				}
			}

			$this->db->set([
				"marka" => $_POST["val-marka"],
				"ad" => $_POST["val-urunad"],
				"urun_kodu" => $_POST["val-kod"],
				"etiketler" => $_POST["val-etiket"],
				"aciklama" => $_POST["val-aciklama"],
				"stok" => $_POST["val-stok"],
				"stoknp" => $_POST["val-stoknp"],
				"fotograflar" => implode(",", $files_arr),
				"fiyat" => $_POST["val-fiyat"]
			]);
			$this->db->where("id", $_POST["vid"]);
			$this->db->update("urunler");
		} else {
			$this->db->set([
				"marka" => $_POST["val-marka"],
				"ad" => $_POST["val-urunad"],
				"urun_kodu" => $_POST["val-kod"],
				"etiketler" => $_POST["val-etiket"],
				"aciklama" => $_POST["val-aciklama"],
				"stok" => $_POST["val-stok"],
				"stoknp" => $_POST["val-stoknp"],
				"fiyat" => $_POST["val-fiyat"]

			]);
			$this->db->where("id", $_POST["vid"]);
			$this->db->update("urunler");
		}
	}



	function cevap()
	{
		$data = [];
		$dosyalar = "";
		if (isset($_FILES["files"]["name"])) {
			$number_of_files = sizeof($_FILES['files']["tmp_name"]);
			$files = $_FILES["files"];
			$config["upload_path"] = "./assets/ticket/";
			$config["allowed_types"] = "*";

			for ($i = 0; $i < $number_of_files; $i++) {
				$_FILES["files"]["name"] = $files["name"][$i];
				$_FILES["files"]["type"] = $files["type"][$i];
				$_FILES["files"]["tmp_name"] = $files["tmp_name"][$i];
				$_FILES["files"]["error"] = $files["error"][$i];
				$_FILES["files"]["size"] = $files["size"][$i];

				$this->upload->initialize($config);
				if ($this->upload->do_upload("files", $config)) {
					$data = $this->upload->data();
					$dosyalar = $dosyalar . $data["file_name"] . "|";
				}
			}
		}





		$this->db->insert("ticket_yanit", [
			"mesaj" => $_POST["val-mesaj"],
			"yetki" => "Admin",

			"to_id" => $_POST["toid"],
			"dosyalar" => substr($dosyalar, 0, -1),
			"ad_soyad" => $_POST["valo"]
		]);







		$u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
		$u = $this->db->where('id', $_POST["toid"]);
		$u = $this->db->update('ticket');



		$this->db->insert("sm_bildirim", [
			"to_id" => $_POST["user_id"],
			"type" => "talep_yanit",
			"talep_id" => $_POST["toid"]
		]);


		$oku = $this->db->set("okundu", 0);
		$oku = $this->db->where("id", $_POST["user_id"]);
		$oku =  $this->db->update("sm_hesap");


		$this->db->set("durum", "Yanit");
		$this->db->where("id", $_POST["toid"]);
		$this->db->update("ticket");




		header("Location: " . base_url("admin/viewticket?ticketId=" . $_POST["toid"]));
	}


	function store()
	{

		$listelencekUrunler = null;

		if(!isset($_GET["filtre"])){
			header("Location: ".base_url("admin/store/?filtre=all"));
		}

		if($_GET["filtre"] == "all"){
			
			$listelencekUrunler = $this->db->get("urunler")->result_array();
		}

		if($_GET["filtre"] == "matras"){
			$listelencekUrunler = $this->db->where("kategori","urun-matras");
			$listelencekUrunler = $this->db->get("urunler")->result_array();
		}

		if($_GET["filtre"] == "topper"){
			$listelencekUrunler = $this->db->where("kategori","urun-topper");
			$listelencekUrunler = $this->db->get("urunler")->result_array();
		}

	   
		$yildiz = $this->db->get("yorumlar")->result_array();

		$yildiz3 = [];
		$yildiz2 = [];
		$yildiz1 = [];
		$yildiz4 = [];
		$yildiz5 = [];
		$yildizyok = false;
		foreach($yildiz as $key=>$y){
			

			if($y["yildiz"]=="3"){
				array_push($yildiz3,$y["yildiz"]);
			}

			if($y["yildiz"]=="2"){
				array_push($yildiz2,$y["yildiz"]);
			}

			if($y["yildiz"]=="1"){
				array_push($yildiz1,$y["yildiz"]);
			}
			if($y["yildiz"]=="4"){
				array_push($yildiz4,$y["yildiz"]);
			}
			if($y["yildiz"]=="5"){
				array_push($yildiz5,$y["yildiz"]);
			}
		}

		if((count($yildiz1) + count($yildiz2) + count($yildiz3) + count($yildiz4) + count($yildiz5)) == 0){
			$yildizyok = true;
		}



		$this->load->view('admin/magaza', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"urunler"=>$listelencekUrunler,
                "yorumlar"=>$this->db->get("yorumlar")->result_array(),
                "yildiz3"=>$yildiz3 ,
                "yildiz2"=>$yildiz2 ,
                "yildiz1"=>$yildiz1, 
                "yildiz4"=>$yildiz4 ,
                "yildiz5"=>$yildiz5 ,
                "yildizvarmi"=>$yildizyok
		]);
	}

	function productdetail($id)
	{
		$urun = $this->db->where("id", $id);
		$urun = $this->db->get("urunler")->result_array();

		$yorumlar = $this->db->where("to_id", $id);
		$yorumlar = $this->db->get("yorumlar")->result_array();

		$polyetherMatras = $this->db->where("type", "Polyether Matras");
		$polyetherMatras = $this->db->get("matras")->result_array();

		$pocketPolyMatras = $this->db->where("type", "Pocket Poly Matras");
		$pocketPolyMatras = $this->db->get("matras")->result_array();

		$pocketHrMatras = $this->db->where("type", "Pocket HR Matras");
		$pocketHrMatras = $this->db->get("matras")->result_array();

		$hrMatras = $this->db->where("type", "HR Matras");
		$hrMatras = $this->db->get("matras")->result_array();

		$pocketHr25 = $this->db->where("type", "Pocket HR 2x5");
		$pocketHr25 = $this->db->get("matras")->result_array();

		$polyetherTopper = $this->db->where("type", "Polyether Topper");
		$polyetherTopper = $this->db->get("topper")->result_array();

		$nasaTopper  = $this->db->where("type", "Nasa Topper");
		$nasaTopper  = $this->db->get("topper")->result_array();

		$hrTopper  = $this->db->where("type", "HR Topper");
		$hrTopper  = $this->db->get("topper")->result_array();


		$yildiz = $this->db->where("to_id", $id);
		$yildiz = $this->db->get("yorumlar")->result_array();

		$yildiz3 = [];
		$yildiz2 = [];
		$yildiz1 = [];
		$yildiz4 = [];
		$yildiz5 = [];
		$yildizyok = false;
		foreach ($yildiz as $key => $y) {
			if ($y["yildiz"] == "3") {
				array_push($yildiz3, $y["yildiz"]);
			}

			if ($y["yildiz"] == "2") {
				array_push($yildiz2, $y["yildiz"]);
			}

			if ($y["yildiz"] == "1") {
				array_push($yildiz1, $y["yildiz"]);
			}
			if ($y["yildiz"] == "4") {
				array_push($yildiz4, $y["yildiz"]);
			}
			if ($y["yildiz"] == "5") {
				array_push($yildiz5, $y["yildiz"]);
			}
		}

		if ((count($yildiz1) + count($yildiz2) + count($yildiz3) + count($yildiz4) + count($yildiz5)) == 0) {
			$yildizyok = true;
		}


		$this->load->view('admin/urun-detay', [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"urun" => $urun,
			"id" => $id,
			"yorumlar" => $yorumlar,


			"polyetherMatras" => $polyetherMatras,
			"pocketPolyMatras" => $pocketPolyMatras,
			"pocketHrMatras" => $pocketHrMatras,
			"hrMatras" => $hrMatras,
			"pocketHr25" => $pocketHr25,
			"polyetherTopper" => $polyetherTopper,
			"nasaTopper" => $nasaTopper,
			"hrTopper" => $hrTopper,
			"yildiz3" => $yildiz3,
			"yildiz2" => $yildiz2,
			"yildiz1" => $yildiz1,
			"yildiz4" => $yildiz4,
			"yildiz5" => $yildiz5,
			"yildizvarmi" => $yildizyok
		]);
	}


	function yorumekle()
	{

		$aldiklari = explode("yawhe", $this->user[0]["aldiklari"]);
		$aldimi = "";
		if (in_array($_POST["urun_id"], $aldiklari)) {
			$aldimi = "aldi";
		} else {
			$aldimi = "almadi";
		}


		$this->db->insert("yorumlar", [

			"to_id" => $_POST["urun_id"],
			"yildiz" => $_POST["star"],
			"ad_soyad" => $_POST["ad_soyad"],
			"yorum" => $_POST["yorum"],
			"durum" => $aldimi,
			"fotograf" => $_POST["foto"]

		]);

		header("Location: " . base_url("/admin/productdetail/" . $_POST["back"]));
	}

	function borc()
	{
		$hesap = $this->db->where("borc >", 0);
		$hesap = $this->db->get("sm_hesap")->result_array();
		$toplamBorc = 0;
		foreach ($hesap as $borc) {
			$toplamBorc += $borc["borc"];
		}

		//die();
		$this->load->view("admin/borc", [
			"bildirimler" => $this->bildirimler,
			"user" => $this->user,
			"toplamBorc" => $toplamBorc,
			"magazalar" => $hesap
		]);
	}


	function getmagaza($id)
	{

		$magaza = $this->db->where("id", $id);
		$magaza = $this->db->get("sm_hesap")->result_array();



		echo json_encode([
			"magaza" => $magaza
		]);
	}

	function getsiparisborc($id)
	{
		$siparis = $this->db->where("id", $id);
		$siparis = $this->db->get("siparisler")->result_array();

		echo json_encode($siparis);
	}


	function borckapat()
	{
		$this->db->set("borc", "borc-" . $_POST['sil'], FALSE);
		$this->db->where("id", $_POST["id"]);
		$this->db->update("sm_hesap");


		$magazaBorc = $this->db->where("id", $_POST["id"]);
		$magazaBorc = $this->db->get("sm_hesap")->result_array();

		$this->db->insert("borclar",[
			"tutar"=>$_POST["sil"],
			"alan"=>$_POST["id"]
		]);



		$hesap = $this->db->get("sm_hesap")->result_array();
		$toplamBorc = 0;

		foreach ($hesap as $borc) {
			$toplamBorc += $borc["borc"];
		}
		echo json_encode([
			"toplamBorc" => $toplamBorc,
			"magazaBorc" => $magazaBorc
		]);
	}

	function cancelorder($id, $alan, $urun)
	{
		$this->db->set("durum", "iptal");
		$this->db->set("teslimat", "1999-09-09 00:00:00");
		$this->db->where("id", $id);
		$this->db->update("siparisler");

		$this->db->insert("sm_bildirim", [
			"to_id" => $alan,
			"type" => "iptal",
			"siparisId" => $id,
			"urun" => $urun,



		]);

		$oku = $this->db->set("okundu", 0);
		$oku = $this->db->where("id", $alan);
		$oku =  $this->db->update("sm_hesap");


		header("Location: " . base_url("admin/tumsiparisler"));
	}

	function cancelorderback($id, $alan, $urun)
	{
		$this->db->set("durum", "iptal");
		$this->db->set("teslimat", "1999-09-09 00:00:00");
		$this->db->where("id", $id);
		$this->db->update("siparisler");

		$this->db->insert("sm_bildirim", [
			"to_id" => $alan,
			"type" => "iptal",
			"siparisId" => $id,
			"urun" => $urun,

		]);

		$oku = $this->db->set("okundu", 0);
		$oku = $this->db->where("id", $alan);
		$oku =  $this->db->update("sm_hesap");



		header("Location: " . base_url("admin/ioproducts"));
	}

	function siparisonayla($id)
	{
		$this->db->set("durum", "beklemede");
		$this->db->where("id", $id);
		$this->db->update("siparisler");

		header("Location: " . base_url("admin/ioproducts"));
	}


	function urundurum($id, $durum)
	{
		if ($durum == 1) {
			$this->db->set("durum", "tamam");
			$this->db->set("teslimat", date("Y-m-d H:m:s"));
			$this->db->where("id", $id);
			$this->db->update("siparisler");
			header("Location: " . base_url("admin/tumsiparisler"));
		}

		if ($durum == 2) {
			if (!isset($_GET)) {
				echo "Hata lütfen doğru link kullanınız";
				die();
			}
			$this->db->set("durum", $_GET["d"]);
			//$this->db->set("teslimat",date("Y-m-d H:m:s"));
			$this->db->where("id", $id);
			$this->db->update("siparisler");
			header("Location: " . base_url("admin/ioproducts"));
		}
	}

	function oku()
	{
		$this->db->set("okundu", 1);
		$this->db->where("id", $this->session->userdata("admin_id"));
		$this->db->update("admin");
	}

	function editproduct()
	{



		$countfiles = count($_FILES['files']['name']);

		// Upload directory
		$upload_location = "assets/urun/";

		// To store uploaded files path
		$files_arr = array();

		// Loop all files
		for ($index = 0; $index < $countfiles; $index++) {

			if (isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '') {
				// File name
				$filename = "urun_" . rand(0, 9000) . rand(0, 9000) . $_FILES['files']['name'][$index];

				// Get extension
				$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

				// Valid image extension
				$valid_ext = array("png", "jpeg", "jpg");

				// Check extension
				if (in_array($ext, $valid_ext)) {

					// File path
					$path = $upload_location . $filename;

					// Upload file
					if (move_uploaded_file($_FILES['files']['tmp_name'][$index], $path)) {
						$files_arr[] = $path;
					}
				}
			}
		}





		$this->db->set([
			"marka" => $_POST["val-marka"],
			"ad" => $_POST["val-urunad"],
			"urun_kodu" => $_POST["val-kod"],
			"aciklama" => $_POST["val-aciklama"],
			"stok" => $_POST["val-stok"],
			"stoknp" => $_POST["val-stoknp"],
			"fiyat" => $_POST["val-fiyat"],
			"fotograflar" => implode(",", $files_arr),
			"topper" => $_POST["val-topper"],
			"matras" => $_POST["val-matras"],
			"bekleme" => $_POST["val-surevarmi"],
			"bekleme_suresi" => $_POST["val-sureler"],
		]);

		$this->db->where("id", $_POST["val-urunid"]);
		$this->db->update("urunler");
	}


	public function topper($id){
   

		$urun = $this->db->where("id",$id);
		$urun = $this->db->get("urunler")->result_array();

		$yorumlar = $this->db->where("to_id",$id);
		$yorumlar = $this->db->get("yorumlar")->result_array();

	  


		$polyetherTopper = $this->db->where("type","Polyether Topper");
		$polyetherTopper = $this->db->get("topper")->result_array();

		$nasaTopper  = $this->db->where("type","Nasa Topper");
		$nasaTopper  = $this->db->get("topper")->result_array();

		$hrTopper  = $this->db->where("type","HR Topper");
		$hrTopper  = $this->db->get("topper")->result_array();

  

	   

		$yildiz = $this->db->where("to_id",$id);
		$yildiz = $this->db->get("yorumlar")->result_array();

		$yildiz3 = [];
		$yildiz2 = [];
		$yildiz1 = [];
		$yildiz4 = [];
		$yildiz5 = [];
		$yildizyok = false;
		foreach($yildiz as $key=>$y){
			if($y["yildiz"]=="3"){
				array_push($yildiz3,$y["yildiz"]);
			}

			if($y["yildiz"]=="2"){
				array_push($yildiz2,$y["yildiz"]);
			}

			if($y["yildiz"]=="1"){
				array_push($yildiz1,$y["yildiz"]);
			}
			if($y["yildiz"]=="4"){
				array_push($yildiz4,$y["yildiz"]);
			}
			if($y["yildiz"]=="5"){
				array_push($yildiz5,$y["yildiz"]);
			}
		}

		if((count($yildiz1) + count($yildiz2) + count($yildiz3) + count($yildiz4) + count($yildiz5)) == 0){
			$yildizyok = true;
		}

	   
	
		
		$this->load->view('admin/topper-detay',[
			"bildirimler"=>$this->bildirimler,
			"user"=>$this->user,
			"urun"=>$urun,
			"id"=>$id,
			"yorumlar"=>$yorumlar,
	 
			"polyetherTopper"=>$polyetherTopper,
			"nasaTopper"=>$nasaTopper,
			"hrTopper"=>$hrTopper,
			"yildiz3"=>$yildiz3 ,
			"yildiz2"=>$yildiz2 ,
			"yildiz1"=>$yildiz1, 
			"yildiz4"=>$yildiz4 ,
			"yildiz5"=>$yildiz5 ,
			"yildizvarmi"=>$yildizyok
		]);
	}

}
