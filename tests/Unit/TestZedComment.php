<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Comment;
use App\Donation;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class TestZedCampaign
 *
 * Note: The "Zed" is only added to cause the Comment tests to run last
 *
 * @package Tests\Unit;
 *
 * @coversDefaultClass Comment
 */
class TestZedComment extends TestCase
{
    use RefreshDatabase;

    public function testShouldRetrieveUser()
    {
        $user = factory(User::class)->create();
        $donation = factory(Donation::class)->create(['user_id' => $user->id]);
        $comment = factory(Comment::class)->create(['donation_id' => $donation->id]);

        $this->assertTrue($comment->user->is($user));
    }
}
