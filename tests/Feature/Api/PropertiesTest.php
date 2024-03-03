<?php

namespace Tests\Feature\Api;

use App\Models\Property;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PropertiesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_all_properties()
    {
        // Create Property so that the response returns it.
        $property = Property::factory()->create();

        $response = $this->getJson(route('api.properties.index'));
        // We will only assert that the response returns a 200 status for now.
        $response->assertOk();
    }
}
