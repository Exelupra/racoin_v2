<?php

namespace Test;


use PHPUnit\Framework\TestCase;
use controller\addItem;
use controller\KeyGenerator;

class ControllerTest extends TestCase
{
    public function testEmailValidation()
    {
        $addItemController = new addItem();

        $validEmail = "test@example.com";
        $this->assertTrue($addItemController->isEmail($validEmail));

        $invalidEmail = "invalid_email";
        $this->assertFalse($addItemController->isEmail($invalidEmail));
    }

    public function testAdvertiserCreation()
    {
        $advertiser = new Advertiser();

        $validData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'company' => 'ABC Inc.',
            'website' => 'http://example.com'
        ];
        $this->assertTrue($advertiser->createAdvertiser($validData));

        $invalidData = [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'company' => 'XYZ Corp.'
        ];
        $this->assertFalse($advertiser->createAdvertiser($invalidData));
    }
}


