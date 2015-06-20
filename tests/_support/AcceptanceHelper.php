<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class AcceptanceHelper extends \Codeception\Module
{
    public function checkCookieValue($cookieValue, $exceptedValue){
        $this->assertEquals($cookieValue, $exceptedValue, "Cookie value equals to excepted value");
    }
}
