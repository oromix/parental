<?php

namespace Parental\Tests\Features;

use Parental\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class AuthUserMethodReturnsChildModel extends TestCase
{
    #[Test]
    public function auth_user_returns_child_model_if_it_exists()
    {
        Admin::create();
        User::create();

        $this->assertInstanceOf(Admin::class, auth()->user());
    }
}
