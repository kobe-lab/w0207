<?php
class Frontend extends CI_Controller{
    
    private $data = [];

    public function __construct(){
        parent::__construct();
        $this->load->model("Product_model");
        $this->load->model("Cart_model");
        $this->load->model("User_model");
        $this->load->model("Wishlist_model");
        
        
        $sid = session_id();

        $this->data['cartTotal'] = $this->Cart_model->record_count(array(
            'sid' => $sid,
            'is_deleted' => 0,

        ));
      

        $this->data['cartList'] = $this->Cart_model->get_where(array(
            'sid' => $sid,
            'is_deleted' => 0,
        ));

        $this->data['wishlistTotal'] = $this->Wishlist_model->record_count(array(
            'sid' => $sid,
            'is_deleted' => 0,

        ));
      

        $this->data['wishList'] = $this->Wishlist_model->get_where(array(
            'sid' => $sid,
            'is_deleted' => 0,
        ));



        $user_id = $this->session->userdata("is_user");
        $this->data['user_id'] = $user_id;
         
        $this->data['userdata'] =  $this->User_model->getOne(array(
                'id' => $user_id,
            ));
        
        

        
    }

  
    public function logout(){
        $this->session->unset_userdata('is_user');
        redirect(base_url(''));
    }


    public function home(){

        $this->data['arrivalList'] = $this->Product_model->get_where(array(
            'latest' => 1,
        ));

        $this->data['topsellList'] = $this->Product_model->get_where(array(
            'featured' => 1,
        ));

        $this->data['featuredList'] = $this->Product_model->get_where(array(
            'topsell' => 1,
        ));
     
        $this->load->view("header", $this->data);
        $this->load->view("home", $this->data);
        $this->load->view("footer", $this->data);
    }

  

    
    public function product_detail($product_id){
        

        $this->data['productData'] = $this->Product_model->getOne(array(
            'id' => $product_id
        ));

        $this->load->view("header", $this->data);
        $this->load->view("product_detail",  $this->data);
        $this->load->view("footer", $this->data);
    }


    public function product_list($page=1){

        $sql = array();

        /*
        SELECT * FROM tablename WHERE ... LIMIT start,item_per_page
        page = 1, start = (1)*10 = 0
        page = 2, start = (2-1)*10 = 10
        page = 3, start = (3-1)*10 = 20
        */
        

        $item_per_page = 10;
        $start = ( $page - 1 ) * $item_per_page;        
        $total_records = $this->Product_model->record_count($sql);

        $this->data['product_list'] = $this->Product_model->fetch($sql, $item_per_page, $start);

        $this->load->library('pagination');
        $config['base_url'] = base_url('product_list');
		$config['total_rows'] = $total_records;
		$config['per_page'] = $item_per_page;
		$config['use_page_numbers'] = true;
		$config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";

        $config['first_link'] = "First";
        $config['first_tag_open'] = "<li>";
        $config['first_tag_close'] = "</li>";

        $config['last_link'] = "Last";
        $config['last_tag_open'] = "<li>";
        $config['last_tag_close'] = "</li>";
        
        $config['prev_link'] = "<i class='fa fa-angle-left'></i>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tag_close'] = "</li>";

        $config['next_link'] = "<i class='fa fa-angle-right'></i>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";

		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = "</a></li>";
		$this->pagination->initialize($config);
		$this->data['pagination'] =  $this->pagination->create_links();

        $this->load->view("header", $this->data);
        $this->load->view("product_list", $this->data);
        $this->load->view("footer", $this->data);


    }


