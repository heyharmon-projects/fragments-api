<?php

namespace Database\Factories\Domain\Fragment;

use Illuminate\Database\Eloquent\Factories\Factory;

use DDD\Domain\Fragment\Fragment;

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
            'title' => $this->faker->name,
            'url' => $this->faker->url,
            'body' => $this->faker->text
        ];
    }
}
