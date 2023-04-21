<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class CategoryCodeWithId extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get code of category with product id';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $inputID = $this->argument('id');
        $product = Product::where('id', $inputID);
        
        if (!isset($product)) {
            $this->error('Product not found!');
        } else {
            $this->info('Code of categories with id '.$inputID.' is '.$product->category->slug);
        }
    }
}