    public function addcartAPI(){
        $sid            = session_id();
        $qty            = $this->input->post("qty", true); 
        $product_id     = $this->input->post("product_id", true); 
        $cartQty        = 0;
        $total_price    = 0;

        $productData = $this->Product_model->getOne(array(
            'id' =>$product_id,
        ));

        // unkown_error
        if(empty($productData)){
            show_error();
        }

        // testing
        $product_title = $productData['title'];
        $product_price = $productData['price'];

        $cartData = $this->Cart_model->getOne(array(
            "sid" => $sid,
            'product_id' => $product_id,
            'is_deleted' => 0,
        ));



        if(!empty($cartData)){

            $currentQty = $cartData['qty'];
            $finalQty    = $currentQty + $qty;

            $this->Cart_model->update(array(
                'id' =>$cartData['id'],
            ),array(
                'qty' =>$finalQty,
                'modified_date' => date("Y-m-d H:i:s"),
            ));


        }else{

            $cart_id = $this->Cart_model->insert(array(
                "sid"   =>$sid,
                "qty"   =>$qty,
                "product_id"   =>$product_id,
                "product_title"   =>$product_title,
                "product_price"   =>$product_price,
                "created_date"   =>date("Y-m-d H:i:s"),
            ));
        }


        $wholeCartData = $this->Cart_model->get_where(array(
            "sid" => $sid,
            'is_deleted' => 0,

        ));

        foreach($wholeCartData as $k=>$v){
            $cartQty += $wholeCartData[$k]["qty"];
            $total_price += ($wholeCartData[$k]["product_price"]*$wholeCartData[$k]["qty"]);
        }

        echo json_encode(array(
            'cartQty'=>$cartQty,
            'cartData'=>$wholeCartData,
            'total_price'=>$total_price,
            'status' => "ok",
        ));

    }
    
    public function addwishlistAPI(){
        $sid            = session_id();
        $product_id     = $this->input->post("product_id", true);
        $total_price    = 0; 

        $productData = $this->Product_model->getOne(array(
            'id' =>$product_id,
        ));

        // unkown_error
        if(empty($productData)){
            show_error();
        }

        // testing
        $product_title = $productData['title'];
        $product_price = $productData['price'];

        // $wishData = $this->Wishlist_model->getOne(array(
        //     "sid" => $sid,
        //     'product_id' => $product_id,
        //     'is_deleted' => 0,
        // ));



        // if(!empty($wishData)){

        //     $currentQty = $cartData['qty'];
        //     $finalQty    = $currentQty + $qty;

        //     $this->Wishlist_model->update(array(
        //         'id' =>$cartData['id'],
        //     ),array(
        //         'qty' =>$finalQty,
        //         'modified_date' => date("Y-m-d H:i:s"),
        //     ));


        // }else{

            $wishlist_id = $this->Wishlist_model->insert(array(
                "sid"   =>$sid,
                "product_id"       =>$product_id,
                "product_title"   =>$product_title,
                "product_price"   =>$product_price,
                "is_deleted"    =>0,
                "created_date"   =>date("Y-m-d H:i:s"),
            ));
        
            $wishcount = $this->Wishlist_model->record_count(array(
                'sid' => $sid,
                'is_deleted' => 0,
            ));
    
            $wholeCartData = $this->Wishlist_model->get_where(array(
                "sid" => $sid,
                'is_deleted' => 0,
    
            ));
    
            foreach($wholeCartData as $k=>$v){
                // $cartQty += $wholeCartData[$k]["qty"];
                $total_price += ($wholeCartData[$k]["product_price"]);
            }
    
            echo json_encode(array(
                // 'wish_product'=>$wish_product,
                // 'wish_detail'=>$wish_detail,
                // 'sid'=>$sid,
                'wishData'=>$wholeCartData,
                'total_price'=>$total_price,
                'status' => "ok",
                'wishqty'=> $wishcount,
            ));

    }




    public function removecartAPI(){
		$sid = session_id();
		$cart_id 	= $this->input->post("cart_id", true);

		$cartData = $this->Cart_model->getOne(array(
            'id' => $cart_id 
		));

	
        $this->Cart_model->update(array(
		    'id' => $cartData['id'],
		), array(
            'is_deleted' => 1,
			'modified_date' => date("Y-m-d H:i:s"),
            ));
            
            echo json_encode(array(
                'status' => "OK",
            ));
		

	}

    public function removewishlistAPI(){
		$sid = session_id();
		$wishlist_id 	= $this->input->post("wishlist_id", true);

		$wishlistData = $this->Wishlist_model->getOne(array(
            'id' => $wishlist_id 
		));

	
        $this->Wishlist_model->update(array(
		    'id' => $wishlistData['id'],
		), array(
            'is_deleted' => 1,
			'modified_date' => date("Y-m-d H:i:s"),
            ));
            
            echo json_encode(array(
                'status' => "OK",
            ));
		

	}

