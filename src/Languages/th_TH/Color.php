<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\th_TH;

use DummyGenerator\Core\Color as BaseColor;

class Color extends BaseColor
{
    protected array $safeColorNames = [
        'ขาว', 'ชมพู', 'ดำ', 'น้ำตาล', 'น้ำเงิน', 'ฟ้า', 'ม่วง', 'ส้ม', 'เขียว', 'เขียวอ่อน', 'เหลือง', 'แดง',
    ];

    protected array $allColorNames = [
        'กากี', 'ขาว', 'คราม', 'ชมพู', 'ดำ', 'ทอง', 'นาค', 'น้ำตาล',
        'น้ำเงิน', 'ฟ้า', 'ม่วง', 'ส้ม', 'เขียว', 'เขียวอ่อน',
        'เงิน', 'เทา', 'เหลือง', 'เหลืองอ่อน', 'แดง', '่ขี้ม้า',
    ];
}
