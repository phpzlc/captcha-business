<?php
/**
 * PhpStorm.
 * User: Jay
 * Date: 2021/3/9
 */

namespace App\Controller;

use App\Business\CaptchaBusiness\CaptchaBusiness;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CaptchaController
{
    /**
     * 图形验证码
     *
     * @param Request $request
     * @return Response
     */
    public function captcha(Request $request)
    {
        return (new CaptchaBusiness($this->container))->captcha($request->get('captcha', 'captcha'), $request->get('format'));
    }
}