<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class CreateCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-category';

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
        $name = $this->ask('What is the name of the category?');
        $description = $this->ask('What is the description of the category?');

        $category = Category::create([
            'name' => $name,
            'description' => $description,
        ]);

        $this->info('Category created.' . $category->name);
    }
}