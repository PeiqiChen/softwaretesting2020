<?php

/**
 * ECSHOP �Ϻ���������֧��
 * ============================================================================
 * ��Ȩ���� 2005-2010 �Ϻ���������Ƽ����޹�˾������������Ȩ����
 * ��վ��ַ: http://www.ecshop.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
 * $Author: douqinghua $
 * $Id: upop.php 17063 2010-03-25 06:35:46Z douqinghua $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

// ���������ļ�
$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/syl.php';

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
    $modules[$i]['desc']    = 'syl_desc';

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
        array('name' => 'syl_merAbbr', 'type' => 'text', 'value' => ''),
        //array('name' => 'upop_account', 'type' => 'text', 'value' => ''),
        //array('name' => 'upop_security_key', 'type' => 'text', 'value' => ''),
    );

    return;
}

/**
 * ��
 */
class syl
{
    /**
     * ����֧������
     * @param   array   $order  ������Ϣ
     * @param   array   $payment    ֧����ʽ��Ϣ
     */

    function config($payment)
    {
        define("PRI_KEY", ROOT_PATH."data/pay/".$payment['syl_merAbbr']);
        //��Կ�ļ���ʾ�����Ѿ�����
        define("PUB_KEY", "PgPubk.key");
        //֧�������ַ(����)
	    define("REQ_URL_PAY","http://payment.ChinaPay.com/pay/TransGet");
	    //֧�������ַ(����)
	    //define("REQ_URL_PAY","https://payment.ChinaPay.com/pay/TransGet");
        $this->site_url = $this->getSiteUrl();
        include_once(ROOT_PATH."data/pay/netpayclient.php");
        $merid = buildKey(PRI_KEY);
        return  $merid;
    }

    function getSiteUrl(){
        $host = $_SERVER[SERVER_NAME];
        $port = ($_SERVER[SERVER_PORT]=="80")?"":":$_SERVER[SERVER_PORT]";
        return "http://" . $host . $port . $this->getcwdOL();
    }

    function getcwdOL()
    {
        $total = $_SERVER[PHP_SELF];
        $file = explode("/", $total);
        $file = $file[sizeof($file)-1];
        return substr($total, 0, strlen($total)-strlen($file)-1);
    }





    function get_code($order, $payment)
    {
        $merid=$this->config($payment);
        $ordid = "000" . $order['order_sn'];
        $transamt = padstr($order['order_amount'] * 100,12);
        $curyid = "156";
        $transdate = date('Ymd');
        $transtype = "";
        $version = "20070129";

//	    //ҳ�淵�ص�ַ(���������Ͽɷ��ʵ�URL)���80λ�����û����֧��������ҳ����Զ���ת����ҳ�棬��POST���������Ϣ����ѡ
//	    $pagereturl = "$site_url/netpayclient_order_feedback.php";
//	    //��̨���ص�ַ(���������Ͽɷ��ʵ�URL)���80λ�����û����֧�����ҷ���������POST���������Ϣ����ҳ�棬����
//	    $bgreturl = "$site_url/netpayclient_order_feedback.php";
        //$frontEndUrl           = $GLOBALS['ecs']->url().'respond.php';
        //$backEndUrl            = $GLOBALS['ecs']->url().'respond.php';
        $frontEndUrl           = return_url(basename(__FILE__, '.php'));
        $backEndUrl            = return_url(basename(__FILE__, '.php'));

        //֧�����غţ�4λ������ʱ�������գ�����ת�������б�ҳ�����û�����ѡ�񣬱�ʾ��ѡ��0001ũ�������ر��ڲ��ԣ���ѡ
        $gateid = "0001";
        //��ע���60λ�����׳ɹ����ԭ�����أ������ڶ���Ķ������ٵȣ���ѡ
        $priv1 = $order['log_id'];
        $plain = $merid . $ordid . $transamt . $curyid . $transdate . $transtype . $priv1;
        //����ǩ��ֵ������
        $this->chkvalue = sign($plain);
        $html = $this->create_html($merid , $ordid , $transamt , $curyid ,$transdate , $transtype , $order['log_id'],REQ_URL_PAY,$frontEndUrl);
        return $html;

    }

    function create_html($merid , $ordid , $transamt , $curyid ,$transdate , $transtype , $order_log_id,$act_url,$frontEndUrl)
    {
        $html = <<<eot
<form action={$act_url} method="post" target="_blank">

<input type="hidden" name="MerId" value="{$merid}"  />
<input type="hidden" name="Version" value="20070129" />
<input type="hidden" name="OrdId" value="{$ordid}" />
<input type="hidden" name="TransAmt" value="{$transamt}" />
<input type="hidden" name="CuryId" value="{$curyid}" />
<input type="hidden" name="TransDate" value="{$transdate}" />
<input type="hidden" name="TransType" value="{$transtype}" />
<input type="hidden" name="BgRetUrl" value="{$frontEndUrl}"/>
<input type="hidden" name="PageRetUrl" value="{$frontEndUrl}"/>
<input type="hidden" name="GateId" value=""/>
<input type="hidden" name="Priv1" value="{$order_log_id}" />
<input type="hidden" name="ChkValue" value="{$this->chkvalue}" />
<input type="submit" value="֧��">
</form>
eot;

        return $html;
    }


    /**
     * ��Ӧ����
     $_REQUEST["Priv1"] Ϊ log_id
     */
    function respond()
    {
        $payment  = get_payment($_GET['code']);
        $merid=$this->config($payment);
        $flag = buildKey(PUB_KEY);
        //��ȡ����Ӧ��ĸ���ֵ
        $merid = $_REQUEST["merid"];
        $orderno = $_REQUEST["orderno"];
        $transdate = $_REQUEST["transdate"];
        $amount = $_REQUEST["amount"];
        $currencycode = $_REQUEST["currencycode"];
        $transtype = $_REQUEST["transtype"];
        $status = $_REQUEST["status"];
        $checkvalue = $_REQUEST["checkvalue"];
        $gateId = $_REQUEST["GateId"];
        $priv1 = $_REQUEST["Priv1"];
        $flag = verifyTransResponse($merid, $orderno, $amount, $currencycode, $transdate, $transtype, $status, $checkvalue);
        if( flag && $status == '1001')
        {
            // ���۸��Ƿ�һ��
            if (!check_money($priv1, $amount/100))
            {
               return false;
            }
            order_paid($priv1, 2);
            return true;
        }
        else
        {
            return false;
        }
    }
    /**
    * ��ʽ������
    */
    function _formatSN($sn)
    {
        return str_repeat('0', 9 - strlen($sn)) . $sn;
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