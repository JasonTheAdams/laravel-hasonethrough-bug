<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class TestCampaign
 * @package Tests\Unit;
 *
 * @coversDefaultClass User
 */
class TestUser extends TestCase
{
    use RefreshDatabase;

    public function testShouldDoSomething()
    {
        $user = factory(User::class)->create();

        $this->assertTrue(true);
    }
}
