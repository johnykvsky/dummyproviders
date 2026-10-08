<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\zh_CN;

use DummyGenerator\Core\Internet as BaseInternet;

class Internet extends BaseInternet
{
    protected array $freeEmailDomain = [
        'gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', '126.com', '163.com', 'qq.com', 'sohu.com', 'sina.com',
    ];
    protected array $tld = [
        'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cn',
        'com.cn', 'edu.cn', 'net.cn', 'biz.cn', 'gov.cn', 'org.cn',
    ];

    protected array $userNameFormats = [
        '{{word}}.{{word}}',
        '{{word}}_{{word}}',
        '{{word}}##',
        '?{{word}}',
    ];
    protected array $emailFormats = [
        '{{userName}}@{{freeEmailDomain}}',
    ];
}
