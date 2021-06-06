<?php

namespace Database\Factories\Domain\Fragment;

use DDD\Domain\Fragment\Fragment;
use Illuminate\Database\Eloquent\Factories\Factory;

class FragmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fragment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url,
            'title' => $this->faker->name,
            'body' => $this->faker->text
        ];
    }
}
