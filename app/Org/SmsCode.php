<?php
namespace App\Org;

use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;


/**
 * Created by PhpStorm.
 * User: WangZai
 * Date: 2017/10/30
 * Time: 16:33
 */


class SmsCode
{
    public static function sendSms($phone){
        /*$config = [
            'accessKeyId'    => 'LTAIAqsGt41tIx5C',
            'accessKeySecret' => 'ZTvsl5Igj3dJRD8HfyU5HjtKvCwnch',
        ];
        $client  = new Client($config);
        $sendSms = new SendSms;
        $code = rand(100000, 999999);
        $sendSms->setPhoneNumbers($phone);
        $sendSms->setSignName('山海问问');
        $sendSms->setTemplateCode('SMS_105915034');
        $sendSms->setTemplateParam(['code' => $code]);
        $client->execute($sendSms);*/
        $code = 123456;
        return $code;
    }
}