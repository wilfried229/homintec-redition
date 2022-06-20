<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DbImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        //

        try {
            Log::debug("Début d'excécution ");
            DB::unprepared(file_get_contents('full/path/to/dump.sql'));
            Log::debug("Fin d'excécution importation Db");

        } catch (\Illuminate\Database\QueryException $ex) {
            Log::error($ex->getMessage());
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
