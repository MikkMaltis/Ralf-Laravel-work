<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class CreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('What is the name of the product?');
        $description = $this->ask('What is the description of the product?');
        $price = $this->ask('What is the price of the product?');
        $category_id = $this->ask('What is the category id of the product?');

        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'category_id' => $category_id
        ]);

        $this->info('Product created.'. $product->name);
    }
}
