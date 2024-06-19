<?php 

    class myCont extends CI_Controller
    {
        public function index()
        {
            $this->load->view('home');
        }

        public function about()
        {
            $this->load->view('about');
        }

        public function CreateAccount()
        {
            if($this->input->post('submit'))
            {
                $pin = $this->input->post('p');
                $name = $this->input->post('n');
                $fname = $this->input->post('f');
                $email = $this->input->post('e');
                $phone = $this->input->post('ph');
                $gender = $this->input->post('g');
                $city = $this->input->post('c');
                $state = $this->input->post('s');
                $country = $this->input->post('ct');
                $amount = $this->input->post('a');

                $this->load->model('DbModel');
                $rs=$this->DbModel->getData();

                $x=sizeof($rs);
                $ac="SBI";
                if($x>0)
                {
                    $x=$x+101;
                    $ac=$ac.$x;
                }
                else
                $ac="SBI101";
                
                $dt=array("acno"=>$ac,"pin"=>$pin,"name"=>$name,"fname"=>$fname,"phone"=>$phone,"gender"=>$gender,
                        "city"=>$city,"email"=>$email,"state"=>$state,"country"=>$country,"amount"=>$amount);

                        $this->DbModel->insertData($dt);
                        $dt=array("msg"=>"Account open successfully with account number $ac");
                        $this->load->view('CreateAccount');
            }
            else
            {$dt = array("msg" => "");
                $this->load->view('Createaccount', $dt);
                
            }
        }


    public function deposit()
    {
        if ($this->input->post('submit')) {
            $acnoMN = $this->input->post('ac');
            $pin = $this->input->post('p');
            $amount = $this->input->post('am');

            $this->load->model('DbModel');
            $rs = $this->DbModel->getData();
            $x = 0;
            $camt;
            foreach ($rs as $row) {
                if ($row['acno'] == $acno && $row['pin'] == $pin) {
                    $camt = $row['amount'];
                    $x++;
                }
            }
            if ($x > 0) {
                $camt = $camt + $amount;
                $data = array("amount" => $camt);
                $c = array("acno" => $acno);
                $this->DbModel->deposit($data, $c);


                $ar = array("msg" => "After deposit $amount Your Current Balance is = $camt");
                $this->load->view('Deposit', $ar);
            } 
            else 
            {
                $ar = array("msg" => "Invalid Account or Pin");
                $this->load->view('Deposit', $ar);
            }
        } else {
            $ar = array("msg" => "");
            $this->load->view('Deposit', $ar);
        }
    }

    public function Withdrawal()
    {
        if ($this->input->post('submit')) {
            $acno = $this->input->post('ac');
            $pin = $this->input->post('p');
            $am = $this->input->post('a');

            $data = array("acno" => $acno);
            $this->load->model("DbModel");
            $rs = $this->DbModel->getExist($data);
            $x = sizeof($rs);

            if ($x > 0 && $rs[0]['pin'] >= $pin) {
                if ($rs[0]['amount'] >= $am) {
                    $cm = array("acno" => $acno);
                    $a = $rs[0]['amount'];
                    $amount = $a - $am;

                    $dt = array("amount" => $amount);

                    $this->DbModel->updateData($dt, $cm);
                    $ar = array("msg" => "After withdrawal $am Your Current Balance is = $amount");
                    $this->load->view('Withdrawal', $ar);
                } 
                else {
                    $ar = array("msg" => "Insufficient Balance");
                    $this->load->view('Withdrawal', $ar);
                }
            } else {
                $ar = array("msg" => "Either Account No. or Pin is Wrong");
                $this->load->view('Withdrawal', $ar);
            }
        } else {
            $this->load->view('Withdrawal');
        }
    }



       public function FundTransfer()
    {
    if($this->input->post('submit')) {
        $acno = $this->input->post('ac');
        $pin = $this->input->post('p');
        $ac = $this->input->post('am');
        $rac = $this->input->post('rac');

        $data = array("acno" => $acno,"pin"=>$pin);
        $this->load->model("DbModel");
        $rs1 = $this->DbModel->getExist($data);
        $x = sizeof($rs1);
        if ($x > 0 && $rs1[0]['pin'] == $pin) 
        {
            $camt=$rs1[0]["amount"];
            if($camt>=$ac)
            {

                $data = array("acno" => $rac);
                $rs1 = $this->DbModel->getExist($data);
                $x = sizeof($rs1);
                if($x>0)
                {
                    $tamt=$rs1[0]["amount"];
            $camt=$camt-$ac;
            $tamt=$tamt+$ac;

            $cn=array("acno"=>$ac);
            $d=array("amount"=>$camt);
            $this->DbModel->updateData($d,$cn);
            $cn=array("acno"=>$rac);
            $d=array("amount"=>$tamt);
            $this->DbModel->updateData($d,$cn);
            
                    $dt = array("msg" => "After Transfer $ac = your Current balance is= $camt");
            $this->load->view('FundTransfer', $dt);
                }
                else
                {
                    $dt = array("msg" => "INvalid Beneficiary Account");
                    $this->load->view('FundTransfer', $dt);
        

                }

        }
            else
            {
                $dt = array("msg" => "Insufficient balance");
            $this->load->view('FundTransfer', $dt);
            
            }
        } 
        
        else {
            $dt = array("msg" => "Either Your Account no. pin is wrong");
            $this->load->view('FundTransfer', $dt);
        }



    }
    else
    {
        $dt = array("msg" => "");
        $this->load->view('FundTransfer', $dt);

    }
}


        public function BalanceEniquery()
        {
            if($this->input->get('submit'))
            {
                $acno = $this->input->get('ac');
                $pin = $this->input->get('p');

                $this->load->model('DbModel');
                $rs = $this->DbModel->getData();

                $x=0;
                $amt=0;
                foreach($rs as $row){
                    if($row['acno'] == $acno && $row['pin'] == $pin){
                        $amt = $row['amount'];
                        $x++;
                    }
                }
                if($x>0)
                {
                    $am = array("msg"=>"your account balance is $amt");
                    $this->load->view('BalanceEniquery',$am);
                }
                else
                {
                    $am = array("msg" => "Invalid account or pin");
                    $this->load->view('BalanceEniquery',$am);

                }
                
            }else
                {
                    $am = array("msg" => "");
                    $this->load->view('BalanceEniquery',$am);
                }
        }

        public function PinChange(){
            
            if($this->input->post('submit')){
                $acno = $this->input->post('ac');
                $opin = $this->input->post('op');
                $npin = $this->input->post('np');

                $data=array("acno"=>$acno);
                $this->load->model("DbModel");
                $rs=$this->DbModel->getExist($data);
                $x = sizeof($rs);
                if($x>0 && $rs[0]['pin']==$opin){

                    $cn=array("acno"=>$acno);

                    $dt=array("pin"=>$npin);
                    $this->DbModel->updateData($dt,$cn);
                    $dt=array("msg"=>"Pin Changed Successfully");
                    $this->load->view('PinChange',$dt);
                }
                else
                {
                    $dt=array("msg"=>"Either Account or Pin is Wrong");
                    $this->load->view('PinChange',$dt);
                }
               
                
            }else{
                $dt=array("msg"=>"");
                $this->load->view('PinChange',$dt);
            }
        }

        public function AccountSummery()
        {
            if($this->input->post('submit'))
            {
                $acno = $this->input->post('ac');
                $p = $this->input->post('p');

                $data=array("acno"=>$acno);
                $this->load->model("DbModel");
                $rs=$this->DbModel->getExists($data);
                $x= sizeof($rs);
                $t=0;
                if($x>0 && $p==$rs[0]['pin'])
                {
                    $dt =array("acno"=>$acno);
                    $rs['data']=$this->DbModel->getSum($dt);
                    print_r($rs);
                    $this->load->view('AccountSummery',$rs);
                }
                else{
                    $dt=array("msg"=>"Either Account NO. or Pin is wrong");
                    $this->load->view('AccountSummery',$dt);
                }
            }
            else{
                $this->load->view('AccountSummery');
            }
        }
        
        public function Hire()
        {
            $this->load->view('hire');
        }
         
    }


?>