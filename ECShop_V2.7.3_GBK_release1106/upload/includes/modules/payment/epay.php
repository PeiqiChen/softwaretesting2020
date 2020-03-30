<?php

/**
 * ECSHOP ֧�������
 * ============================================================================
 * * ��Ȩ���� 2005-2012 �Ϻ���������Ƽ����޹�˾������������Ȩ����
 * ��վ��ַ: http://www.ecshop.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
 * $Author: douqinghua $
 * $Id: alipay.php 17217 2011-01-19 06:29:08Z douqinghua $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/epay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* ģ��Ļ�����Ϣ */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* ���� */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* ������Ӧ�������� */
    $modules[$i]['desc']    = 'epay_desc';

    /* �Ƿ�֧�ֻ������� */
    $modules[$i]['is_cod']  = '0';

    /* �Ƿ�֧������֧�� */
    $modules[$i]['is_online']  = '1';

    /* ���� */
    $modules[$i]['author']  = 'ECSHOP TEAM';

    /* ��ַ */
    $modules[$i]['website'] ='http://www.95epay.cn/merRegister.jsp?countermanName=%E5%BC%A0%E4%BF%8A%E8%BE%89&countermanPhoneNO=13113391311&countermanQQ=2361064531';

    /* �汾�� */
    $modules[$i]['version'] = '1.0.0';

    /* ������Ϣ */
    $modules[$i]['config']  = array(
        array('name' => 'epay_account',           'type' => 'text',   'value' => ''),
        array('name' => 'epay_key',               'type' => 'text',   'value' => '')
    );

    return;
}

/**
 * ��
 */
class epay
{

    /**
     * ���캯��
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function epay()
    {
    }

    function __construct()
    {
        $this->epay();
    }

    /**
     * ����֧������
     * @param   array   $order      ������Ϣ
     * @param   array   $payment    ֧����ʽ��Ϣ
     */
    function get_code($order, $payment)
    {
        if (!defined('EC_CHARSET'))
        {
            $charset = 'utf-8';
        }
        else
        {
            $charset = EC_CHARSET;
        }
        $parameter=array();
        $parameter['MerNo']=$payment['epay_account'];
        $parameter['MD5key']=$payment['epay_key'];

	
        $parameter['Amount']= $order['order_amount'];
        $parameter['BillNo']= time().str_pad($order['log_id'], 10, "0", STR_PAD_LEFT);
        $parameter['ReturnURL'] = $GLOBALS['ecs']->url() . 'respond.php';
        $parameter['NotifyURL'] = $GLOBALS['ecs']->url() . 'respond.php';
        $parameter['PaymentType']= "";
        $parameter['PayType']= "CSPAY";//CSPAY:����֧��; 

        $sign_params  = array(
            'MerNo'       => $parameter['MerNo'],
            'BillNo'       => $parameter['BillNo'], 
            'Amount'         => $parameter['Amount'],   
            'ReturnURL'       => $parameter['ReturnURL'],
        );
        $sign_str = "";
        ksort($sign_params);

        foreach ($sign_params as $key => $val)
        {
                                   
             $sign_str .= sprintf("%s=%s&", $key, $val);
        }
        $parameter['MD5info']= strtoupper(md5($sign_str. strtoupper(md5($parameter['MD5key']))));
        $parameter['MerRemark']='epay';
        $parameter['products']='IphoneNike';
        $button ='<form action="https://www.95epay.cn/sslpayment" method="post">';
        foreach($parameter as $key=>$val)
        {
          $button .='<input type="hidden" name="'.$key.'" value="'.$val.'">';
        }
        $button .='<p align="center"><input type="submit" name="b1" value="'.$GLOBALS['_LANG']['pay_button'].'"></p>
       </form>';
        return $button;
    }

    /**
     * ��Ӧ����
     */
    function respond()
    {
        $payment  = get_payment('epay');
        $md5sign         ='';
        $BillNo          =     $_POST["BillNo"];
        $Amount          =     $_POST["Amount"];
        $Succeed         =     $_POST["Succeed"];     
        $MD5info         =     $_POST["MD5info"];
        $Result          =     $_POST["Result"];
        $MerNo           =     $_POST['MerNo'];
        $MD5key          =     $payment['epay_key'];
        $MerRemark       =     $_POST['MerRemark'];		//�Զ�����Ϣ����
        $sign_params  = array(
        'MerNo'         => $MerNo,
        'BillNo'        => $BillNo, 
        'Amount'        => $Amount,   
        'Succeed'       => $Succeed
            );
         
        $sign_str = "";
        ksort($sign_params);
        foreach ($sign_params as $key => $val) {              
            $sign_str .= sprintf("%s=%s&", $key, $val);    
        }
       $md5sign= strtoupper(md5($sign_str. strtoupper(md5($MD5key)))); 
         
       if($md5sign==$MD5info && $Succeed!='88')
       {
           return false;
       }
       elseif($md5sign==$MD5info && $Succeed=='88')
       {
            /* �ı䶩��״̬ */
            $order_sn=substr($BillNo,-10);
            $order_sn=intval($order_sn);
            order_paid($order_sn);
            return true;
       }
       else
       {
           return false;
       }

    }



}

?>