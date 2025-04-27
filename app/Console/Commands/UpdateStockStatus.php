<?php

namespace App\Console\Commands;

use App\Models\Stock; // Ensure you import the Stock model
use Illuminate\Console\Command;

class UpdateStockStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stock:update-status'; // Define the command signature

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update stocks status to In-Stock if the in-stock date matches the current date'; // Provide a description

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get today's date
        $today = now()->toDateString(); // Get the current date in 'YYYY-MM-DD' format

        // Update the stock status where the in-stock date matches today's date
        $updatedCount = Stock::where('in_stock_date', $today)
                             ->update(['status' => 'In-Stock']); // Update the status to 'In-Stock'

        // Output message to the console
        if ($updatedCount > 0) {
            $this->info("$updatedCount stock(s) status updated to 'In-Stock' for today's in-stock date.");
        } else {
            $this->info('No stocks found with today\'s in-stock date.');
        }

        return 0; // Return 0 to indicate success
    }
}
