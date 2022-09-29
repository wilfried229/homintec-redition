<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\AddDataServiceOnline;

use Illuminate\Support\Facades\Log;
class GetValidation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getvalidation';

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
     * @return mixed
     */
    public function handle()
    {
        try {
            Log::debug("Début d'excécution ");
            $logs  = new  AddDataServiceOnline();
            $logs->getValidation("http://192.168.1.100");///DA1
            $logs->getValidation("http://192.168.1.100");//DA2
            $logs->getValidation("http://192.168.1.100");//DA3
            $logs->getValidation("http://192.168.1.100");//DA4
            $logs->getValidation("http://192.168.1.100");//DA5
            $logs->getValidation("http://192.168.1.100");//DA5
            $logs->getValidation("http://192.168.1.100");//DR1
            $logs->getValidation("http://192.168.1.100");//DR2
            $logs->getValidation("http://192.168.1.100");//DR3
            $logs->getValidation("http://192.168.1.100");//DR4
            $logs->getValidation("http://192.168.1.100");//DR5
            $logs->getValidation("http://192.168.1.100");//DR6


            Log::debug("Fin d'excécution du validation");

        } catch (\Illuminate\Database\QueryException $ex) {
            Log::error($ex->getMessage());
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
