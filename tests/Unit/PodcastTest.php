<?php

namespace Tests\Unit;

use App\Podcasts\Podcast;
use App\Podcasts\Repositories\PodcastRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PodcastTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function deletePodcast(){
      $podcast = factory(Podcast::class)->create();

      $podcastRepo = new PodcastRepository($podcast);
      $delete = $podcastRepo->deletePodcast();

      $this->assertTrue($delete);
    }

    /** @test */
    public function update_podcast(){

      $podcast = factory(Podcast::class)->create();

      $data = [
        'url' => $this->faker->url,
        'title' => $this->faker->word,
        'description' => $this->faker->text,
        'episode_number' => $this->faker->buildingNumber,
      ];

      $podcastRepo = new PodcastRepository($podcast);
      $update = $podcastRepo->updatePodcast($data);

      $this->assertTrue($update);
      $this->assertEquals($data['url'], $podcast->url);
      $this->assertEquals($data['title'], $podcast->title);
      $this->assertEquals($data['description'], $podcast->text);
      $this->assertEquals($data['episode_number'], $podcast->buildingNumber);
    }



    /** @test */
    public function test_read_podcast()
    {
      $podcast = factory(Podcast::class)->create();
      $podcastRepo = new PodcastRepository(new Podcast);
      $read = $podcastRepo->findPodcast($podcast->id);

      $this->assertInstanceOf(Podcast::class, $read);
      $this->assertEquals($read->url, $podcast->url);
      $this->assertEquals($read->title, $podcast->title);
      $this->assertEquals($read->description, $podcast->description);
      $this->assertEquals($read->episode_number, $podcast->buildingNumber);
    }

    /** @test */
    public function test_create_podcasts()
    {
        $data = [
          'url' => $this->faker->url,
          'title' => $this->faker->word,
          'description' => $this->faker->text,
          'episode_number' => $this->faker->buildingNumber,
        ];

        $podcastRepo = new PodcastRepository(new Podcast);
        $podcast = $podcastRepo->createPodcast($data);

        $this->assertInstanceOf(Podcast::class, $podcast);
        $this->assertEquals($data['url'], $podcast->url);
        $this->assertEquals($data['title'], $podcast->title);
        $this->assertEquals($data['description'], $podcast->description);
        $this->assertEquals($data['episode_number'], $podcast->episode_number);
    }
}
