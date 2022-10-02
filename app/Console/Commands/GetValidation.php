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
            $logs->getValidation("http://10.15.1.102"); //VA1
            $logs->getValidation("http://10.15.1.103");//VA2
            $logs->getValidation("http://10.15.1.104");//VR1
            $logs->getValidation("http://10.15.1.105");//VR2
            $logs->getValidation("http://10.15.1.106");//M1
            $logs->getValidation("http://10.15.1.101");//M2
            Log::debug("Fin d'excécution du validation");

        } catch (\Illuminate\Database\QueryException $ex) {
            Log::error($ex->getMessage());
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
