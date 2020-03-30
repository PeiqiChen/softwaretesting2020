<?php

/**
 * ECSHOP ��������֧��
 * ============================================================================
 * ��Ȩ���� 2005-2010 �Ϻ���������Ƽ����޹�˾������������Ȩ����
 * ��վ��ַ: http://www.ecshop.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ��������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã��������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
 * $Author: douqinghua $
 * $Id: upop.php 17063 2010-03-25 06:35:46Z douqinghua $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

// ���������ļ�
$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/upop.php';

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
    $modules[$i]['desc']    = 'upop_desc';

    /* �Ƿ�֧�ֻ������� */
    $modules[$i]['is_cod']  = '0';

    /* �Ƿ�֧������֧�� */
    $modules[$i]['is_online']  = '1';

    /* ���� */
    $modules[$i]['author']  = 'ECSHOP TEAM';

    /* ��ַ */
    $modules[$i]['website'] = 'http://www.ecshop.com';

    /* �汾�� */
    $modules[$i]['version'] = '1.0.0';

    /* ������Ϣ */
    $modules[$i]['config'] = array(
        array('name' => 'upop_merAbbr', 'type' => 'text', 'value' => '�̻�����'),
        array('name' => 'upop_account', 'type' => 'text', 'value' => ''),
        array('name' => 'upop_security_key', 'type' => 'text', 'value' => ''),
    );

    return;
}

/**
 * ��
 */
class UPOP
{
    /**
     * ����֧������
     * @param   array   $order  ������Ϣ
     * @param   array   $payment    ֧����ʽ��Ϣ
     */

    function get_code($order, $payment)
    {
        // ��ʼ������
        if (!defined('EC_CHARSET'))
        {
            $charset = 'UTF-8';
        }
        else
        {
            $charset = strtoupper(EC_CHARSET);
        }

        $front_pay_url         = 'https://unionpaysecure.com/api/Pay.action';
        $security_key          = $payment['upop_security_key'];
        $merId                 = $payment['upop_account'];
        $orderNumber           = $order['order_sn'] . '-' . $this->_formatSN($order['log_id']);	
        $frontEndUrl           = return_url(basename(__FILE__, '.php'));
        $backEndUrl            = return_url(basename(__FILE__, '.php'));
        $merAbbr               = $payment['upop_merAbbr'];

        $params = array(
                "version"            =>  '1.0.0',                      //�ӿڰ汾
                "signMethod"         =>  'md5',                        //���ܷ�ʽ
                "charset"            =>  $charset,                     //����
                "transType"          =>  '01',                         //��������
                "origQid"            =>  '',
                "merId"              =>  $merId,                       //�տ��˺�
                "merAbbr"            =>  $merAbbr,                     //�̻�����
                "acqCode"            =>  '',
                "merCode"            =>  '',
                "commodityUrl"       =>  '',                           //��Ʒurl
                "commodityName"      =>  '',                           //��Ʒ����
                "commodityUnitPrice" =>  '',                           //��Ʒ����
                "commodityQuantity"  =>  '',                           //��Ʒ����
                "commodityDiscount"  =>  '',
                "transferFee"        =>  '',
                "orderNumber"        =>  $orderNumber,                 //�����ţ�����Ψһ
                "orderAmount"        =>  $order['order_amount'] * 100, //���׽�� ת��Ϊ��
                "orderCurrency"      =>  '156',                        //���ױ��֣�CURRENCY_CNY=>�����
                "orderTime"          =>  date('YmdHis'),               //����ʱ��, YYYYmmhhddHHMMSS
                "customerIp"         =>  $_SERVER['REMOTE_ADDR'],      //�û�IP
                "customerName"       =>  '',
                "defaultPayType"     =>  '',
                "defaultBankNumber"  =>  '',
                "transTimeout"       =>  '',
                "frontEndUrl"        =>  $frontEndUrl,                 // ǰ̨�ص�URL
                "backEndUrl"         =>  $backEndUrl,                  // ��̨�ص�URL
                "merReserved"        =>  ''             
        );
        
        $params['signature']    =$this->sign($params, $security_key,'md5');
        
        $button = "<input type='submit' value='" . $GLOBALS['_LANG']['upop_button'] . "' />";
        $html = $this->create_html($params,$front_pay_url,$button);

        return $html;
    }

