<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WatchListControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @group watchListTest
     */
    public function shouldSaveAMovieIntoTheWatchListAsALoggedInUser()
    {
        $user = $this->createUser();
        $this->be($user);

    }
}