    public function addcart(){

        $sid = session_id();
        
        $product_id = $this->input->post("product_id", true);
        $qty        = $this->input->post("qty", true);



        $productData = $this->Product_model->getOne(array(
            'id' => $product_id,
        ));


        $cartExists = $this->Cart_model->getOne(array(
            'sid' => $sid,
            'product_id' => $product_id,
        ));

        if(empty($cartExists)){   
        $this->Cart_model->insert(array(
                'sid' => $sid,
                'product_id' => $product_id,
                'product_title' =>  $productData['title'],
                'qty'           => $qty,
                'product_price' =>  $productData['price'],
                'created_date' => date("Y-m-d H:i:s"),
        ));
    } else {
        $this->Cart_model->update(array(
            'id' => $cartExists['id']
        ),array(
            'qty'           => ($cartExists['qty']+$qty),
            'modified_date' => date("Y-m-d H:i:s"),
    ));
    }

    // $this->load->library("emailer");
    // $this->emailer->sendmail("Someone Add Cart", "Yeah! Someone Add cart");

    redirect(base_url('product_detail/'.$product_id));
    }

    public function mychart(){
        $this->load->view("mychart", $this->data);
    }

    public function getProductAPI($page=1){

        $this->load->model("Product_model");

        $productList = $this->Product_model->fetch([], 10, ($page-1)*10);

        //PHP ARRAY => JSON ARRAY
        echo json_encode($productList);
    }

    public function login() {

        $this->load->view("header", $this->data);
        $this->load->view("login", $this->data);
        $this->load->view("footer", $this->data);

    }

    public function signup() {

        $this->load->view("header", $this->data);
        $this->load->view("signup", $this->data);
        $this->load->view("footer", $this->data);

    }

    public function addsignup(){
        
        $fullname = $this->input->post("fullname" , true);
        $givenname = $this->input->post("givenname" , true);
        $familyname = $this->input->post("familyname" , true);
        $email = $this->input->post("email" , true);
        $password = $this->input->post("password" , true);

        // $this->load->model("User_model");

        $this->User_model->insert(array(
            'fullname' => $fullname,
            'givenname' => $givenname,
            'familyname' => $familyname,
            'email' => $email,
            'password' => $password,
            'created_date' => date("Y-m-d H:i:s"),
        ));

        redirect(base_url('login'));
    }

    public function useredit(){

        $this->load->view("header", $this->data);
        $this->load->view("useredit", $this->data);
        $this->load->view("footer", $this->data);
       
    }


    public function updateprofile(){
        
        $fullname = $this->input->post("fullname" , true);
        $givenname = $this->input->post("givenname" , true);
        $familyname = $this->input->post("familyname" , true);
        $email = $this->input->post("email" , true);
        $password = $this->input->post("password" , true);
     
            $this->User_model->update(array(
				'id' => $this->data['user_id'],
			), array(
                'fullname'      => $fullname,
                'givenname'     => $givenname,
                'familyname'    => $familyname,
                'email'         => $email,
                'password'      => $password,
                'modified_date' => date("Y-m-d H:i:s"),
            ));
            
            redirect(base_url('useredit'));
    }


    public function skeyword(){
        $key = $this->input->get('title');
        $data['result'] = $this->Product_model->search($key);
        


        $this->load->view("header", $this->data);
        $this->load->view("searchresult", $data);
        $this->load->view("footer", $this->data);
    }

    public function shopcart(){

        $this->load->view("header", $this->data);
        $this->load->view("shopcart", $this->data);
        $this->load->view("footer", $this->data);
    }

    public function shopcheckout(){

        $this->load->view("header", $this->data);
        $this->load->view("shopcheckout", $this->data);
        $this->load->view("footer", $this->data);
    }


    public function wishlist(){

        $this->load->view('header', $this->data);
        $this->load->view("wishlist", $this->data);
        $this->load->view("footer", $this->data);
    }
}



?>