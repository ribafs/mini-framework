<?php


use Phinx\Seed\AbstractSeed;

class Products extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'description'      => $faker->name,
                'unity'         => $faker->regexify('[A-Z]3'),
                'date'    => $faker->date('Y-m-d'),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $this->insert('products', $data);
    }

}
