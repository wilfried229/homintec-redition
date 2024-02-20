<?php

namespace App\Console\Commands;

use App\Http\Controllers\AddDataServiceOnline;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ValidationSyncho extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:validationSyncho';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        try {
            Log::debug("Début d'excécution ");
            $logs  = new  AddDataServiceOnline();
            $logs->sendvalidation();
            Log::debug("Fin d'excécution du validation");

        } catch (\Illuminate\Database\QueryException $ex) {
            Log::error($ex->getMessage());
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