    /**
     * ��Ӧ����
     */
    function respond()
    {
            $payment        = get_payment('upop');

            $arr_args = array();
            $arr_reserved = array();

            if (is_array($_POST)) 
            {
                $arr_args       = $_POST;
                $cupReserved    = isset($arr_args['cupReserved']) ? $arr_args['cupReserved'] : '';
                parse_str(substr($cupReserved, 1, -1), $arr_reserved); //ȥ��ǰ���{}
            }
            else 
            {
                $cupReserved = '';
                $pattern = '/cupReserved=(\{.*?\})/';
                if (preg_match($pattern, $_POST, $match)) { //����ȡcupReserved
                   $cupReserved = $match[1];
                }
                //��cupReserved��value���(��Ϊ����&, parse_strû����������)
                $args_r         = preg_replace($pattern, 'cupReserved=', $_POST);
                parse_str($args_r, $arr_args);
                $arr_args['cupReserved'] = $cupReserved;
                parse_str(substr($cupReserved, 1, -1), $arr_reserved); //ȥ��ǰ���{}
            }
            //��ȡ�������˵�ǩ��
            if (!isset($arr_args['signature']))
            {
                 return false;
            }
     
            //��֤ǩ��
            $signature=$this->sign($arr_args, $payment['upop_security_key'],'md5');
            if ($signature != $arr_args['signature']) 
            {
                return false;
            }

            $arr_ret = array_merge($arr_args, $arr_reserved);
            unset($arr_ret['cupReserved']);

            if ($arr_ret['respCode'] != '00') 
            {
                return false;
            }
            if(!strpos($arr_ret['orderNumber'], '-')) 
            {
                return false;
            }
            $order_sn_arr = explode('-', $arr_ret['orderNumber']);
            
            $order_sn    = $order_sn_arr['0'];
            $pay_id = intval($order_sn_arr['1']);
            $payment_amount = intval($arr_ret['settleAmount']);
          
            // ����̻��˺��Ƿ�һ�¡�
            if ($payment['upop_account'] != $arr_ret['merId'])
            {
               return false;
            }
            // ���۸��Ƿ�һ��
            if (!check_money($pay_id, $payment_amount/100))
            {
               
               return false;
            }
            // ���δ֧���ɹ���
            if ($arr_ret['respCode'] != '00')
            {
               return false;
            }

            $action_note = $arr_ret['respCode'] . ':' 
                    . $arr_ret['respMsg'] 
                    . $GLOBALS['_LANG']['upop_txn_id'] . ':' 
                    . $arr_ret['qid'];

            // ��ɶ�����
            order_paid($pay_id, PS_PAYED, $action_note);

            //�����û��������
            return true;

    }
    /**
    * ��ʽ������
    */
    function _formatSN($sn)
    {
        return str_repeat('0', 9 - strlen($sn)) . $sn;
    }
    function create_html($params,$front_pay_url,$button)
    {
        $html = <<<eot
    <br />
    <form style="text-align:center;" id="pay_form" name="pay_form" action="{$front_pay_url}" method="post" target="_blank">
eot;
        foreach ($params as $key => $value) 
        {
            $html .= " <input type=\"hidden\" name=\"{$key}\" id=\"{$key}\" value=\"{$value}\" />\n";
        }
        $html .= $button . "</form><br />";
        return $html;
    }
    function sign($params,$security_key,$sign_method)
    {
        if (strtolower($sign_method) == "md5") 
        {
            ksort($params);
            $sign_str = "";
            $sign_ignore_params=array('bank','signMethod','signature');
            foreach ($params as $key => $val)
            {
                if (in_array($key,$sign_ignore_params)) 
                {
                    continue;
                }
                $sign_str .= sprintf("%s=%s&", $key, $val);
            }
            return md5($sign_str . md5($security_key));
        }
        else 
        {
            exit("Unknown sign_method set in quickpay_conf");
        }
    }

}
?>